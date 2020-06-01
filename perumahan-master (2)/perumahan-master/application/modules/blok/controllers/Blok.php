<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Blok extends MX_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_blok');
    }

    public function index()
    {
        $data = [
            'controller'    =>  "blok",
            'view'          =>  "v_blok",
            'title'         =>  "Blok",
            'menu'          =>  "Blok",
            'submenu'       =>  "Data blok"
        ];
        echo Modules::run('template', $data);
    }
}
