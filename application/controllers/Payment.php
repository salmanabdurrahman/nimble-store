<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Payment extends CI_Controller
{
    public function index()
    {
        $data['header_title'] = 'Nimble | Payment';
        $data['order_number'] = $this->session->flashdata('order_number');
        $this->load->view('pages/payment/index', $data);
    }
}