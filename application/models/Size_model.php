<?php
class Size_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function get_size_by_product_id($id_product) {
        $this->db->select('product_size.*, sizes.name AS size_name');
        $this->db->from('product_size');
        $this->db->join('sizes', 'sizes.id = product_size.id_sizes');
        $this->db->where('id_products', $id_product);
        $query = $this->db->get();
        return $query->result_array();
    }

    public function add_size($data) {
        return $this->db->insert('product_size', $data);
    }

    public function delete_size($product_size){
        $this->db->where('id', $product_size);
        return $this->db->delete('product_size');
    }

    public function count_all_product_sizes_by_product_id($id_product){
        $this->db->from('product_size');
        $this->db->where('id_products', $id_product);
        return $this->db->count_all_results();
    }
}
