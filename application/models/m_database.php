<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class M_database extends CI_Model{
    public function getAplikasi($where=""){
      $data = $this->db->query('SELECT * FROM aplikasi '.$where);
      return $data -> result_array();
    }

    function read_data(){
        $query = $this->db->get('aplikasi');
    }

    public function tambahData($tabelName, $data){
    $res = $this->db->insert($tabelName, $data);
    return $res;
  }
	public function updateData($tabelName, $data, $where){
    $res = $this->db->update($tabelName, $data, $where);
    return $res;
	}
    public function deleteData($tabelName, $where){
    $res = $this->db->delete($tabelName, $where);
    return $res;
    }

    function m_login($username, $password){
    	$this->db->where('username', $username);
    	$this->db->where('password', $password);
    	return $this->db->get('admin')->row();
    }
}
