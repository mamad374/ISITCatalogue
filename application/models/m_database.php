<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class M_database extends CI_Model {

    public function getAplikasi() {
        return $this->db->get('aplikasi');
    }

    function m_login($table, $where) {
        return $this->db->get_where($table, $where);
    }

}
