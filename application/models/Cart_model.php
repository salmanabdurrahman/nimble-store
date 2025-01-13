<?php
class Cart_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function get_cart_by_user_id($user_id) {
        $this->db->select('cart.id, cart.user_id, cart.product_size_id, cart.quantity, cart.added_at, 
        products.name AS product_name, 
        sizes.name AS product_size_name, 
        products.price AS product_price, 
        products.image_url AS product_image, 
        products.description AS product_description, 
        colors.name AS product_color_name');
        $this->db->from('cart');
        $this->db->join('product_size', 'cart.product_size_id = product_size.id');
        $this->db->join('products', 'product_size.id_products = products.id');
        $this->db->join('sizes', 'product_size.id_sizes = sizes.id');
        $this->db->join('colors', 'products.color_id = colors.id');
        $this->db->where('cart.user_id', $user_id); // Kondisi berdasarkan user_id
        $query = $this->db->get();
        return $query->result_array();
    }

    public function count_cart_by_user_id($user_id)
    {
        $this->db->select('*');
        $this->db->from('cart');
        $this->db->where('user_id', $user_id);
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function total_item($user_id) {
        $this->db->select('SUM(p.price * c.quantity) as total_price');
        $this->db->from('cart c');
        $this->db->join('product_size ps', 'c.product_size_id = ps.id');
        $this->db->join('products p', 'ps.id_products = p.id');
        $this->db->where('c.user_id', $user_id);
        $query = $this->db->get();
        
        if ($query->num_rows() > 0) {
            return $query->row()->total_price;
        } else {
            return 0;
        }
    }

    public function get_product_size($id_sizes, $id_products){
        $this->db->select('*');
        $this->db->from('product_size');
        $this->db->where(['id_sizes' => $id_sizes, 'id_products' => $id_products]);
        $query = $this->db->get();
        return $query->row_array();
    }


    public function add_cart($data)
    {
        // INSERT INTO `cart` (`user_id`, `product_id`, `quantity`) VALUES
        // (1, 1, 2),
        // (5, 2, 1);
        $this->db->insert('cart', $data);
    }
    
    public function update_cart(){
        
    }

    public function delete_cart($id){
        $this->db->where('id', $id);
        $this->db->delete('cart');
    }
}
