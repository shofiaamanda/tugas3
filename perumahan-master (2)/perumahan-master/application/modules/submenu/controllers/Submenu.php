<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Submenu extends MX_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_submenu');
        $this->load->library('form_validation');
    }

    function index()
    {
        $this->form_validation->set_rules('submenu', 'Submenu', 'required|trim', [
            'required' => 'Silahkan isi nama submenu!'
        ]);
        $this->form_validation->set_rules('menu', 'Menu', 'required|trim', [
            'required' => 'Silahkan isi nama menu!'
        ]);
        $this->form_validation->set_rules('url', 'Url', 'required|trim', [
            'required' => 'Silahkan isi nama url!'
        ]);
        if ($this->form_validation->run() == false) {
            $data = [
                'controller'    => "submenu",
                'view'          => "v_submenu",
                'title'         =>  "Sub menu management",
                'data'          =>  $this->m_submenu->where(),
                'submenu'       =>  $this->m_submenu->get(),
                'menu'          =>  $this->m_submenu->getmenu()
            ];
            echo Modules::run('template', $data);
        } else {
            $this->m_submenu->proses_tambah();
            $this->session->set_flashdata('pesan', '<div class="alert with-icon alert-success" role="alert"><i class="icon fa fa-check"></i><h4 class="text-center" style="margin-top:13px;"><button type="button" class="close" data-dismiss="alert" aria-label="fa fa-times"><span aria-hidden="true">&times;</span></button>
                    Data menu berhasil<strong> Ditambahkan!.</strong></h4></div>');
            redirect('submenu');
        }
    }
}
