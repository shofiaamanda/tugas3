<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_admin extends CI_Model
{
    public function where()
    {
        return $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
    }

    public function proses_update()
    {
        $id_user        = htmlspecialchars($this->input->post('id_user', true));
        $nama_user      = htmlspecialchars($this->input->post('nama_user', true));
        $no_telepon     = htmlspecialchars($this->input->post('no_telepon', true));
        $no_whatsapp    = htmlspecialchars($this->input->post('no_whatsapp', true));


        $data = array(
            'nama_user'       => $nama_user,
            'no_telepon'      => $no_telepon,
            'no_whatsapp'     =>  $no_whatsapp
        );
        $this->db->where('id_user', $id_user)->update('tb_user', $data);
    }


    public function proses_updatefoto()
    {
        $id_user        = htmlspecialchars($this->input->post('id_user', true));

        $this->load->library('upload');

        $namafile = "file_" . time();
        $config['upload_path']        = 'assets/imgprofile/';
        $config['allowed_types']      = 'jpg|png|jpeg';
        $config['max_size']           = 5120;
        $config['max_width']          = 4300;
        $config['max_height']         = 4300;
        $config['file_name']           = $namafile;

        $this->upload->initialize($config);

        if ($_FILES['foto_user']['name']) {
            if ($this->upload->do_upload('foto_user')) {
                $gbr = $this->upload->data();
                $data = [
                    'foto_user'         => $gbr['file_name']
                ];
                $this->db->where('id_user', $id_user)->update('tb_user', $data);
            }
        }
    }
}
