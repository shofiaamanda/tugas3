<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Template extends MX_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('m_template');
    }

    public function index($data)
    {
        $this->load->view('V_template', $data);
    }
    public function tambah_keranjang($id)
    {
        $properti = $this->m_template->mencari($id);

        $data = [
            'id'      => $properti->id_properti,
            'qty'     => 1,
            'price'   => $properti->harga_properti,
            'name'    => $properti->nama_properti
        ];

        $this->cart->insert($data);
        redirect('r_properti');
    }
}
