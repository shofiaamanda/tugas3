<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Perumahan extends MX_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_perumahan');
    }

    public function index()
    {
        $data = [
            'controller'    =>  "Perumahan",
            'view'          =>  "v_perumahan",
            'title'         =>  "Perumahan",
            'variabel'      =>  $this->m_perumahan->database(),
            'properti'      =>  $this->m_perumahan->properti(),
            'properti'      =>  $this->m_perumahan->proses_cari()
        ];
        echo Modules::run('template', $data);
    }
}
