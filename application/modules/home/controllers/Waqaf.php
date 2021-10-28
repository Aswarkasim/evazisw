<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Waqaf extends CI_Controller
{


  public function __construct()
  {
    parent::__construct();

    $this->load->model('admin/admin_model', 'AM');
  }


  public function index()
  {
    $waqaf = $this->Crud_model->listing('tbl_waqaf');
    $data = [
      'waqaf'     => $waqaf,
      'content'   => 'home/waqaf/index'
    ];
    $this->load->view('home/layout/wrapper', $data, FALSE);
  }
}
