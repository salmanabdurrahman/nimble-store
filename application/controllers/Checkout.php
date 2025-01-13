<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Checkout extends CI_Controller
{
    public function index()
    {
        $this->load->model('Cart_model');
        $this->load->model('Checkout_model');
        $id = $this->session->userdata('id');
        $data['order_details'] = $this->Cart_model->get_cart_by_user_id($id);
        $data['total_product_at_cart'] = $this->Cart_model->count_cart_by_user_id($id);
        $data['total_item_price'] = $this->Cart_model->total_item($id);
        $data['user'] = $this->Checkout_model->get_user($id);

        if ($data['total_item_price'] == 0) {
            $delivery = 0;
        } else {
            $delivery = 6.99;
        }
        
        $data['delivery'] = $delivery;
        $ppn = 0.12;
        $data['ppn'] = ($data['total_item_price'] + $delivery) * $ppn;
        $data['total'] = $data['total_item_price'] + $delivery + $data['ppn'];

        $data['header_title'] = 'Nimble | Checkout';
        $this->load->view('templates/header', $data);
        $this->load->model('Products_model');
        $query['categories'] = $this->db->get('categories')->result_array();
        $this->load->view('pages/checkout/index');
        $this->load->view('templates/subscribe');
        $this->load->view('templates/footer', $query);
    }
}
