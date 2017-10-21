<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class admin_login extends CI_Controller {

    public function index() {
        $this->load->view('v_login');
    }

    public function login() {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $where = array(
            'username' => $username,
            'password' => md5($password)
        );
        $cek = $this->m_database->m_login("admin", $where)->num_rows();
        if ($cek > 0) {
            $data_session = array(
                'username' => $username,
                'status' => "login"
            );
            $this->session->set_userdata($data_session);
            redirect('admin_cek/index');
        } else {
            $this->session->set_flashdata('error', 'Username dan password salah!');
            redirect('admin_login/index');}}

    public function logout() {
        $this->session->sess_destroy();
        redirect('admin_login/index');}

}
