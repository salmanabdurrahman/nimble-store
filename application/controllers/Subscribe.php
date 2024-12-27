<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Subscribe extends CI_Controller
{
    public function add_subscribe_action()
    {
        $this->load->model('Subscribe_model');
        $this->load->library(['form_validation', 'session']);
        $this->load->helper('url');

        $this->form_validation->set_rules('email', 'Email', 'required|valid_email|trim');

        if ($this->form_validation->run() === TRUE) {
            $email = $this->input->post('email', TRUE);
            $data = ['email' => $email];

            $this->Subscribe_model->insert_subscribe($data);

            if ($this->db->affected_rows()) {
                // Set flashdata sukses
                $this->session->set_flashdata('success', 'Thank you for subscribing!');
            } else {
                // Jika insert gagal
                $this->session->set_flashdata('error', 'Failed to save your email. Please try again.');
            }
        } else {
            $this->session->set_flashdata('error', validation_errors('<li>', '</li>'));
        }

        redirect($_SERVER['HTTP_REFERER']);
    }

    public function test_insert()
    {
        $this->load->model('Subscribe_model');
        $data = ['email' => 'test@example.com'];

        if ($this->Subscribe_model->insert_subscribe($data)) {
            echo 'Insert successful!';
        } else {
            echo 'Insert failed!';
        }
    }
}
