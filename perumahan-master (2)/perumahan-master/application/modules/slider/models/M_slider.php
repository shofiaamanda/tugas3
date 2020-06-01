<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_slider extends CI_Model
{

    function database()
    {
        return $this->db->get('tb_slider')->result();
    }

    function proses_tambah()
    {
        $mini_judul    = $this->input->post('mini_judul');
        $judul         = $this->input->post('judul');
        $sub_judul    = $this->input->post('sub_judul');


        $this->load->library('upload');
        $nmfile = "file_" . time();
        $config['upload_path']        = 'assets/imgslider/';
        $config['allowed_types']    = 'gif|jpg|png|jpeg';
        $config['max_size']            = 5120;
        $config['max_width']        = 4300;
        $config['max_height']        = 4300;
        $config['file_name']         = $nmfile;

        $this->upload->initialize($config);

        if ($_FILES['foto_slider']['name']) {
            if ($this->upload->do_upload('foto_slider')) {
                $gbr = $this->upload->data();
                $data = array(
                    'foto_slider'                 => $gbr['file_name'],
                    'mini_judul'        => $mini_judul,
                    'judul'        => $judul,
                    'sub_judul'        => $sub_judul,
                );
                $this->db->insert('tb_slider', $data);
            }
        } else {
            $data = array(
                'mini_judul'        => $mini_judul,
                'judul'        => $judul,
                'sub_judul'        => $sub_judul
            );
            $this->db->insert('tb_slider', $data);
        }
    }

    function proses_edit()
    {
        $id_slider    = htmlspecialchars($this->input->post('id_slider', true));
        $mini_judul    = htmlspecialchars($this->input->post('mini_judul', true));
        $judul         = htmlspecialchars($this->input->post('judul', true));
        $sub_judul    = htmlspecialchars($this->input->post('sub_judul', true));


        $this->load->library('upload');
        $nmfile = "file_" . time();
        $config['upload_path']        = 'assets/imgslider/';
        $config['allowed_types']    = 'gif|jpg|png|jpeg';
        $config['max_size']            = 5120;
        $config['max_width']        = 4300;
        $config['max_height']        = 4300;
        $config['file_name']         = $nmfile;

        $this->upload->initialize($config);

        if ($_FILES['foto_slider']['name']) {
            if ($this->upload->do_upload('foto_slider')) {
                $gbr = $this->upload->data();
                $data = array(
                    'foto_slider'                 => $gbr['file_name'],
                    'mini_judul'        => $mini_judul,
                    'judul'        => $judul,
                    'sub_judul'        => $sub_judul
                );
                $this->db->where('id_slider', $id_slider)->update('tb_slider', $data);
            }
        } else {
            $data = array(
                'mini_judul'        => $mini_judul,
                'judul'        => $judul,
                'sub_judul'        => $sub_judul
            );
            $this->db->where('id_slider', $id_slider)->update('tb_slider', $data);
        }
    }

    function proses_hapus($id)
    {
        $this->db->where('id_slider', $id)->delete('tb_slider');
    }

    function proses_cari()
    {
        $cari         = $this->input->post('cari');
        return $this->db->like('nama_sekolah', $cari)->get('sekolah')->result();
    }
}
