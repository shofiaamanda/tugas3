<?php
class M_perumahan extends CI_Model
{
    public function database()
    {
        return $this->db->get('tb_slider')->result();
    }

    public function properti()
    {
        return $this->db->get('tb_properti')->result();
    }

    public function proses_cari()
    {
        $nama_properti   =   $this->input->post('nama_properti');
        $kota_properti   =   $this->input->post('kota_properti');
        $tipe_properti   =   $this->input->post('tipe_properti');
        $harga_properti   =   $this->input->post('harga_properti');
        $tempat_mandi   =   $this->input->post('tempat_mandi');
        $tempat_tidur   =   $this->input->post('tempat_tidur');
        $luas_properti   =   $this->input->post('luas_properti');

        // $this->db->select('*');
        // $this->db->from('tb_properti');
        // $this->db->like('nama_properti', $nama_properti);
        // $this->db->or_like('kota_properti', $kota_properti);
        // $this->db->or_like('tipe_properti', $tipe_properti);
        // $this->db->or_like('harga_properti', $harga_properti);
        // $this->db->or_like('tempat_mandi', $tempat_mandi);
        // $this->db->or_like('tempat_tidur', $tempat_tidur);
        // $this->db->or_like('luas_properti', $luas_properti);
        // return $this->db->get()->result();
        return $this->db->like('nama_properti', $nama_properti)->get('tb_properti')->result();
        return $this->db->like('kota_properti', $kota_properti)->get('tb_properti')->result();
        return $this->db->like('tipe_properti', $tipe_properti)->get('tb_properti')->result();
        return $this->db->like('harga_properti', $harga_properti)->get('tb_properti')->result();
        return $this->db->like('tempat_mandi', $tempat_mandi)->get('tb_properti')->result();
        return $this->db->like('tempat_tidur', $tempat_tidur)->get('tb_properti')->result();
        return $this->db->like('luas_properti', $luas_properti)->get('tb_properti')->result();
    }
}
