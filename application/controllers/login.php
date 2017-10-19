<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class login extends CI_Controller {

    public function index() {
        $this->load->view('v_login', $data);
    }

    function login_validation() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        if ($this->form_validation->run()) {
            //true
            $username = $this->load->post('username');
            $password = $this->load->post('password');
            //model function
            $this->load->model('m_database');
            if ($this->m_database->m_login($username, $password)) {
                $session_data = array(
                    'username' => $username,
                );
                $this->session->set_userdata($session_data);
                redirect(base_url() . 'login/enter');
            } else {
                $this->session->set_flashdata('error', 'Invalid Username and Password');
                redirect(base_url() . 'login');
            }
        } else {
            //false
            $this->login();
        }
    }

    function logout() {
        $this->session->sess_destroy();
        redirect(base_url() . 'login/login');
    }

}
