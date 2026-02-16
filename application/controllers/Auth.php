<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('M_auth');
        $this->load->library('form_validation');
    }

    public function index() {
        $this->load->view('login_view');
    }

    public function process_login() {
        $this->form_validation->set_rules('login', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('login_view');
        } else {
            $email = $this->input->post('login');
            $password = $this->input->post('password');

            $user = $this->M_auth->check_login($email, $password);

            if ($user) {
                // Set session data
                $session_data = array(
                    'user_id' => $user->id,
                    'email' => $user->Email,
                    'logged_in' => TRUE
                );
                $this->session->set_userdata($session_data);
                
                // Redirect ke halaman sukses
                redirect('login/success');
            } else {
                $this->session->set_flashdata('error', 'Email atau Password salah!');
                $this->load->view('login_view');
            }
        }
    }

    public function success() {
        // Cek apakah user sudah login
        if (!$this->session->userdata('logged_in')) {
            redirect('login');
        }
        $this->load->view('login_success');
    }

    public function logout() {
        $this->session->sess_destroy();
        redirect(base_url('index.php/login'));
    }
}
