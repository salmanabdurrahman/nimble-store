<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Login_model');
        $this->load->library('session');
    }

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

    public function authenticate()
    {
        // // Ambil data dari form
        // $username = $this->input->post('username');
        // $password = $this->input->post('password');

        // // Validasi login
        // $user = $this->Login_model->validate($username, $password);

        // if ($user) {
        //     // Jika valid, set session dan redirect
        //     $this->session->set_userdata('user_id', $user->id);
        //     redirect('admin/products'); // Ganti dengan halaman yang sesuai
        // } else {
        //     // Jika tidak valid, kembali ke halaman login dengan pesan error
        //     $this->session->set_flashdata('error', 'Username atau password salah');
        //     redirect('login');
        // }
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $response = $this->db->get_where('users', array('username' => $username, 'password' => $password))->row_array();
        if ($response) {
            $data = array(
                'user_logged_in' => TRUE,
                'id' => $response['id'],
                'role' => $response['role'],
                'profile_picture' => $response['profile_picture'],
                'email' => $response['email']
            );
            $this->session->set_userdata($data);
            if ($response['role'] == 'admin') {
                redirect(base_url('admin/dashboard'));
            } elseif ($response['role'] == 'user') {
                redirect(base_url('user/dashboard'));
            }
            // if ($response->role == 'admin') {
            //     redirect(base_url('admin/dashboard'));
            // } elseif ($response->role == 'user') {
            //     $this->session->set_userdata($data);
            //     redirect(base_url('user/dashboard'));
            // }
        } else {
            $this->session->set_flashdata('error', 'Invalid username or password');
            redirect(base_url('login'));
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect(base_url('Login'));
    }
}
