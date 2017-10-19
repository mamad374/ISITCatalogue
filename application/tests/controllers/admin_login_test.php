<?php

/**
 * Part of ci-phpunit-test
 *
 * @author     Kenji Suzuki <https://github.com/kenjis>
 * @license    MIT License
 * @copyright  2015 Kenji Suzuki
 * @link       https://github.com/kenjis/ci-phpunit-test
 */
class admin_login_test extends TestCase {

    public function setUp() {
        $this->resetInstance();
        $this->CI->load->model('m_database');
        $this->objek = $this->CI->m_database;
    }

    public function test_index() {
        $output = $this->request('POST', 'admin_login/index');
        $this->assertContains('<title>ISITCatalogue_Login</title>', $output);
    }

    public function test_login() {
        $this->request('POST', 'admin_login/login', [
            'username' => '123',
            'password' => '123',
        ]);
    }

    public function test_page_admin() {
        $output = $this->request('GET', 'admin_login/page_admin');
        $this->assertContains('<title>IS IT Catalogue Admin | PRODUK</title>', $output);
    }

    public function test_logout() {
        $_SESSION['username'] = "123";
        $_SESSION['password'] = "123";
        $output = $this->request('GET', 'admin_login/logout');
        $this->assertRedirect('admin_login');
    }

}
