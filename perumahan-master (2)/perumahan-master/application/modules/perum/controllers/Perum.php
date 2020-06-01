<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Perum extends MX_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_perum');
        // cek_login();
    }

    public function index()
    {
        $data = [
            'controller'    =>  "perum",
            'view'          =>  "v_perum",
            'title'         =>  "Perumahan saya",
            'menu'          =>  "Perum",
            'submenu'       =>  "Perumahan saya",
            'data'          =>  $this->m_perum->where(),
            'perum'         =>  $this->m_perum->get()
        ];
        echo Modules::run('template', $data);
    }
}
