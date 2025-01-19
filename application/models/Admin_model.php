<?php
class Admin_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    // ======================== Produk ========================
    public function get_product()
    {
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

    public function get_product_by_id($idProduk)
    {
        return $this->db->get_where('products', array('id' => $idProduk));
    }

    public function add_product($data)
    {
        $this->db->insert('products', $data);
    }

    public function update_product($data, $id)
    {
        $this->db->where('id', $id);
        $this->db->update('products', $data);
    }

    public function delete_product($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('products');
    }

    // ======================== Pengguna ========================
    public function get_users()
    {
        $query = $this->db->get('users');
        return $query->result_array();
    }

    public function count_users()
    {
        return $this->db->count_all('users');
    }

    public function get_users_by_id($id)
    {
        return $this->db->get_where('users', array('id' => $id));
    }

    public function add_user($data)
    {
        $this->db->insert('users', $data);
    }

    public function update_user($data, $id)
    {
        $this->db->where('id', $id);
        $this->db->update('users', $data);
    }

    public function delete_user($id_user)
    {
        $this->db->where('id', $id_user);
        $this->db->delete('users');
    }

    // ======================== Komentar ========================
    public function get_comments()
    {
        $this->db->select('comments.id, comments.product_id, comments.user_id, comments.comment, comments.rating, comments.created_at, 
                               users.full_name as user_name, products.name as product_name');
        $this->db->from('comments');
        $this->db->join('users', 'comments.user_id = users.id', 'left');
        $this->db->join('products', 'comments.product_id = products.id', 'left');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function count_all_comments()
    {
        $this->db->from('comments');
        return $this->db->count_all_results();
    }

    public function get_comment_by_id($id)
    {
        $this->db->select('comments.*, products.name AS product_name, users.full_name AS user_name');
        $this->db->from('comments');
        $this->db->join('products', 'comments.product_id = products.id', 'left');
        $this->db->join('users', 'comments.user_id = users.id', 'left');
        $this->db->where('comments.id', $id);
        return $this->db->get();
    }

    public function add_comment($data)
    {
        $this->db->insert('comments', $data);
    }

    public function update_comment($data, $id)
    {
        $this->db->where('id', $id);
        $this->db->update('comments', $data);
    }

    public function delete_comment($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('comments');
    }

    public function get_comments_by_product_id($product_id)
    {
        $this->db->select('comments.*, users.full_name as user_name', 'products.image_url as image_url');
        $this->db->from('comments');
        $this->db->join('users', 'comments.user_id = users.id', 'left');
        $this->db->where('comments.product_id', $product_id);
        $query = $this->db->get();
        return $query->result_array();
    }

    public function get_comments_by_user_id()
    {
        $this->db->select('comments.id, comments.product_id, comments.user_id, comments.comment, comments.rating, comments.created_at, 
                               users.full_name as user_name, products.name as product_name');
        $this->db->from('comments');
        $this->db->join('users', 'comments.user_id = users.id', 'left');
        $this->db->join('products', 'comments.product_id = products.id', 'left');
        $this->db->where('comments.user_id', $this->session->userdata('id'));
        $query = $this->db->get();
        return $query->result_array();
    }

    public function count_comments_by_user_id()
    {
        $this->db->where('user_id', $this->session->userdata('id'));
        return $this->db->count_all_results('comments');
    }

    public function count_orders()
    {
        $this->db->from('checkout');
        return $this->db->count_all_results();
    }

    public function get_orders()
    {
        $this->db->select('checkout.*, 
        users.username AS username,
        products.name AS product_name,
        sizes.name AS product_size,
        products.price AS product_price');
        $this->db->from('checkout');
        $this->db->join('users', 'checkout.user_id = users.id', 'left');
        $this->db->join('product_size', 'checkout.product_size_id = product_size.id', 'left');
        $this->db->join('products', 'product_size.id_products = products.id', 'left');
        $this->db->join('sizes', 'product_size.id_sizes = sizes.id', 'left');
        $this->db->order_by('checkout.status', 'ASC');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function get_last_order_today($date){
        $this->db->select('order_number');
        $this->db->from('checkout');
        $this->db->like('order_number', $date, 'after'); 
        $this->db->order_by('order_number', 'DESC');
        $this->db->limit(1);
        $query = $this->db->get();
        return $query->row_array(); 
    }
    public function add_order($data){
        $this->db->insert('checkout', $data);
    }

    public function update_order_status($id, $status){
        $this->db->where('id', $id);
        $this->db->update('checkout', array('status' => $status));
    }

    public function get_order_by_user_id($user_id)
    {
        $this->db->select('checkout.*,
        checkout.id AS checkout_id,
        users.username AS username,
        products.name AS product_name,
        sizes.name AS product_size,
        products.price AS product_price');
        $this->db->from('checkout');
        $this->db->join('users', 'checkout.user_id = users.id', 'left');
        $this->db->join('product_size', 'checkout.product_size_id = product_size.id', 'left');
        $this->db->join('products', 'product_size.id_products = products.id', 'left');
        $this->db->join('sizes', 'product_size.id_sizes = sizes.id', 'left');
        $this->db->order_by('checkout.status', 'ASC');
        $this->db->where('checkout.user_id', $user_id);
        $query = $this->db->get();
        return $query->result_array();
    }

    public function order_result_by_user_id($user_id){
        $this->db->where('user_id', $user_id);
        return $this->db->count_all_results('checkout');
    }
}
