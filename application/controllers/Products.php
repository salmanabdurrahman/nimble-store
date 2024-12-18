<?php
class Products extends CI_Controller
{
    public function index()
    {
        $data['header_title'] = 'Nimble | Products';
        $this->load->view('templates/header', $data);
        $this->load->model('Products_model');

        $query['sizes'] = $this->db->get('sizes')->result_array();
        $query['categories'] = $this->db->get('categories')->result_array();
        $query['colors'] = $this->db->get('colors')->result_array();

        $color_id = $this->input->get('id_color');
        $size_id = $this->input->get('id_size');
        $category_id = $this->input->get('id_category');

        if ($color_id != null) {
            $query['products'] = $this->Products_model->get_products_by_color($color_id);
        } elseif ($size_id != null) {
            $query['products'] = $this->Products_model->get_products_by_size($size_id);
        } elseif ($category_id != null) {
            $query['products'] = $this->Products_model->get_products_by_category($category_id);
        } else {
            $query['products'] = $this->Products_model->get_products();
        }

        $query['count_all_products'] = $this->Products_model->count_all_products();
        $this->load->view('pages/products/index', $query);

        $this->load->view('templates/subscribe');
        $this->load->view('templates/footer');
    }
}
