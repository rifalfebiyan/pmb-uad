<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Prodi extends CI_Controller {

    public function __construct() {
        parent::__construct();
        // Cek login
        if (!$this->session->userdata('logged_in')) {
            redirect('login');
        }
    }

    public function index() {
        $data = [
            'nama' => $this->session->userdata('nama') ?? 'Muhammad Rifa\'i Nestli', // Fallback name if not in session
            // Add other necessary data here
        ];
        $this->load->view('prodi_view', $data);
    }
}
