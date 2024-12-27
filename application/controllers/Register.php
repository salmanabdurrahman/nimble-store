<?php
class Register extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Register_model');
    }
    public function index()
    {
        $data['header_title'] = 'Nimble | Register';
        $this->load->model('Products_model');
        $query['categories'] = $this->db->get('categories')->result_array();
        $this->load->view('templates/header', $data);
        $this->load->view('pages/auth/register/index');
        $this->load->view('templates/subscribe');
        $this->load->view('templates/footer', $query);
    }

    public function submit()
    {
        $data = array(
            'full_name' => $this->input->post('fullname'),
            'username' => $this->input->post('username'),
            'gender' => $this->input->post('gender'),
            'phone' => $this->input->post('phone'),
            'email' => $this->input->post('email'),
            'password' => $this->input->post('password')
        );

        if ($this->Register_model->register_user($data)) {
            redirect('login');
        } else {
            $this->session->set_flashdata('error', 'Registrasi gagal, silakan coba lagi.');
            redirect('register');
        }
    }
}