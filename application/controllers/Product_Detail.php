<?php
class Product_Detail extends CI_Controller
{
    public function index()
    {
        // $data['header_title'] = 'Nimble | Product Detail';
        // $this->load->view('templates/header', $data);
        // $this->load->model('Products_model');
        // $this->load->view('pages/product_detail/index');
        // $this->load->view('templates/subscribe');
        // $this->load->view('templates/footer');
        $data['header_title'] = 'Nimble | Product Detail';
        $this->load->model('Products_model');
        $data['sizes'] = $this->db->get('sizes')->result_array();
        $query['categories'] = $this->db->get('categories')->result_array();
        $id = $this->input->get('id');
        if ($id) {
            $data['product'] = $this->Products_model->get_product_by_id($id);
        }
        $data['random_product'] = $this->Products_model->get_random_products(4);
        $this->load->view('templates/header', $data);
        $this->load->view('pages/product_detail/index', $data); // Pastikan data di-passing ke view
        $this->load->view('templates/subscribe');
        $this->load->view('templates/footer', $query);
    }
}
