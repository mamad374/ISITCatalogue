<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of admin_login_test
 *
 * @author arifc
 */
class admin_cek_test extends TestCase {

    public function setup() {
        $this->resetInstance();
        $this->CI->load->model('m_database');
        $this->obj = $this->CI->m_database;
    }

    public function test_admin_cek_not_login() {
        $this->request('GET', 'admin_cek/index');
        $this->assertRedirect('admin_login/index');
    }

    public function test_index() {
        $output = $this->request('GET', 'admin_cek/index');
        $data = $this->obj->getApliasi();
        $expecting = '';
        foreach ($data as $x) {
            $expecting = $x['produk_nama'];
        }
        $this->assertContains($expecting, $output);
    }

}
