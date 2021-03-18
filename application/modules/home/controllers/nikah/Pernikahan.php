<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Pernikahan extends CI_Controller
{

  public function index()
  {
    $data = [
      'content'  => 'home/pernikahan/index'
    ];
    $this->load->view('home/layout/wrapper', $data, FALSE);
  }

  public function syarat()
  {
    $kategori  = $this->Crud_model->listing('tbl_kategori');
    $syarat  = $this->Crud_model->listing('tbl_syarat');
    $data = [
      'kategori' => $kategori,
      'syarat' => $syarat,
      'content'  => 'home/pernikahan/syarat'
    ];
    $this->load->view('home/layout/wrapper', $data, FALSE);
  }
}
