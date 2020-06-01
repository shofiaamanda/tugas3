<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_status extends CI_Model
{
    public function database()
    {
        return $this->db->get('tb_status')->result_array();
    }
}
