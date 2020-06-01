<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_perum extends CI_Model
{
    public function where()
    {
        return $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
    }

    public function menu()
    {
        return $this->db->get('tb_user_sub_menu')->row_array();
    }

    public function proses_tambah()
    {
        $id_user  =   $this->input->post('id_user');
        $nama_perum  =   htmlspecialchars($this->input->post('nama_perum', TRUE));
        $alamat_perum  =   htmlspecialchars($this->input->post('alamat_perum', TRUE));
        $kota_perum  =   htmlspecialchars($this->input->post('kota_perum', TRUE));
        $fitur1  =   htmlspecialchars($this->input->post('fitur1', TRUE));
        $fitur2  =   htmlspecialchars($this->input->post('fitur2', TRUE));
        $fitur3  =   htmlspecialchars($this->input->post('fitur3', TRUE));

        $data = [
            'id_user_perum'    => $id_user,
            'nama_perum' =>  $nama_perum,
            'alamat_perum' =>  $alamat_perum,
            'kota_perum'   =>  $kota_perum,
            'fitur1'        =>  $fitur1,
            'fitur2'        =>  $fitur2,
            'fitur3'        =>  $fitur3
        ];

        $this->db->insert('tb_perum', $data);
    }
}
