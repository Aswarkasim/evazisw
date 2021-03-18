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
        // $id_admin = $this->session->userdata('id_admin');
        // $user = $this->Crud_model->listingOne('tbl_admin', 'id_admin', $id_admin);

        // $dataUser = $this->Crud_model->listing('tbl_user');
        // $berita = $this->Crud_model->listing('tbl_berita');
        // $karyawan = $this->Crud_model->listing('tbl_karyawan');
        // $jadwal = $this->Crud_model->listing('tbl_jadwal');


        $data = [
            'title'     => 'Dashboard',
            // 'user'      => $user,
            // 'dataUser'      => $dataUser,
            // 'berita'      => $berita,
            // 'karyawan'      => $karyawan,
            // 'jadwal'      => $jadwal,
            'content'   => 'admin/dashboard/indexs'
        ];

        $this->load->view('admin/layout/wrapper', $data, FALSE);
    }

    function panduan()
    {

        $this->load->helper('download');
        force_download('assets/panduan/panduan_admin.pdf', null);
    }
}
