<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_registrasi extends CI_Model
{
    public function proses_daftar()
    {
        $email = $this->input->post('email', true);
        $data = [
            'nama_user' => htmlspecialchars($this->input->post('nama', true)),
            'email' => htmlspecialchars($email),
            'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
            'foto_user' => 'default.png',
            'tanggal_daftar' => time(),
            'aktif_akun' => 0,
            'status' => 2
        ];
        // siapkan token
        // $token = base64_encode(random_bytes(32));
        // $user_token = [
        //     'email' => $email,
        //     'token' => $token,
        //     'tanggal_daftar' => time()
        // ];

        $this->db->insert('tb_user', $data);
        // $this->db->insert('tb_user_token', $user_token);

        // $this->_sendEmail($token, 'verify');

        $this->session->set_flashdata('pesan', '<div class="alert with-icon alert-success" role="alert"><i class="icon fa fa-check"></i><h5 class="text-center" style="margin-top:13px;"><button type="button" class="close" data-dismiss="alert" aria-label="fa fa-times"><span aria-hidden="true">&times;</span></button>
        Selamat, akun anda telah terdaftar dan<strong> Silahkan aktivasi akun anda!</strong></h5></div>');
        redirect('login');

        // $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Selamat, akun anda telah terdaftar dan Silahkan aktivasi akun anda!</div>');
        redirect('login');
    }

    private function _sendEmail($token, $type)
    {
        $config = [
            'protocol'  => 'smtp',
            'smtp_host' => 'ssl://smtp.googlemail.com',
            'smtp_user' => 'otong759840@gmail.com',
            'smtp_pass' => 'otongstg759840',
            'smtp_port' =>  465,
            'mailtype'  => 'html',
            'charset'   => 'utf-8',
            'newline'   => "\r\n"
        ];

        $this->email->initialize($config);

        $this->email->from('perumahan@gmail.com', 'Verivikasi akun perumahan');
        $this->email->to($this->input->post('email'));

        if ($type == 'verify') {
            $this->email->subject('Account Verification');
            $this->email->message('Klik tautan ini untuk memverifikasi akun Anda : <a href="' . base_url() . 'registrasi/verify?email=' . $this->input->post('email') . '&token=' . urlencode($token) . '">Activate</a>');
        } else if ($type == 'forgot') {
            $this->email->subject('Reset Password');
            $this->email->message('Click this link to reset your password : <a href="' . base_url() . 'registrasi/resetpassword?email=' . $this->input->post('email') . '&token=' . urlencode($token) . '">Reset Password</a>');
        }

        if ($this->email->send()) {
            return true;
        } else {
            echo $this->email->print_debugger();
            die;
        }
    }
}
