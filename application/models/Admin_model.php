<?php
class Admin_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    // public function get_product(){
    //     $query = $this->db->get('products');
    //     return $query->result_array();
    // }
    public function get_product() {
        // Melakukan join antara tabel products, sizes, categories, dan colors
        $this->db->select('products.*, categories.name as category_name, sizes.name as size_name, colors.name as color_name');
        $this->db->from('products');
        $this->db->join('categories', 'products.category_id = categories.id', 'left');
        $this->db->join('sizes', 'products.size_id = sizes.id', 'left');
        $this->db->join('colors', 'products.color_id = colors.id', 'left');
        $query = $this->db->get();
        return $query->result_array();
    }
    
    public function count_all_products()
    {
        $this->db->from('products');
        return $this->db->count_all_results();
    }
    public function get_product_by_id($idProduk){
        return $this->db->get_where('products', array('id' => $idProduk));
    }

    public function add_product($data){
        $this->db->insert('products', $data);
    }

    public function update_product($data, $id){
        $this->db->where('id', $id);
        $this->db->update('products', $data);
    }
    
    public function delete_product($id){
        $this->db->where('id', $id);
        $this->db->delete('products');
    }
}
