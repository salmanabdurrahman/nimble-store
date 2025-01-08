<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Size extends CI_Controller 
{
    public function add_size($id){
        $this->load->model('Size_model');

        $data = array(
            'id_products' => $id,
            'id_sizes' => $this->input->post('size')
        );

        $this->Size_model->add_size($data);

        if ($this->db->affected_rows()) {
            redirect('Admin/update_product/' . $id);
        } else {
            redirect('Admin/add_product');
        }
    }

    public function delete_size($product_size){
        $id_product = $this->input->get('id');
        $this->load->model('Size_model');
        $this->Size_model->delete_size($product_size);
        redirect($_SERVER['HTTP_REFERER']);
    }
}
