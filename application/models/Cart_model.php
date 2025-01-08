<?php
class Cart_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function get_cart_by_user_id($user_id)
    {
        $this->db->select('
        cart.id, 
        cart.user_id, 
        cart.product_id, 
        cart.quantity, 
        cart.added_at, 
        products.name AS product_name, 
        products.price AS product_price, 
        users.full_name AS user_name, 
        products.size_id AS product_size, 
        products.description AS product_description, 
        products.image_url AS product_image, 
        sizes.name AS product_size_name, 
        colors.name AS product_color_name, 
        categories.name AS product_category_name');
        $this->db->from('cart');
        $this->db->join('products', 'cart.product_id = products.id', 'left');
        $this->db->join('users', 'cart.user_id = users.id', 'left');
        $this->db->join('sizes', 'products.size_id = sizes.id', 'left'); // Join dengan tabel sizes
        $this->db->join('colors', 'products.color_id = colors.id', 'left'); // Join dengan tabel colors
        $this->db->join('categories', 'products.category_id = categories.id', 'left'); // Join dengan tabel categories
        $this->db->where('cart.user_id', $user_id);
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
        $this->db->join('products p', 'c.product_id = p.id', 'inner');
        $this->db->where('c.user_id', $user_id);
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->row()->total_price;
        } else {
            return 0; 
        }
    }

    public function total(){
        
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
