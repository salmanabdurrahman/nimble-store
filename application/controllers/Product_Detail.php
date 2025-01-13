<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Product_Detail extends CI_Controller
{
    public function index()
    {
        $id = $this->input->get('id');
        $data['header_title'] = 'Nimble | Product Detail';
        $this->load->model('Products_model');
        $this->load->model('Admin_model');
        $data['product_sizes'] = $this->Products_model->get_sizes_by_product($id);
        $data['size_ada'] = $this->Products_model->get_sizes_by_product_name($this->input->get('id'));
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
