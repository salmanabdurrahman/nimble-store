<?php
class Login extends CI_Controller
{
    public function index()
    {
        $data['header_title'] = 'Nimble | Login';
        $this->load->view('templates/header', $data);
        $this->load->model('Products_model');
        $query['categories'] = $this->db->get('categories')->result_array();
        $this->load->view('pages/auth/login/index');
        $this->load->view('templates/subscribe');
        $this->load->view('templates/footer', $query);
    }
}