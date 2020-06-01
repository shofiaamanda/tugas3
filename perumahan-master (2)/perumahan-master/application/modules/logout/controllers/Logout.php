<?php
class Logout extends MX_Controller
{
    public function index()
    {
        $newdata = array(
            'email'  => '',
            'status' => '',
            'cek_login' => FALSE,
        );

        $this->session->unset_userdata($newdata);
        $this->session->sess_destroy();

        $this->session->unset_userdata('email');
        $this->session->unset_userdata('status');
        $this->session->set_flashdata('pesan', '<div class="alert with-icon alert-success" role="alert"><i class="icon fa fa-check"></i><h4 class="text-center" style="margin-top:13px;"><button type="button" class="close" data-dismiss="alert" aria-label="fa fa-times"><span aria-hidden="true">&times;</span></button>
        Anda telah<strong> Logout!</strong></h4></div>');
        redirect('login');
    }
}
