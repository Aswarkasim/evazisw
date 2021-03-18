<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Visimisi extends CI_Controller
{

  public function index()
  {

    $this->load->model('home/Home_model', 'HM');

    $profil = $this->Crud_model->listingOne('tbl_profil', 'id_profil', '1');
    $kategori = $this->Crud_model->listing('tbl_kategori', '5');
    $berita  = $this->HM->listSideBerita();
    $data = [
      'profil'   => $profil,
      'kategori'   => $kategori,
      'berita'   => $berita,
      'content'  => 'home/visimisi/index'
    ];
    $this->load->view('home/layout/wrapper', $data, FALSE);
  }
}
