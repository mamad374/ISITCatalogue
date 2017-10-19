<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class C_database extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('m_database');
    }

    public function menu() {
        $data = $this->m_database->getAplikasi();
        $this->load->view('admin_menu', array('data' => $data));
    }

    public function add_apps() {
        $data = $this->m_database->getAplikasi();
        $this->load->view('admin_tambahproduk', array('data' => $data));}

    public function form_add() {
        $id_aplikasi = $_POST['id_aplikasi'];
        $nama_aplikasi = $_POST['nama_aplikasi'];
        $genre_apps = $_POST['genre_apps'];
        $harga_apps = $_POST['harga_apps'];
        $spesifikasi_apps = $_POST['spesifikasi_apps'];

        $apps_kumpul = array(
           'id_aplikasi' => $id_aplikasi,
            'nama_aplikasi' => $nama_aplikasi,
            'genre_apps' => $genre_apps,
            'harga_apps' => $harga_apps,
            'spesifikasi_apps' => $spesifikasi_apps
        );
        $res = $this->m_database->tambahData('aplikasi', $apps_kumpul);
        if ($res >= 1) {
            redirect('c_database/menu');
        } else {
            echo "<h2>Data gagal untuk ditambahkan</h2>";
        }
    }

    public function edit_menu($id_aplikasi) {
        $menu = $this->m_database->getAplikasi("where id_aplikasi = '$id_aplikasi'");
        $data = array(
            "id_aplikasi" => $menu[0]['id_aplikasi'],
            "nama_aplikasi" => $menu[0]['nama_aplikasi'],
            "genre_apps" => $menu[0]['genre_apps'],
            "harga_apps" => $menu[0]['harga_apps'],
            "spesifikasi_apps" => $menu[0]['spesifikasi_apps']
        );
        $this->load->view('admin_edit', array('data' => $data));
    }

    public function form_edit() {
        $id_aplikasi = $_POST['id_aplikasi'];
        $nama_aplikasi = $_POST['nama_aplikasi'];
        $genre_apps = $_POST['genre_apps'];
        $harga_apps = $_POST['harga_apps'];
        $spesifikasi_apps = $_POST['spesifikasi_apps'];

        $data_kumpul = null;
        $data_kumpul = array(
            'id_aplikasi' => $id_aplikasi,
            'nama_aplikasi' => $nama_aplikasi,
            'genre_apps' => $genre_apps,
            'harga_apps' => $harga_apps,
            'spesifikasi_apps' => $spesifikasi_apps
        );

        $where = array('id_aplikasi' => $id_aplikasi);
        $res = $this->m_database->updateData('aplikasi', $data_kumpul, $where);
        if ($res >= 1) {
            redirect('c_database/menu');
        } else {
            echo "<h2>Data gagal untuk ditambahkan</h2>";
        }
    }

    public function delete_menu($id_aplikasi) {
        $where = array('id_aplikasi' => $id_aplikasi);
        $res = $this->m_database->deleteData('aplikasi', $where);
        if ($res >= 1) {
            redirect('c_database/menu');
        } else {
            echo "<h2>Data gagal untuk dihapus</h2>";
        }
    }

}
