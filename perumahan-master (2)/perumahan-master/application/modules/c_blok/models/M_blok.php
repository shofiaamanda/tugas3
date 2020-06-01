<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_blok extends CI_Model
{
    public function menu()
    {
        return $this->db->get('tb_user_sub_menu')->row_array();
    }
    public function proses_tambah()
    {
        $nama_blok  =   $this->input->post('nama_blok');
        // $kota_blok  =   $this->input->post('kota_blok');
        $alamat_blok  =   $this->input->post('alamat_blok');

        $data = [
            'nama_blok' =>  $nama_blok,
            // 'kota_blok' =>  $kota_blok,
            'alamat_blok'   =>  $alamat_blok
        ];

        $this->db->insert('tb_blok', $data);
    }
}
