<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Slider extends MX_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_slider');
    }

    public function index()
    {
        $data = array(
            'controller'     => "slider",
            'view'     => "v_slider",
            'title'     =>  "Slider",
            'variabel'        => $this->m_slider->database(),
        );
        echo Modules::run('template', $data);
    }

    public function tambah()
    {
        $this->m_slider->proses_tambah();
    }

    public function edit()
    {
        $this->m_slider->proses_edit();
    }

    public function hapus($id)
    {
        $this->m_slider->proses_hapus($id);
    }

    public function cari()
    {
        $data = array(
            'namamodule'     => "data_sekolah",
            'namafileview'     => "V_data_sekolah",
            'title'     =>  "Slider",
            'tampil'        => $this->m_slider->cari(),
        );
        echo Modules::run('template/tampilCore', $data);
    }
}
