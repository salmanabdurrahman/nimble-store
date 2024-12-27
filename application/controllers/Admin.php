<?php
class Admin extends CI_Controller
{
    public function __construct()
    {
        // yg gak kepake hapus aja
        parent::__construct();
        $this->load->model('Admin_model');
        $this->load->model('Admin_users_models');
        $this->load->model('Comments_model');
    }

    // DASHBOARD
    public function dashboard()
    {
        $data['header_title'] = 'Nimble | Admin Dashboard';
        $this->load->view('templates/admin_header', $data);
        $this->load->view('templates/dashboard_layout');
        $this->load->view('admin/dashboard');
        $this->load->view('templates/admin_footer');
    }

    // USERS
    public function users()
    {
        $this->load->model('Admin_users_models');
        $query['users'] = $this->Admin_users_models->get_users();
        $query['total_users'] = $this->Admin_users_models->count_users();
        $data['header_title'] = 'Nimble | Admin Dashboard';
        $this->load->view('templates/admin_header', $data);
        $this->load->view('templates/dashboard_layout');
        $this->load->view('admin/users/users', $query);
        $this->load->view('templates/admin_footer');
    }

    public function add_user()
    {
        $data['header_title'] = 'Nimble | Admin Dashboard';
        $this->load->view('templates/admin_header', $data);
        $this->load->view('templates/dashboard_layout');
        $this->load->view('admin/users/add_user');
        $this->load->view('templates/admin_footer');
    }

    public function add_users_action()
    {
        $fullname = $this->input->post('fullname');
        $username = $this->input->post('username');
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $phone = $this->input->post('phone');
        $gender = $this->input->post('gender');
        $province = $this->input->post('province');
        $city = $this->input->post('city');
        $district = $this->input->post('district');
        $subdistrict = $this->input->post('subdistrict');
        $street = $this->input->post('street');
        $description = $this->input->post('description');
        $zip_code = $this->input->post('zip_code');

        $config['upload_path'] = './public/uploads/users';
        $config['allowed_types'] = 'jpg|jpeg|png|gif';

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('picture')) {
            $picture = $this->upload->data('file_name');
        } else {
            $picture = null;
            $error = $this->upload->display_errors();
        }

        $data = array(
            'full_name' => $fullname,
            'username' => $username,
            'email' => $email,
            'password' => $password,
            'phone' => $phone,
            'gender' => $gender,
            'address_province' => $province,
            'address_city' => $city,
            'address_district' => $district,
            'address_subdistrict' => $subdistrict,
            'street_name' => $street,
            'address_description' => $description,
            'zip_code' => $zip_code,
            'profile_picture' => $picture
        );

        $this->Admin_users_models->add_user($data);

        if ($this->db->affected_rows()) {
            redirect('Admin/users');
        } else {
            redirect('Admin/add_user');
        }
    }

    public function update_user($id)
    {
        $data['header_title'] = 'Nimble | Dashboard';
        $this->load->view('templates/admin_header', $data);
        $data['user'] = $this->Admin_users_models->get_users_by_id($id)->row_array();
        $this->load->view('templates/dashboard_layout');
        $this->load->view('admin/users/update_user', $data);
        $this->load->view('templates/admin_footer');
    }

    public function update_user_action()
    {
        $id = $this->input->post('id');
        $fullname = $this->input->post('fullname');
        $username = $this->input->post('username');
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $phone = $this->input->post('phone');
        $gender = $this->input->post('gender');
        $province = $this->input->post('province');
        $city = $this->input->post('city');
        $district = $this->input->post('district');
        $subdistrict = $this->input->post('subdistrict');
        $street = $this->input->post('street');
        $description = $this->input->post('description');
        $zip_code = $this->input->post('zip_code');

        $user = $this->Admin_users_models->get_users_by_id($id)->row_array();
        $picture_old = $user['profile_picture'];

        $config['upload_path'] = './public/uploads/users';
        $config['allowed_types'] = 'jpg|jpeg|png|gif';

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('picture')) {
            $picture = $this->upload->data('file_name');
        } else {
            $picture = $picture_old;
            $error = $this->upload->display_errors();
        }

        $data = array(
            'full_name' => $fullname,
            'username' => $username,
            'email' => $email,
            'password' => $password,
            'phone' => $phone,
            'gender' => $gender,
            'address_province' => $province,
            'address_city' => $city,
            'address_district' => $district,
            'address_subdistrict' => $subdistrict,
            'street_name' => $street,
            'address_description' => $description,
            'zip_code' => $zip_code,
            'profile_picture' => $picture
        );

        $this->Admin_users_models->update_user($data, $id);

        if ($this->db->affected_rows()) {
            redirect('Admin/users');
        } else {
            redirect('Admin/update_user' . $id);
        }
    }

    public function delete_user($id_user)
    {
        $this->Admin_users_models->delete_user($id_user);
        if ($this->db->affected_rows()) {
            redirect('Admin/users');
        } else {
            echo "Data gagal dihapus";
        }
    }

    // PRODUCTS
    public function products()
    {
        $this->load->model('Admin_model');
        $query['products'] = $this->Admin_model->get_product();
        $query['count_all_products'] = $this->Admin_model->count_all_products();
        $data['header_title'] = 'Nimble | Admin Dashboard';
        $this->load->view('templates/admin_header', $data);
        $this->load->view('templates/dashboard_layout');
        $this->load->view('admin/products/products', $query);
        $this->load->view('templates/admin_footer');
    }

    public function add_product()
    {
        $data['header_title'] = 'Nimble | Admin Dashboard';
        $this->load->view('templates/admin_header', $data);
        $this->load->view('templates/dashboard_layout');
        $this->load->view('admin/products/add_product');
        $this->load->view('templates/admin_footer');
    }

    public function add_product_action()
    {
        $name = $this->input->post('name');
        $description = $this->input->post('description');
        $price = $this->input->post('price');
        $stock = $this->input->post('stock');
        $category = $this->input->post('category');
        $size = $this->input->post('size');
        $color = $this->input->post('color');
        $brand = $this->input->post('brand');

        $config['upload_path'] = './public/uploads';
        $config['allowed_types'] = 'jpg|jpeg|png|gif';

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('picture')) {
            $picture = $this->upload->data('file_name');
        } else {
            $picture = null;
            $error = $this->upload->display_errors();
        }

        $data = array(
            'name' => $name,
            'description' => $description,
            'price' => $price,
            'stock' => $stock,
            'category_id' => $category,
            'size_id' => $size,
            'color_id' => $color,
            'brand' => $brand,
            'image_url' => $picture
        );
        $this->Admin_model->add_product($data);

        if ($this->db->affected_rows()) {
            redirect('Admin/products');
        } else {
            redirect('Admin/add_product');
        }
    }

    public function update_product($id)
    {
        $data['header_title'] = 'Nimble | Admin Dashboard';
        $data['product'] = $this->Admin_model->get_product_by_id($id)->row_array();
        $this->load->view('templates/admin_header', $data);
        $this->load->view('templates/dashboard_layout');
        $this->load->view('admin/products/update_product', $data);
        $this->load->view('templates/admin_footer');
    }

    public function update_product_action()
    {
        $id = $this->input->post('id');
        $name = $this->input->post('name');
        $description = $this->input->post('description');
        $price = $this->input->post('price');
        $stock = $this->input->post('stock');
        $category = $this->input->post('category');
        $size = $this->input->post('size');
        $color = $this->input->post('color');
        $brand = $this->input->post('brand');

        $product = $this->Admin_model->get_product_by_id($id)->row_array();
        $old_picture = $product['image_url'];

        $config['upload_path'] = './public/uploads';
        $config['allowed_types'] = 'jpg|jpeg|png|gif';

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('picture')) {
            $picture = $this->upload->data('file_name');
        } else {
            $picture = $old_picture;
        }

        $data = array(
            'name' => $name,
            'description' => $description,
            'price' => $price,
            'stock' => $stock,
            'category_id' => $category,
            'size_id' => $size,
            'color_id' => $color,
            'brand' => $brand,
            'image_url' => $picture
        );
        $this->Admin_model->update_product($data, $id);

        if ($this->db->affected_rows()) {
            redirect('Admin/products');
        } else {
            redirect('Admin/update_product/' . $id);
        }
    }

    public function delete_product($id_product)
    {
        $this->Admin_model->delete_product($id_product);
        if ($this->db->affected_rows()) {
            redirect('Admin/products');
        } else {
            echo "Data gagal dihapus";
        }
    }
    // COMMENTS
    public function comments()
    {
        $data['header_title'] = 'Nimble | Dashboard';
        $data['comments'] = $this->Comments_model->get_comments();
        $data['count_all_comment'] = $this->Comments_model-> count_all_comments();
        $this->load->view('templates/admin_header', $data);
        $this->load->view('templates/dashboard_layout');
        $this->load->view('admin/comments/comments', $data);
        $this->load->view('templates/admin_footer');
    }



    public function add_comment()
    {
        $data['header_title'] = 'Nimble | Admin Dashboard';
        $this->load->view('templates/admin_header', $data);
        $this->load->view('templates/dashboard_layout');
        $this->load->view('admin/comments/add_comment');
        $this->load->view('templates/admin_footer');
    }

    public function add_comment_action()
    {
        $product_name = $this->input->post('product_id');
        $user_id = $this->input->post('user_id');
        $comment = $this->input->post('comment');
        $rating = $this->input->post('rating');

        $data = array(
            'product_id' => $product_name,
            'user_id' => $user_id,
            'comment' => $comment,
            'rating' => $rating
        );

        $this->Comments_model->add_comment($data);

        if ($this->db->affected_rows()) {
            redirect('Admin/products');
        } else {
            redirect('Admin/add_product');
        }
    }


    public function update_comment($id)
    {
        $data['header_title'] = 'Nimble | Dashboard';
        $this->load->view('templates/admin_header', $data);
        $this->load->view('templates/dashboard_layout');
        $this->load->view('admin/comments/update_comment', $data);
        $this->load->view('templates/admin_footer');
    }

    public function update_add_comment_action()
    {
        $comment_id = $this->input->post('id');
        $product_id = $this->input->post('product_id');
        $user_id = $this->input->post('user_id');
        $comment = $this->input->post('comment');
        $rating = $this->input->post('rating');



        $data = array(
            'product_id' => $product_id,
            'user_id' => $user_id,
            'comment' => $comment,
            'rating' => $rating
        );

        $this->Comments_model->update_comment($data, $comment_id);

        if ($this->db->affected_rows()) {
            redirect('Admin/comments');
        } else {
            echo "Failed to update/add comment";
        }
    }

    public function delete_comment($id)
    {
        $this->Comments_model->delete_comment($id);
        if ($this->db->affected_rows()) {
            redirect('admin/comments');
        } else {
            echo "Data gagal dihapus";
        }
    }
}