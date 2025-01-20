<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Products extends CI_Controller
{
    public function index()
    {
        $data['header_title'] = 'Nimble | Products';
        $this->load->view('templates/header', $data);
        $this->load->model('Products_model');

        // Ambil semua data untuk filter
        $query['sizes'] = $this->db->get('sizes')->result_array();
        $query['categories'] = $this->db->get('categories')->result_array();
        $query['colors'] = $this->db->get('colors')->result_array();

        // Ambil parameter jenis filter dan id filter dari URL
        $filter_type = $this->uri->segment(3); // bisa 'size', 'color', atau 'category'
        $filter_id = $this->uri->segment(4);   // id filter sesuai dengan jenisnya

        // Tentukan produk berdasarkan filter yang diterima
        if ($filter_type == 'color' && $filter_id != null) {
            $query['products'] = $this->Products_model->get_products_by_color($filter_id);
        } elseif ($filter_type == 'size' && $filter_id != null) {
            $query['products'] = $this->Products_model->get_products_by_size($filter_id);
        } elseif ($filter_type == 'category' && $filter_id != null) {
            $query['products'] = $this->Products_model->get_products_by_category($filter_id);
        } else {
            $query['products'] = $this->Products_model->get_products(); // Tidak ada filter, tampilkan semua produk
        }

        // Hitung jumlah semua produk
        $query['count_all_products'] = $this->Products_model->count_all_products();

        // Load view
        $this->load->view('pages/products/index', $query);

        $this->load->view('templates/subscribe');
        $this->load->view('templates/footer');
    }
}
