<?php

function cek_login()
{
    $ci = get_instance();

    if (!$ci->session->userdata('email')) {
        redirect('login');
    } else {
        $status = $ci->session->userdata('status');
        $menu   = $ci->uri->segment(1);

        $queryMenu  =   $ci->db->get_where('tb_user_menu', ['menu' => $menu])->row_array();
        $menu_id    =   $queryMenu['id_user_menu'];

        $userAccess = $ci->db->get_where('tb_user_akses_menu', [
            'status'    =>  $status,
            'menu_id'   =>  $menu_id
        ]);

        if ($userAccess->num_rows() < 1) {
            redirect('found');
        }
    }
}

function check_akses($id_status, $id_user_menu)
{
    $ci = get_instance();

    $result =  $ci->db->get_where('tb_user_akses_menu', [
        'status'    =>  $id_status,
        'menu_id'   =>  $id_user_menu
    ]);

    if ($result->num_rows() > 0) {
        return "checked='checked'";
    }
}

function check_aktif()
{
    $ci = get_instance();
    $aktif = 1;
    $result = $ci->db->get_where('tb_user_sub_menu', [
        'aktif_menu'    =>  $aktif
    ]);

    if ($result->num_rows() > 0) {
        return "checked='checked'";
    }
}
