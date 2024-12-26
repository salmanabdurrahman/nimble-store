<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function validate($username, $password) {
        // Query untuk mencari user berdasarkan username
        $this->db->where('username', $username);
        $query = $this->db->get('users'); // Ganti 'users' dengan nama tabel yang sesuai

        if ($query->num_rows() == 1) {
            $user = $query->row();

            // Verifikasi password tanpa hashing
            if ($password === $user->password) {
                return $user; // Kembalikan data user jika valid
            }
        }
        return false; // Kembalikan false jika tidak valid
    }
}