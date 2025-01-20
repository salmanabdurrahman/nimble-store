<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Products extends CI_Controller
{
    public function index()
    {
        $data['header_title'] = 'Nimble | Products';
        $this->load->view('templates/header', $data);
        $this->load->model('Products_model');

        $query['sizes'] = $this->db->get('sizes')->result_array();
        $query['categories'] = $this->db->get('categories')->result_array();
        $query['colors'] = $this->db->get('colors')->result_array();

        $filter_type = $this->uri->segment(3); 
        $filter_id = $this->uri->segment(4);  

        if ($filter_type == 'color' && $filter_id != null) {
            $query['products'] = $this->Products_model->get_products_by_color($filter_id);
        } elseif ($filter_type == 'size' && $filter_id != null) {
            $query['products'] = $this->Products_model->get_products_by_size($filter_id);
        } elseif ($filter_type == 'category' && $filter_id != null) {
            $query['products'] = $this->Products_model->get_products_by_category($filter_id);
        } else {
            $query['products'] = $this->Products_model->get_products(); 
        }

        $query['count_all_products'] = $this->Products_model->count_all_products();

        $this->load->view('pages/products/index', $query);

        $this->load->view('templates/subscribe');
        $this->load->view('templates/footer');
    }

    public function detail($id){
        $data['header_title'] = 'Nimble | Product Detail';
        $this->load->model('Products_model');
        $this->load->model('Admin_model');
        $data['product_sizes'] = $this->Products_model->get_sizes_by_product($id);
        $data['size_ada'] = $this->Products_model->get_sizes_by_product_name($id);
        $query['categories'] = $this->db->get('categories')->result_array();

        if ($id) {
            $data['product'] = $this->Products_model->get_product_by_id($id);
            $data['categories'] = $this->Products_model->get_products_by_category($id);
            if (empty($data['product'])) {
                show_404();
            }
            $data['comments'] = $this->Admin_model->get_comments_by_product_id($id);
        } else {
            show_404();
        }
        $data['random_product'] = $this->Products_model->get_random_products(4);
        $this->load->view('templates/header', $data);
        $this->load->view('pages/product_detail/index', $data);
        $this->load->view('templates/subscribe');
        $this->load->view('templates/footer', $query);
    }
}
