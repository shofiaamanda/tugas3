<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_perum extends CI_Model
{
    public function where()
    {
        return $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
    }

    public function get()
    {
        $this->db->select('*');
        $this->db->from('tb_perum');
        $this->db->join('tb_user', 'tb_user.id_user=tb_perum.id_user_perum');
        $this->db->where(['email' => $this->session->userdata('email')]);
        $query = $this->db->get();
        return $query->result();
    }
}
