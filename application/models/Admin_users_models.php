<?php
class Admin_users_models extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function get_users(){
        $query = $this->db->get('users');
        return $query->result_array();
    }

    public function count_users() {
        return $this->db->count_all('users');
    }

}