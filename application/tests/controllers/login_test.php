<?php

/**
 * Part of ci-phpunit-test
 *
 * @author     Kenji Suzuki <https://github.com/kenjis>
 * @license    MIT License
 * @copyright  2015 Kenji Suzuki
 * @link       https://github.com/kenjis/ci-phpunit-test
 */
class login_test extends TestCase {

    public function setUp() {
        $this->resetInstance();
        $this->CI->load->model('m_database');
        $this->objek = $this->CI->m_database;
        $this->form_validation = new CI_Form_validation();
    }

    public function test_index() {
        $output = $this->request('GET', 'login/index');
        $this->assertContains('<title>ISITCatalogue_Login</title>', $output);
    }

    public function test_login_validation() {
        $this->request('POST', 'login/login_validation',['username' => '123', 'pass' => '123']);
        $this->assertRedirect(base_url() . 'login/enter');
    }

    public function test_logout(){
        $this->assertRedirect('login/login');
    }
}
