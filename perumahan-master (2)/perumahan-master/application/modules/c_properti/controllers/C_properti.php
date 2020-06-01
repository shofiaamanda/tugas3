<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_properti extends MX_Controller
{
    public function index()
    {
        $this->form_validation->set_rules('email', 'Email', 'trim|required', [
            'required'  =>  "Silahkan isi email"
        ]);

        if ($this->form_validation->run() == false) {
            $data['menu']   =   "Login";
            $this->load->view('v_login', $data);
        } else {
            $this->m_login->proses_login();
        }
    }
}
