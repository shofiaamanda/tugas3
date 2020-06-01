<?php
class M_login extends CI_Model
{
    public function proses_login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $user = $this->db->get_where('tb_user', ['email' => $email])->row_array();

        // jika usernya ada
        if ($user) {
            // jika usernya aktif
            if ($user['aktif_akun'] == 1) {
                // cek password
                if (password_verify($password, $user['password'])) {
                    $data = [
                        'email' => $user['email'],
                        'status' => $user['status']
                    ];
                    $this->session->set_userdata($data);
                    if ($user['status'] == 1) {
                        redirect('admin');
                    } elseif ($user['status'] == 2) {
                        redirect('agent');
                    } else {
                        redirect('user');
                    }
                } else {
                    $this->session->set_flashdata('pesan', '<div class="alert with-icon alert-danger" role="alert"><i class="icon fa fa-info"></i><h4 class="text-center" style="margin-top:13px;"><button type="button" class="close" data-dismiss="alert" aria-label="fa fa-times"><span aria-hidden="true">&times;</span></button>
                    Kata sandi anda<strong> Salah!</strong></h4></div>');
                    redirect('login');
                }
            } else {
                $this->session->set_flashdata('pesan', '<div class="alert with-icon alert-danger" role="alert"><i class="icon fa fa-info"></i><h4 class="text-center" style="margin-top:13px;"><button type="button" class="close" data-dismiss="alert" aria-label="fa fa-times"><span aria-hidden="true">&times;</span></button>
                Email ini belum <strong> Diaktifkan!</strong></h4></div>');
                redirect('login');
            }
        } else {
            $this->session->set_flashdata('pesan', '<div class="alert with-icon alert-danger" role="alert"><i class="icon fa fa-info"></i><h2 class="text-center" style="margin-top:13px;"><button type="button" class="close" data-dismiss="alert" aria-label="fa fa-times"><span aria-hidden="true">&times;</span></button>
            Email tidak <strong> Terdaftar!</strong></h4></div>');
            redirect('login');
        }
    }
}
