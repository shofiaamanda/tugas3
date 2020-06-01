<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_akses extends CI_Model
{
    public function get_where($id_status)
    {
        return $this->db->get_where('tb_status', ['id_status' => $id_status])->row_array();
    }

    public function get()
    {
        $this->db->where('id_user_menu !=', 1);
        return $this->db->get('tb_user_menu')->result_array();
    }

    public function akses()
    {
        $menu_id    =   $this->input->post('menuId');
        $status_id    =   $this->input->post('statusId');

        $data = [
            'status' =>  $status_id,
            'menu_id'   =>  $menu_id
        ];

        $result = $this->db->get_where('tb_user_akses_menu', $data);

        if ($result->num_rows() < 1) {
            $this->db->insert('tb_user_akses_menu', $data);
        } else {
            $this->db->delete('tb_user_akses_menu', $data);
        }
    }
}
