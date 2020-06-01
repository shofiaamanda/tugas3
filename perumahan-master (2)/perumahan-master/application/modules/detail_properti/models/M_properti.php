<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_properti extends CI_Model
{
    public function proses_detail($id_properti)
    {
        $result = $this->db->where('id_properti', $id_properti)->get('tb_properti');
        if ($result->num_rows() > 0) {
            return $result->row_array();
        } else {
            return false;
        }
    }
}
