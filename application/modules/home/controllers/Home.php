<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
    }


    public function index()
    {
        $banner = $this->Crud_model->listing('tbl_banner');
        $berita = $this->Crud_model->listing('tbl_berita', '8');
        $kategori = $this->Crud_model->listing('tbl_kategori');
        $data = [
            'banner'    => $banner,
            'berita'    => $berita,
            'kategori'    => $kategori,
            'content'   => 'home/home/index'
        ];
        $this->load->view('home/layout/wrapper', $data, FALSE);
    }

    function panduan()
    {

        $this->load->helper('download');
        force_download('assets/panduan/panduan_user.pdf', null);
    }
}
