<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Akses extends MX_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_akses');
    }

    public function index($id_status)
    {
        $data = [
            'controller'    =>  "akses",
            'view'          =>  "v_akses",
            'title'         =>  "Akses menu",
            'status'        =>  $this->m_akses->get_where($id_status),
            'menu'          =>  $this->m_akses->get()
        ];

        echo Modules::run('template', $data);
    }

    public function merubahakses()
    {
        $this->m_akses->akses();
        $this->session->set_flashdata('pesan', '<div class="alert with-icon alert-success" role="alert"><i class="icon fa fa-check"></i><h4 class="text-center" style="margin-top:13px;"><button type="button" class="close" data-dismiss="alert" aria-label="fa fa-times"><span aria-hidden="true">&times;</span></button>
        Data berhasil di<strong> Tukar!</strong></h4></div>');
    }
}
