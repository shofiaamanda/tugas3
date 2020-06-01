<?php
class Found extends MX_Controller
{
    public function index()
    {
        $data = [
            'controller'    =>  "found",
            'view'          =>  "v_found",
            'title'         =>  "Found"
        ];
        echo Modules::run('template', $data);
    }
}
