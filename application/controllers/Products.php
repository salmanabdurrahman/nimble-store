<?php
class Products extends CI_Controller
{
    public function index()
    {
        $this->load->view('pages/products/index');
    }
}
