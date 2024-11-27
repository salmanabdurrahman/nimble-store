<?php
class Home extends CI_Controller
{
    public function index()
    {
        $data['header_title'] = 'Nimble | Home';
        $this->load->view('templates/header', $data);
        $this->load->view('pages/home/index');
        $this->load->view('templates/subscribe');
        $this->load->view('templates/footer');

        // ngambil data products dari database
        // $this->load->model('Products_model');
        // $data['products'] = $this->Products_model->get_products();
        // $this->load->view('pages/home/index', $data);
    }
}