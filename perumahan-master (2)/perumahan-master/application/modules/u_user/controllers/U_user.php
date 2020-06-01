<?php
defined('BASEPATH') or exit('No direct script access allowed');

class U_user extends MX_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_user');
    }

    public function index($id)
    {
        $where = ['id_user' => $id];
        $data = [
            'controller'    =>  "u_user",
            'view'          =>  "v_user",
            'title'         =>  "Edit data user",
            'variabel'      => $this->m_user->proses_where($where, 'tb_user')->result()
        ];
        echo Modules::run('template', $data);
    }

    public function edit()
    {
        $this->m_user->proses_edit();
    }
}
