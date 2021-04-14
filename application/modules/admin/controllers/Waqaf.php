<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Waqaf extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    // is_logged_in_admin();
    $this->load->model('admin/Admin_model', 'AM');
  }


  public function index()
  {
    $tombol  = [
      'add'     => 'admin/waqaf/add',
      'edit'    => 'admin/waqaf/edit/',
      'delete'  => 'admin/waqaf/delete/'
    ];

    $desa = $this->Crud_model->listing('tbl_desa');
    $waqaf = $this->AM->listWaqaf('tbl_waqaf');
    $data = [

      'waqaf' => $waqaf,
      'tombol'   => $tombol,
      'desa'   => $desa,
      'content' => 'admin/waqaf/index'
    ];
    $this->load->view('admin/layout/wrapper', $data, FALSE);
  }

  function add()
  {

    $this->load->helper('string');


    $i = $this->input;
    $data = [
      'id_waqaf'       => random_string(),
      'id_desa'           => $i->post('id_desa'),
      'nomor'          => $i->post('nomor'),
      'tgl_waqaf'          => $i->post('tgl_waqaf'),
      'lokasi'          => $i->post('lokasi'),
      'luas'          => $i->post('luas'),
      'penggunaan'          => $i->post('penggunaan'),
      'wakif'          => $i->post('wakif'),
      'nadzir'          => $i->post('nadzir'),
    ];
    $this->Crud_model->add('tbl_waqaf', $data);
    $this->session->set_flashdata('msg', 'waqaf berhasil ditambah');
    redirect('admin/waqaf');
  }


  function edit($id_waqaf)
  {

    $i = $this->input;
    $data = [
      'id_waqaf' => $id_waqaf,
      'id_desa'           => $i->post('id_desa'),
      'nomor'          => $i->post('nomor'),
      'tgl_waqaf'          => $i->post('tgl_waqaf'),
      'lokasi'          => $i->post('lokasi'),
      'luas'          => $i->post('luas'),
      'penggunaan'          => $i->post('penggunaan'),
      'wakif'          => $i->post('wakif'),
      'nadzir'          => $i->post('nadzir'),
    ];
    $this->Crud_model->edit('tbl_waqaf', 'id_waqaf', $id_waqaf, $data);
    $this->session->set_flashdata('msg', 'waqaf berhasil diedit');
    redirect('admin/waqaf');
  }

  function delete($id_waqaf)
  {
    $this->Crud_model->delete('tbl_waqaf', 'id_waqaf', $id_waqaf);
    $this->session->set_flashdata('msg', 'data telah dihapus');
    redirect('admin/waqaf');
  }
}
