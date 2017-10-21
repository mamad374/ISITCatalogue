<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class admin_cek extends CI_Controller {

    function __construct() {
        parent::__construct();

        if ($this->session->userdata('status') != "login") {
            redirect('admin_login/index');
        }
    }

    public function index() {
        $data['aplikasi'] = $this->m_database->getAplikasi()->result();
        $this->load->view('admin_menu', $data);
    }

}
