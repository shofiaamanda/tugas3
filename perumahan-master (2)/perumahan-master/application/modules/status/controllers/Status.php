<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Status extends MX_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_status');
    }

    public function index()
    {
        $data = [
            'controller'    =>  "status",
            'view'          =>  "v_status",
            'title'         =>  "Status",
            'status'        =>  $this->m_status->database()
        ];
        echo Modules::run('template', $data);
    }
}
