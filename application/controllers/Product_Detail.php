<?php
class Product_Detail extends CI_Controller
{
    public function index()
    {
        $data['header_title'] = 'Nimble | Product Detail';
        $this->load->model('Products_model');
        $data['sizes'] = $this->db->get('sizes')->result_array();
        $this->load->model('Comments_model');
    
        // Get product ID from request
        $id = $this->input->get('id');
        if ($id) {
            // Fetch product details by ID
            $data['product'] = $this->Products_model->get_product_by_id($id);
    
            // Check if product exists
            if (empty($data['product'])) {
                show_404(); // Product not found
            }
    
            // Fetch comments for the product
            $data['comments'] = $this->Comments_model->get_comments_by_product_id($id);
        } else {
            show_404(); // No ID provided
        }
        $data['random_product'] = $this->Products_model->get_random_products(4);
        $this->load->view('templates/header', $data);
        $this->load->view('pages/product_detail/index', $data); // Ensure data is passed to the view
        $this->load->view('templates/subscribe');
        $this->load->view('templates/footer');
    }
    
}

