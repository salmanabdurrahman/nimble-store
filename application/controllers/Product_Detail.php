<?php
class Product_Detail extends CI_Controller
{
    public function index()
    {
        $data['header_title'] = 'Nimble | Product Detail';
        $this->load->view('templates/header', $data);
        $this->load->view('pages/product_detail/index');
        $this->load->view('templates/subscribe');
        $this->load->view('templates/footer');
    }
}