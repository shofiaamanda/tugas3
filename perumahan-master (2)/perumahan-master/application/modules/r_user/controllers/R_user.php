<?php
defined('BASEPATH') or exit('No direct script access allowed');

class R_user extends MX_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_user');
    }

    public function index()
    {
        $data   =   [
            'controller'    =>  "r_user",
            'view'          =>  "v_user",
            'title'         =>  "Data user",
            'variabel'      =>  $this->m_user->database()
        ];
        echo Modules::run('template', $data);
    }

    function cari()
    {
        $data = array(
            'controller'    =>  "r_user",
            'view'          =>  "v_user",
            'title'         =>  "Data user",
            'variabel'      =>  $this->m_user->proses_cari()
        );
        echo Modules::run('template', $data);
    }
}
