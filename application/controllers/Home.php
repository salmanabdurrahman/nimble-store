<?php
class Home extends CI_Controller
{
    public function index()
    {
        $this->load->view('templates/header');
        $this->load->view('pages/home/index');
        $this->load->view('templates/subscribe');
        $this->load->view('templates/footer');
    }
}
