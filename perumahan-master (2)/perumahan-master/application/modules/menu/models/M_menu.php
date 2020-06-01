<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_menu extends CI_Model
{
    public function where()
    {
        return $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
    }

    public function get()
    {
        return $this->db->get('tb_user_menu')->result_array();
    }

    public function proses_tambah()
    {
        $menu = $this->input->post('menu');
        $data = [
            'menu'  =>  $menu
        ];
        $this->db->insert('tb_user_menu', $data);
    }
}
