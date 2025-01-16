<?php
class Checkout_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function get_user($user_id) {
        $this->db->where('id', $user_id);
        $query = $this->db->get('users');
        return $query->row_array();
    }

    public function update_user($data, $user_id) {
        $this->db->where('id', $user_id);
        $this->db->update('users', $data);
    }
}
