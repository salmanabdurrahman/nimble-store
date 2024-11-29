<?php
class Register extends CI_Controller
{
    public function index()
    {
        $data['header_title'] = 'Nimble | Register';
        $this->load->view('templates/header', $data);
        $this->load->view('pages/auth/register/index');
        $this->load->view('templates/subscribe');
        $this->load->view('templates/footer');
    }
}