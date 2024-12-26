<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Subscribe extends CI_Controller
{
    public function add_subscribe_action()
    {
        $email = $this->input->post('email');

        $data = array(
            'email' => $email,

        );
        $this->load->model('Subscribe_model');
        $this->Subscribe_model->insert_subscribe($data);

        if ($this->db->affected_rows()) {
            redirect('home');
        } else {
            redirect('home');
        }
    }
    public function test_insert()
    {
        $this->load->model('Subscribe_model');
        $data = [
            'email' => 'test@example.com',
        ];

        if ($this->Subscribe_model->insert_subscribe($data)) {
            echo 'Insert successful!';
        } else {
            echo 'Insert failed!';
        }
    }

}

