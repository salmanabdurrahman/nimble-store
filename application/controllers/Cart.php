<?php
class Cart extends CI_Controller
{
    public function index()
    {
        $data['header_title'] = 'Nimble | Cart';
        $this->load->view('templates/header', $data);
        $this->load->model('Products_model');
        $data['random_product'] = $this->Products_model->get_random_products(4);
        $query['categories'] = $this->db->get('categories')->result_array();
        $this->load->view('pages/cart/index', $data);
        $this->load->view('templates/subscribe');
        $this->load->view('templates/footer', $query);
    }
}
