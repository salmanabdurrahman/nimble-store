<?php
class Contact_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function insert_contact($data)
    {
        return $this->db->insert('contacts', $data);
    }
}
