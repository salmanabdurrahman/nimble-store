<?php
class Register_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function register_user($data)
    {
        return $this->db->insert('users', $data);
    }
}