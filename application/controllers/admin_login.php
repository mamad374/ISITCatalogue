<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admin_login extends CI_Controller {

	public function index()
	{
		$this->load->view('v_login');
	}
	public function login()
	{
		$username = $this->input->post('username',true);
		$password = $this->input->post('password',true);
		$this->load->model('m_database');
                if ($this->m_database->m_login($username, $password)) {
                $session_data = array(
                    'username' => $username,
                );
                    $this->session->set_userdata($session_data);
                    redirect('admin_login/page_admin');
                } else {
                    $this->session->set_flashdata('error', 'Invalid Username and Password');
                    redirect(base_url() . 'login');
                }
 
	}
	public function page_admin()
	{
            if(!($this->session->has_userdata('username'))){
                redirect('admin_login');
            } else {
            $data = $this->m_database->getAplikasi();
            $this->load->view('admin_menu', array('data' => $data));
            }
	}


	public function logout(){
		$this->session->sess_destroy();
		redirect('admin_login');
	}

}
	
