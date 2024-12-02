<?php
class Cart extends CI_Controller
{
    public function index()
    {
        $data['header_title'] = 'Nimble | Cart';
        $this->load->view('templates/header', $data);
        $this->load->view('pages/cart/index');
        $this->load->view('templates/subscribe');
        $this->load->view('templates/footer');
    }
}
