<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_submenu extends CI_Model
{
    public function where()
    {
        return $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
    }

    public function getmenu()
    {
        return $this->db->get('tb_user_menu')->result_array();
    }

    public function get()
    {
        // return $this->db->get('tb_user_sub_menu')->result_array();
        $query = "SELECT tb_user_sub_menu.*, tb_user_menu. menu
        FROM tb_user_sub_menu JOIN tb_user_menu
        ON tb_user_sub_menu.menu_id = tb_user_menu.id_user_menu
        ";
        return $this->db->query($query)->result_array();
    }

    public function proses_tambah()
    {
        $submenu = $this->input->post('submenu');
        $menu = $this->input->post('menu');
        $url = $this->input->post('url');
        $aktif_menu = $this->input->post('aktif_menu');

        $data = [
            'menu_id'  =>  $menu,
            'sub_menu' =>  $submenu,
            'url'   =>  $url,
            'aktif_menu'    =>  $aktif_menu
        ];
        $this->db->insert('tb_user_sub_menu', $data);
    }
}
