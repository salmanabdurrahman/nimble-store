<?php
class About extends CI_Controller
{
    public function index()
    {
        $data['header_title'] = 'Nimble | About';
        $this->load->view('templates/header', $data);
        $this->load->view('pages/about/index');
        $this->load->view('templates/subscribe');
        $this->load->view('templates/footer');
    }
}
