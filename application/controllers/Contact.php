<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Contact extends CI_Controller
{
    public function index()
    {
        $data['header_title'] = 'Nimble | Contact';
        $this->load->model('Contact_model');
        $this->load->model('Products_model');
        $this->load->library(['form_validation', 'session']);
        $this->load->helper('url');
        $query['categories'] = $this->db->get('categories')->result_array();

        if ($this->input->post()) {
            $this->form_validation->set_rules('name', 'Name', 'required|trim');
            $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
            $this->form_validation->set_rules('message', 'Message', 'required|trim');

            if ($this->form_validation->run() === TRUE) {
                $data = [
                    'name' => $this->input->post('name', TRUE),
                    'email' => $this->input->post('email', TRUE),
                    'message' => $this->input->post('message', TRUE),
                ];
                $this->Contact_model->insert_contact($data);

                // Set flashdata sukses
                $this->session->set_flashdata('success', 'Your message has been sent successfully!');
                redirect('contact');
            } else {
                // Jika validasi gagal, set flashdata error
                $this->session->set_flashdata('error', validation_errors('<li>', '</li>'));
                redirect('contact');
            }
        }

        $this->load->view('templates/header', $data);
        $this->load->view('pages/contact/index');
        $this->load->view('templates/subscribe');
        $this->load->view('templates/footer', $query);
    }
}
