<?php
class M_user extends CI_Model
{
    public function proses_join()
    {
        $this->db->select('*');
        $this->db->from('tb_testimoni');
        $this->db->join('tb_user', 'tb_user.id_user=tb_testimoni.id_user_testimoni');
        $query = $this->db->get();
        return $query->result();
    }
}
