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
class admin_login_test extends TestCase {

    public function setUp() {
        if (isset($_SESSION)) {
            $_SESSION = array();
            $this->resetInstance();
            $this->CI->load->model('m_database');
            $this->obj = $this->CI->m_database;
        }
    }

    public function test_index() {
        $output = $this->request('GET', 'admin_login/index');
        $this->assertContains('<title>ISITCatalogue_Login</title>', $output);
    }

    public function test_login_success() {
        $this->request('POST', 'admin_login/login', [
            'username' => '123',
            'password' => '123',
                ]
        );
        $this->assertEquals('123', $_SESSION['username']);
    }

    public function test_login_gagal_password_salah() {
        $this->request('POST', 'admin_login/login', [
            'username' => '123',
            'password' => '1234',
        ]);
        $this->assertRedirect('admin_login/index');
        $this->assertFalse(isset($_SESSION['usernama']));
    }

    public function test_login_gagal_password_kosong() {
        $this->request('POST', 'admin_login/login', [
            'username' => '123',
            'password' => '',
        ]);
        $this->assertRedirect('admin_login/index');
        $this->assertFalse(isset($_SESSION['usernama']));
    }

    public function test_alogin_gagal_username_salah() {
        $this->request('POST', 'admin_login/login', [
            'username' => '1234',
            'password' => '123',
        ]);
        $this->assertRedirect('admin_login/index');
        $this->assertFalse(isset($_SESSION['usernama']));
    }

    public function test_alogin_gagal_username_kosong() {
        $this->request('POST', 'admin_login/login', [
            'username' => '',
            'password' => '123',
        ]);
        $this->assertRedirect('admin_login/index');
        $this->assertFalse(isset($_SESSION['usernama']));
    }

    public function test_admin_logout() {
        $_SESSION['nama'] = "123";
        $_SESSION['status'] = "login";
        $this->assertTrue(isset($_SESSION['nama']));
        $this->request('GET', 'admin_login/logout');
        //$output = $this->assertRedirect('admin_login/index');
        $this->assertFalse(isset($_SESSION['username']));
    }

}
