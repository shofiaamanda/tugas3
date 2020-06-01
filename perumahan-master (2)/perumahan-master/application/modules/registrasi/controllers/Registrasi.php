<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Registrasi extends MX_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_registrasi');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[tb_user.email]', [
            'is_unique' => 'Email telah terdaftar!',
            'required'  =>  'Silahkan isi email',
            'valid_email'  =>  'Gunakan email!'
        ]);
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[6]|matches[password2]', [
            'matches'   =>  'Password tidak sama',
            'min_length' =>  'Password terlalu pendek',
            'required'  =>  'Silahkan isi password'
        ]);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');

        if ($this->form_validation->run() == false) {
            $data['menu']  =  "Registrasi";
            $this->load->view('v_registrasi', $data);
        } else {
            $this->m_registrasi->proses_daftar();
        }
    }

    public function verify()
    {
        $email = $this->input->get('email');
        $token = $this->input->get('token');

        $user = $this->db->get_where('tb_user', ['email' => $email])->row_array();

        if ($user) {
            $user_token = $this->db->get_where('tb_user_token', ['token' => $token])->row_array();

            if ($user_token) {
                if (time() - $user_token['tanggal_daftar'] < (60 * 60 * 24)) {
                    $this->db->set('aktif_akun', 1);
                    $this->db->where('email', $email);
                    $this->db->update('tb_user');

                    $this->db->delete('tb_user_token', ['email' => $email]);

                    $this->session->set_flashdata('pesan', '<div class="alert with-icon alert-success" role="alert"><i class="icon fa fa-check"></i><h4 class="text-center" style="margin-top:13px;"><button type="button" class="close" data-dismiss="alert" aria-label="fa fa-times"><span aria-hidden="true">&times;</span></button>
                    ' . $email . ' Telah diaktifkan!<strong> Silahkan login.</strong></h4></div>');
                    // $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">' . $email . ' Telah diaktifkan! Silahkan login
                    // .</div>');
                    redirect('login');
                } else {
                    $this->db->delete('tb_user', ['email' => $email]);
                    $this->db->delete('tb_user_token', ['email' => $email]);

                    $this->session->set_flashdata('pesan', '<div class="alert with-icon alert-success" role="alert"><i class="icon fa fa-check"></i><h4 class="text-center" style="margin-top:13px;"><button type="button" class="close" data-dismiss="alert" aria-label="fa fa-times"><span aria-hidden="true">&times;</span></button>
                    Aktivasi akun gagal!<strong> Token kedaluwarsa.</strong></h4></div>');

                    // $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Aktivasi akun gagal! Token kedaluwarsa.
                    // </div>');
                    redirect('registrasi');
                }
            } else {
                $this->session->set_flashdata('pesan', '<div class="alert with-icon alert-success" role="alert"><i class="icon fa fa-check"></i><h4 class="text-center" style="margin-top:13px;"><button type="button" class="close" data-dismiss="alert" aria-label="fa fa-times"><span aria-hidden="true">&times;</span></button>
                    Aktivasi akun gagal!<strong> Token salah.</strong></h4></div>');

                // $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Aktivasi akun gagal! Token salah.
                // </div>');
                redirect('registrasi');
            }
        } else {
            $this->session->set_flashdata('pesan', '<div class="alert with-icon alert-success" role="alert"><i class="icon fa fa-check"></i><h4 class="text-center" style="margin-top:13px;"><button type="button" class="close" data-dismiss="alert" aria-label="fa fa-times"><span aria-hidden="true">&times;</span></button>
                    Aktivasi akun gagal!<strong> Email yang salah..</strong></h4></div>');

            // $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Aktivasi akun gagal! Email yang salah.
            // </div>');
            redirect('registrasi');
        }
    }
}
