<?php
class Profile_user extends MX_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_user');
    }

    public function index()
    {
        $data = [
            'controller'    =>  "profile_user",
            'view'          =>  "v_user",
            'variabel'      =>  $this->m_user->proses_join()
        ];
        echo Modules::run('template', $data);
    }
}
