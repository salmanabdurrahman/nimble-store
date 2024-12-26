<?php
class Cart_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    // public function get_cart()
    // {
    //     $this->db->select('*');
    //     $this->db->from('checkout_products');
    //     $this->db->where('user_id', $this->session->userdata('user_id'));
    //     $query = $this->db->get();
    //     return $query->result();
    // }
}
