<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cart extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Cart_model');
        $this->load->model('Products_model');
        $this->load->library('session');
    }
    public function index()
    {
        $data['header_title'] = 'Nimble | Cart';
        $this->load->view('templates/header', $data);
        $id = $this->session->userdata('id');
        $data['carts'] = $this->Cart_model->get_cart_by_user_id($id);
        $data['random_product'] = $this->Products_model->get_random_products(4);
        $data['total_product_at_cart'] = $this->Cart_model->count_cart_by_user_id($id);
        $data['total_item_price'] = $this->Cart_model->total_item($id);
        
        if ($data['total_item_price'] == 0) {
            $delivery = 0;
        } else {
            $delivery = 6.99;
        }
        
        $data['delivery'] = $delivery;
        $ppn = 0.12;
        $data['ppn'] = ($data['total_item_price'] + $delivery) * $ppn;
        $data['total'] = $data['total_item_price'] + $delivery + $data['ppn'];
        $query['categories'] = $this->db->get('categories')->result_array();
        $this->load->view('pages/cart/index', $data);
        $this->load->view('templates/subscribe');
        $this->load->view('templates/footer', $query);
    }

    public function add($id_product) {
        $id_size = $this->input->post('size');
        $data_product_size = $this->Cart_model->get_product_size($id_size, $id_product);
        $user_id = $this->session->userdata('id');
        $quantity = 1;
        $data = array(
            'user_id' => $user_id,
            'product_size_id' => $data_product_size['id'],
            'quantity' => $quantity
        );
        $this->Cart_model->add_cart($data);

        if ($this->db->affected_rows()) {
            redirect('cart');
        }
    }

    public function delete($id){
        $this->Cart_model->delete_cart($id);
        redirect('cart');
    }
}
