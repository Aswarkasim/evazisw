<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Kontak extends CI_Controller
{

  public function index()
  {
    $data = [
      'content'  => 'home/kontak/index'
    ];
    $this->load->view('home/layout/wrapper', $data, FALSE);
  }
}
