<?php
class Product_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function get_products()
    {
        $query = $this->db->get('products');
        return $query->result_array();
    }
}
