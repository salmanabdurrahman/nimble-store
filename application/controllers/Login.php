<?php
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
        // Ambil data dari form
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        // Validasi login
        $user = $this->Login_model->validate($username, $password);

        if ($user) {
            // Jika valid, set session dan redirect
            $this->session->set_userdata('user_logged_in', true);
            $this->session->set_userdata('user_id', $user->id);
            $this->session->set_userdata('user_email', $user->email);
            if ($user->role == 'admin') {
                $this->session->set_userdata('role', 'admin');
                redirect('admin/dashboard');
            } else {
                $this->session->set_userdata('role', 'user');
                redirect('user/dashboard'); // Ganti dengan halaman yang sesuai
            }
        } else {
            // Jika tidak valid, kembali ke halaman login dengan pesan error
            $this->session->set_flashdata('error', 'Username atau password salah');
            redirect('login');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('user_id');
        redirect('login');
    }
}
