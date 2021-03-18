<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Organisasi extends CI_Controller
{

  public function index()
  {

    $this->load->model('Home_model', 'HM');

    $struktur  = $this->HM->listStruktur();
    $kategori  = $this->Crud_model->listing('tbl_kategori');
    $data = [
      'struktur' => $struktur,
      'kategori' => $kategori,
      'content'  => 'home/organisasi/index'
    ];
    $this->load->view('home/layout/wrapper', $data, FALSE);
  }
}
