<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of m_database_test
 *
 * @author arifc
 */
class m_database_test extends TestCase{
    //put your code here
    public function setUp(){
        $this->obj = $this->newModel('m_database');
    }
    
    public function test_read_data(){
        $expected = [
            1 => '123'
        ];
        $list = $this->obj->read_data();
        foreach ($list as $admin){
            $this->assertEquals($expected[$admin->id_admin], $admin->username);                    
        }
    }
    
    public function test_tambah_data(){
        $input = [
            'nama_aplikasi' => "aplikasi", 
            'genre_apps' => "ISNS",
            'harga_apps' => 7000,
            'spesifikasi_apps' => "gulali"
        ];
        $actual = $this->m_database>tambah_data($input['nama_aplikasi'], $input['genre_apps'], $input['harga_apps'], $input['spesifikasi_apps']);
        $res = 1;
        $this->assertEquals($res, $actual);
    }
    
    public function test_delete_data(){
        $input = [
            'nama_aplikasi' => "aplikasi", 
            'genre_apps' => "ISNS",
            'harga_apps' => 7000,
            'spesifikasi_apps' => "gulali"
        ];
        $actual = $this->m_database>delete_data($input['nama_aplikasi'], $input['genre_apps'], $input['harga_apps'], $input['spesifikasi_apps']);
        $res = 1;
        $this->assertEquals($res, $actual);
    }
    
    public function test_updateData(){
        $input = [
            'nama_aplikasi' => "aplikasi", 
            'genre_apps' => "ISNS",
            'harga_apps' => 7000,
            'spesifikasi_apps' => "gulali"
        ];
        $actual = $this->m_database>updateData($input['nama_aplikasi'], $input['genre_apps'], $input['harga_apps'], $input['spesifikasi_apps']);
        $res = 1;
        $this->assertEquals($res, $actual);
    }
    
    public function test_m_login(){
        $obj = new stdClass();
        $obj->id_admin           = '1';
        $obj->username        = '123';
        $obj->password   = '123';
        $expected[] = $obj;
        
        $actual = $this->m_database->m_login(1);
        $this->assertEquals($expected, $actual);
    }
}
