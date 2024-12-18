<?php
class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    // DASHBOARD
    public function dashboard()
    {
        $data['header_title'] = 'Nimble | Dashboard';
        $this->load->view('templates/admin_header', $data);
        $this->load->view('templates/dashboard_layout');
        $this->load->view('admin/dashboard');
        $this->load->view('templates/admin_footer');
    }

    // USERS
    public function users()
    {
        $data['header_title'] = 'Nimble | Dashboard';
        $this->load->view('templates/admin_header', $data);
        $this->load->view('templates/dashboard_layout');
        $this->load->view('admin/users/users');
        $this->load->view('templates/admin_footer');
    }

    public function add_user()
    {
        $data['header_title'] = 'Nimble | Dashboard';
        $this->load->view('templates/admin_header', $data);
        $this->load->view('templates/dashboard_layout');
        $this->load->view('admin/users/add_user');
        $this->load->view('templates/admin_footer');
    }

    public function update_user()
    {
        $data['header_title'] = 'Nimble | Dashboard';
        $this->load->view('templates/admin_header', $data);
        $this->load->view('templates/dashboard_layout');
        $this->load->view('admin/users/update_user');
        $this->load->view('templates/admin_footer');
    }

    // PRODUCTS
    public function products()
    {
        $data['header_title'] = 'Nimble | Dashboard';
        $this->load->view('templates/admin_header', $data);
        $this->load->view('templates/dashboard_layout');
        $this->load->view('admin/products/products');
        $this->load->view('templates/admin_footer');
    }

    public function add_product()
    {
        $data['header_title'] = 'Nimble | Dashboard';
        $this->load->view('templates/admin_header', $data);
        $this->load->view('templates/dashboard_layout');
        $this->load->view('admin/products/add_product');
        $this->load->view('templates/admin_footer');
    }

    public function update_product()
    {
        $data['header_title'] = 'Nimble | Dashboard';
        $this->load->view('templates/admin_header', $data);
        $this->load->view('templates/dashboard_layout');
        $this->load->view('admin/products/update_product');
        $this->load->view('templates/admin_footer');
    }

    // COMMENTS
    public function comments()
    {
        $data['header_title'] = 'Nimble | Dashboard';
        $this->load->view('templates/admin_header', $data);
        $this->load->view('templates/dashboard_layout');
        $this->load->view('admin/comments/comments');
        $this->load->view('templates/admin_footer');
    }

    public function add_comment()
    {
        $data['header_title'] = 'Nimble | Dashboard';
        $this->load->view('templates/admin_header', $data);
        $this->load->view('templates/dashboard_layout');
        $this->load->view('admin/comments/add_comment');
        $this->load->view('templates/admin_footer');
    }

    public function update_comment()
    {
        $data['header_title'] = 'Nimble | Dashboard';
        $this->load->view('templates/admin_header', $data);
        $this->load->view('templates/dashboard_layout');
        $this->load->view('admin/comments/update_comment');
        $this->load->view('templates/admin_footer');
    }
}
