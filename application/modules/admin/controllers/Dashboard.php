<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('id_admin') == "") {
            redirect('admin/auth');
        }
    }


    public function index()
    {
        $id_admin = $this->session->userdata('id_admin');
        $user = $this->Crud_model->listingOne('tbl_admin', 'id_admin', $id_admin);

        $desa = $this->Crud_model->listing('tbl_desa');
        $muzakki = $this->Crud_model->listing('tbl_muzakki');
        $karyawan = $this->Crud_model->listing('tbl_karyawan');
        $saran = $this->Crud_model->listing('tbl_saran');


        $data = [
            'title'     => 'Dashboard',
            'user'      => $user,
            'desa'      => $desa,
            'muzakki'      => $muzakki,
            'karyawan'      => $karyawan,
            'saran'      => $saran,
            'content'   => 'admin/dashboard/index'
        ];

        $this->load->view('admin/layout/wrapper', $data, FALSE);
    }

    function panduan()
    {

        $this->load->helper('download');
        force_download('assets/panduan/panduan_admin.pdf', null);
    }
}
