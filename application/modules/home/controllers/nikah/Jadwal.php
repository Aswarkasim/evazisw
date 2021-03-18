<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Jadwal extends CI_Controller
{

  public function index()
  {
    $jadwal = $this->Crud_model->listing('tbl_jadwal');
    $data = [
      'jadwal'   => $jadwal,
      'content'  => 'home/pernikahan/jadwal'
    ];
    $this->load->view('home/layout/wrapper', $data, FALSE);
  }
}
