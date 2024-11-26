<?php
class Contact extends CI_Controller
{
    public function index()
    {
        $data['header_title'] = 'Nimble | Contact';
        $this->load->view('templates/header', $data);
        $this->load->view('pages/contact/index');
        $this->load->view('templates/subscribe');
        $this->load->view('templates/footer');
    }
}
