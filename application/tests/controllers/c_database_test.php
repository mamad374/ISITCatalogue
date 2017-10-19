<?php

/**
 * Part of ci-phpunit-test
 *
 * @author     Kenji Suzuki <https://github.com/kenjis>
 * @license    MIT License
 * @copyright  2015 Kenji Suzuki
 * @link       https://github.com/kenjis/ci-phpunit-test
 */
class c_database_test extends TestCase {

    public function setUp() {
        $this->resetInstance();
        $this->CI->load->model('m_database');
        $this->objek = $this->CI->m_database;
        $this->form_validation = new CI_Form_validation();
    }

    public function test_menu() {
        $output = $this->request('GET', 'c_database/menu');
        $this->assertContains('<title>IS IT Catalogue Admin | PRODUK</title>', $output);
    }

    public function test_edit_menu($id_aplikasi) {
        $output = $this->request('GET', 'c_database/edit_menu');
        $this->assertContains('<title> IS IT CATALOGUE | Edit Produk </title>', $output);
    }

    public function test_add_apps() {
        $output = $this->request('POST', 'c_database/add_apps');
        $this->assertContains('<h1 class="page-header">Tambah Produk</h1>', $output);
    }

    public function test_form_add() {
        $awal = $this->objek->getCurrentRow();
        $output = $this->request(
            'POST', ['c_database', 'apps_kumpul'], [
            'id_aplikasi' => '2',
            'nama_aplikasi' => 'aplikasi bagus',
            'genre_apps' => 'ISNS',
            'harga_apps' => 2,
            'spesifikasi_apps' => 'ini deskripsi',

                ]
        );
        $akhir = $this->objek->getCurrentRow();
        $expected = $akhir - $awal;
    }

    public function test_form_edit() {
        $awal = $this->objek->getCurrentRow();
        $output = $this->request(
            'POST', ['c_database', 'apps_kumpul'], [
            'id_aplikasi' => '2',
            'nama_aplikasi' => 'aplikasi bagus',
            'genre_apps' => 'ISNS',
            'harga_apps' => 2,
            'spesifikasi_apps' => 'ini deskripsi',

                ]
        );
        $akhir = $this->objek->getCurrentRow();
        $expected = $akhir - $awal;
    }

    public function test_delete_menu() {
        $this->assertRedirect('c_database/menu');
    }

}
