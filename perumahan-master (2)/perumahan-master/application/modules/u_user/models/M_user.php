<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_user extends CI_Model
{
    public function proses_where($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    public function proses_edit()
    {
        $id_user    = htmlspecialchars($this->input->post('id_user', true));
        $nama_user         = htmlspecialchars($this->input->post('nama_user', true));
        $no_telepon    = htmlspecialchars($this->input->post('no_telepon', true));


        $this->load->library('upload');
        $nmfile = "file_" . time();
        $config['upload_path']        = 'assets/imgprofile/';
        $config['allowed_types']    = 'gif|jpg|png|jpeg';
        $config['max_size']            = 5120;
        $config['max_width']        = 4300;
        $config['max_height']        = 4300;
        $config['file_name']         = $nmfile;

        $this->upload->initialize($config);

        if ($_FILES['foto_user']['name']) {
            if ($this->upload->do_upload('foto_user')) {
                $gbr = $this->upload->data();
                $data = array(
                    'nama_user'        => $nama_user,
                    'no_telepon'        => $no_telepon,
                    'foto_user'         => $gbr['file_name'],
                );
                $where = [
                    'id_user'   =>  $id_user
                ];
                $this->db->where($where)->update('tb_user', $data);
            }
        } else {
            $data = array(
                'nama_user'        => $nama_user,
                'no_telepon'        => $no_telepon
            );
            $where = [
                'id_user'   =>  $id_user
            ];
            $this->db->where($where)->update('tb_user', $data);
        }
    }
}
