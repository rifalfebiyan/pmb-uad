<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_auth extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    // Cek login user
    public function check_login($email, $password) {
        $this->db->where('Email', $email);
        $this->db->where('Password', md5($password));
        $query = $this->db->get('login');
        
        if ($query->num_rows() > 0) {
            return $query->row();
        } else {
            return false;
        }
    }
}
