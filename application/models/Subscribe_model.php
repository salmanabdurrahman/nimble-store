<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Subscribe_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function insert_subscribe($data)
    {
        return $this->db->insert('subscribers', $data);
    }
}
