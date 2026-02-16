<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Upload extends CI_Controller {

    public function __construct() {
        parent::__construct();
        // Cek login
        if (!$this->session->userdata('logged_in')) {
            redirect('login');
        }
    }

    public function index() {
        $data = [
            'nomor_formulir' => '2100018345',
            'nama' => 'John Doe',
            'jalur' => 'PMDK UTBK',
            'asal_sma' => 'SMA AL AZZAR',
            'gelombang' => 'GELOMBANG 2 Tahap 1',
            'pilihan_prodi' => 'KEDOKTERAN & Pilihan 2: INFORMATIKA',
            'error' => $this->session->flashdata('error'),
            'success' => $this->session->flashdata('success')
        ];
        
        $this->load->model('M_upload');
        $data['uploaded_file'] = $this->M_upload->get_latest_file_by_email($this->session->userdata('email'));

        $this->load->view('upload_view', $data);
    }

    public function do_upload() {
        $config['upload_path']          = FCPATH . 'document/dokumen/';
        $config['allowed_types']        = 'pdf|jpg|png';
        $config['max_size']             = 5120; // 5MB
        // $config['file_name']            = 'kk_' . time(); // Removed per user request to keep original name

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('berkas_kk')) {
            $error = $this->upload->display_errors();
            
            // Debugging: Log error to file
            file_put_contents(FCPATH . 'document/dokumen/debug_log.txt', "Upload Error: " . print_r($error, true) . "\n", FILE_APPEND);
            
            $this->session->set_flashdata('error', $error);
            redirect('upload');
        } else {
            $data = $this->upload->data();
            
            // Debugging: Log success
            file_put_contents(FCPATH . 'document/dokumen/debug_log.txt', "Upload Success: " . print_r($data, true) . "\n", FILE_APPEND);
            
            // Save to database
            $upload_data = [
                'email' => $this->session->userdata('email'),
                'file_name' => $data['file_name'],
                'uploaded_at' => date('Y-m-d H:i:s')
            ];
            
            $this->load->model('M_upload');
            $this->M_upload->insert_file($upload_data);

            $this->session->set_flashdata('success', 'Berkas berhasil diupload!');
            redirect('upload');
        }
    }
}
