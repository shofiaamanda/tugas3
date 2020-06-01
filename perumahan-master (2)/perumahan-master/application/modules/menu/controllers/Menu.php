<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Menu extends MX_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_menu');
        $this->load->library('form_validation');
    }

    function index()
    {
        $this->form_validation->set_rules('menu', 'Menu', 'required|trim', [
            'required' => 'Silahkan isi nama menu!'
        ]);
        if ($this->form_validation->run() == false) {
            $data = [
                'controller'    => "menu",
                'view'          => "v_menu",
                'title'         =>  "Menu management",
                'data'          =>  $this->m_menu->where(),
                'menu'          =>  $this->m_menu->get()
            ];
            echo Modules::run('template', $data);
        } else {
            $this->m_menu->proses_tambah();
            $this->session->set_flashdata('pesan', '<div class="alert with-icon alert-success" role="alert"><i class="icon fa fa-check"></i><h4 class="text-center" style="margin-top:13px;"><button type="button" class="close" data-dismiss="alert" aria-label="fa fa-times"><span aria-hidden="true">&times;</span></button>
                    Data menu berhasil<strong> Ditambahkan!.</strong></h4></div>');
            redirect('menu');
        }
    }
}
