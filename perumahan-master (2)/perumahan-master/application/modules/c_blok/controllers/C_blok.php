<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_blok extends MX_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_blok');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $this->form_validation->set_rules('nama_blok', 'Nama blok', 'required|trim', [
            'required'  =>  "Silahkan isi nama blok!"
        ]);
        $this->form_validation->set_rules('kota_blok', 'Kota blok', 'required|trim');
        $this->form_validation->set_rules('alamat_blok', 'Alamat blok', 'required|trim', [
            'required'  =>  "Silahkan isi nama blok!"
        ]);
        if ($this->form_validation->run() == false) {
            $data = [
                'controller'    =>  "c_blok",
                'view'          =>  "v_blok",
                'title'         =>  "Tambah data blok",
                'menu'          =>  "Blok",
                'submenu'       =>  "Tambah data blok"
            ];
            echo Modules::run('template', $data);
        } else {
            $this->m_blok->proses_tambah();
            $this->session->set_flashdata('pesan', '<div class="alert with-icon alert-success" role="alert"><i class="icon fa fa-check"></i><h4 class="text-center" style="margin-top:13px;"><button type="button" class="close" data-dismiss="alert" aria-label="fa fa-times"><span aria-hidden="true">&times;</span></button>
            Data berhasil di<strong>Tambahkan!.</strong></h4></div>');
            redirect('blok');
        }
    }
}
