<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Detail_properti extends MX_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_properti');
    }

    public function index($id_properti)
    {
        $data = [
            'controller'    =>  "detail_properti",
            'view'          =>  "v_properti",
            'title'         =>  "Detail properti",
            'variabel'      =>  $this->m_properti->proses_detail($id_properti)
        ];
        echo Modules::run('template', $data);
    }
}
