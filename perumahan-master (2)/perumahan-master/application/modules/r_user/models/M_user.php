<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_user extends CI_Model
{
    public function database()
    {
        return $this->db->get('tb_user')->result();
    }

    function proses_cari()
    {
        $cari = $this->input->post('cari');
        return $this->db->like('nama_user', $cari)->get('tb_user')->result();
    }
}
