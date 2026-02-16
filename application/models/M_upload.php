<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_upload extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function insert_file($data) {
        return $this->db->insert('upload_files', $data);
    }
    
    public function get_files_by_email($email) {
        $this->db->where('email', $email);
        return $this->db->get('upload_files')->result();
    }

    public function get_latest_file_by_email($email) {
        $this->db->where('email', $email);
        $this->db->order_by('uploaded_at', 'DESC');
        $this->db->limit(1);
        return $this->db->get('upload_files')->row();
    }
}
