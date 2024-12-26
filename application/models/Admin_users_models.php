<?php
class Admin_users_models extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function get_users()
    {
        $query = $this->db->get('users');
        return $query->result_array();
    }

    public function count_users()
    {
        return $this->db->count_all('users');
    }

    public function get_users_by_id($id){
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
}