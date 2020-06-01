<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_perum extends MX_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_perum');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $this->form_validation->set_rules('nama_perum', 'Nama Perumahan', 'required|trim', [
            'required'  =>  "Silahkan isi nama perumahan!"
        ]);
        $this->form_validation->set_rules('kota_perum', 'Kota Perumahan', 'required|trim', [
            'required'  =>  "Silahkan isi kota perumahan!"
        ]);
        $this->form_validation->set_rules('alamat_perum', 'Alamat Perumahan', 'required|trim', [
            'required'  =>  "Silahkan isi alamat perumahan!"
        ]);
        $this->form_validation->set_rules('fitur1', 'Fitur 1', 'trim');
        $this->form_validation->set_rules('fitur2', 'Fitur 1', 'trim');
        $this->form_validation->set_rules('fitur3', 'Fitur 1', 'trim');
        if ($this->form_validation->run() == false) {
            $data = [
                'controller'    =>  "c_perum",
                'view'          =>  "v_perum",
                'title'         =>  "Tambah data perumahan",
                'menu'          =>  "Perum",
                'submenu'       =>  "Tambah data perumahan",
                'data'          =>  $this->m_perum->where()
            ];
            echo Modules::run('template', $data);
        } else {
            $this->m_perum->proses_tambah();
            $this->session->set_flashdata('pesan', '<div class="alert with-icon alert-success" role="alert"><i class="icon fa fa-check"></i><h4 class="text-center" style="margin-top:13px;"><button type="button" class="close" data-dismiss="alert" aria-label="fa fa-times"><span aria-hidden="true">&times;</span></button>
            Data berhasil di<strong>Tambahkan!.</strong></h4></div>');
            redirect('perum');
        }
    }
}
