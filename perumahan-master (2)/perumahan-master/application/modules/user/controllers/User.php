<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends MX_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_user');
        cek_login(); 
    }

    function index()
    {
        $data = [
            'controller'    => "user",
            'view'          => "v_user",
            'title'         =>  "Perumahan - Jual beli perumahan",
            'data'          =>  $this->m_user->where()
        ];
        echo Modules::run('template', $data);
    }

    public function update()
    {
        $this->m_user->proses_update();
        $this->session->set_flashdata('pesan', '<div class="alert with-icon alert-success" role="alert"><i class="icon fa fa-check"></i><h4 class="text-center" style="margin-top:13px;"><button type="button" class="close" data-dismiss="alert" aria-label="fa fa-times"><span aria-hidden="true">&times;</span></button>
        Data berhasil<strong> Diedit!</strong></h4></div>');
        redirect('user');
    }

    public function updatefoto()
    {
        $this->m_user->proses_updatefoto();
        $this->session->set_flashdata('pesan', '<div class="alert with-icon alert-success" role="alert"><i class="icon fa fa-check"></i><h4 class="text-center" style="margin-top:13px;"><button type="button" class="close" data-dismiss="alert" aria-label="fa fa-times"><span aria-hidden="true">&times;</span></button>
        Data berhasil<strong> Diedit!</strong></h4></div>');
        redirect('user');
    }
}
