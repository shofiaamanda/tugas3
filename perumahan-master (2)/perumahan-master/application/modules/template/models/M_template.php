<?php
class M_template extends CI_Model
{
    public function mencari($id)
    {
        $result = $this->db->where('id_properti', $id)->limit(1)->get('tb_properti');

        if ($result->num_rows() > 0) {
            return $result->row();
        } else {
            return array();
        }
        redirect('template');
    }
    public function tampil()
    {
        return $this->db->get('tb_properti')->result();
    }
}
