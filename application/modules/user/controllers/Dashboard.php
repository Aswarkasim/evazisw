<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

  public function index()
  {
    $id_user   = $this->session->userdata('id_user');
    $data = $this->Crud_model->listingOne('tbl_daftar', 'id_user', $id_user);
    $jadwal = '';
    if (isset($data)) {
      $jadwal = $this->Crud_model->listingOne('tbl_jadwal', 'id_daftar', $data->id_daftar);
    }
    $data = [
      'data'    => $data,
      'jadwal'    => $jadwal,
      'content'  => 'user/dashboard/index'
    ];
    $this->load->view('home/layout/wrapper', $data, FALSE);
  }
}
