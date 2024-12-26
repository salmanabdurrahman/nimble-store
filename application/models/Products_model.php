<?php
class Products_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function get_products()
    {
        // Menambahkan pengurutan descending berdasarkan 'created_at' atau kolom lain jika diperlukan
        $this->db->order_by('created_at', 'DESC');  // Urutkan berdasarkan 'created_at' secara menurun
        $query = $this->db->get('products');
        return $query->result_array();
    }
    
    public function get_product_by_id($id)
    {
        $this->db->select('products.*, colors.name AS color_name');
        $this->db->from('products');
        $this->db->join('colors', 'products.color_id = colors.id', 'left');
        $this->db->where('products.id', $id);
        $query = $this->db->get();
        return $query->row_array();
    }

    public function get_recent_products($limit = 4)
    {
        // Mengambil 4 produk terbaru berdasarkan tanggal pembuatan (created_at)
        $this->db->select('*');  // Pilih semua kolom
        $this->db->from('products');  // Dari tabel products
        $this->db->order_by('created_at', 'DESC');  // Urutkan berdasarkan created_at secara menurun (terbaru di atas)
        $this->db->limit($limit);  // Batasi hasilnya menjadi 4 produk terbaru

        $query = $this->db->get();  // Jalankan query
        return $query->result_array();  // Mengembalikan hasil dalam bentuk array
    }

    public function get_random_products($limit = 4)
    {
        // Mengambil produk secara acak
        $this->db->select('*');  // Pilih semua kolom
        $this->db->from('products');  // Dari tabel products
        $this->db->order_by('RAND()');  // Urutkan secara acak
        $this->db->limit($limit);  // Batasi hasilnya menjadi 4 produk

        $query = $this->db->get();  // Jalankan query
        return $query->result_array();  // Mengembalikan hasil dalam bentuk array
    }

    public function count_all_products()
    {
        // Menjalankan query untuk menghitung jumlah data di tabel 'products'
        $this->db->from('products');
        return $this->db->count_all_results();
    }

    public function get_products_by_color($color_id)
    {
        $this->db->select('products.*, colors.name AS color_name');
        $this->db->from('products');
        $this->db->join('colors', 'products.color_id = colors.id', 'left');
        $this->db->where('products.color_id', $color_id); // Filter berdasarkan ID warna
        $this->db->order_by('created_at', 'DESC'); // Urutkan berdasarkan created_at secara menurun
        $query = $this->db->get();
        return $query->result_array();
    }

    public function get_products_by_size($size_id)
    {
        $this->db->select('products.*, colors.name AS color_name');
        $this->db->from('products');
        $this->db->join('colors', 'products.color_id = colors.id', 'left');
        $this->db->where('products.size_id', $size_id); // Filter berdasarkan ID ukuran
        $this->db->order_by('created_at', 'DESC'); // Urutkan berdasarkan created_at secara menurun
        $query = $this->db->get();
        return $query->result_array();
    }

    public function get_products_by_category($category_id)
    {
        $this->db->select('products.*, colors.name AS color_name');
        $this->db->from('products');
        $this->db->join('colors', 'products.color_id = colors.id', 'left');
        $this->db->where('products.category_id', $category_id); // Filter berdasarkan ID kategori
        $this->db->order_by('created_at', 'DESC'); // Urutkan berdasarkan created_at secara menurun
        $query = $this->db->get();
        return $query->result_array();
    }
}
