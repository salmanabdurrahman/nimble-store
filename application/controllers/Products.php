<?php
class Products extends CI_Controller
{
    public function index()
    {
        $data['header_title'] = 'Nimble | Products';
        $this->load->view('templates/header', $data);
        $this->load->view('pages/products/index');
        $this->load->view('templates/subscribe');
        $this->load->view('templates/footer');
    }
}
