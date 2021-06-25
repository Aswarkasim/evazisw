<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Infaq extends CI_Controller
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
      'add'     => 'admin/infaq/add',
      'edit'    => 'admin/infaq/edit/',
      'delete'  => 'admin/infaq/delete/'
    ];

    $muzakki = $this->Crud_model->listing('tbl_muzakki');
    $penyetoran = $this->AM->listInfaq('tbl_penyetoran');
    $data = [

      'penyetoran' => $penyetoran,
      'tombol'   => $tombol,
      'muzakki'   => $muzakki,
      'content' => 'admin/infaq/index'
    ];
    $this->load->view('admin/layout/wrapper', $data, FALSE);
  }

  function add()
  {

    $this->load->helper('string');


    $i = $this->input;
    $data = [
      'id_penyetoran'       => random_string(),
      'id_muzakki'           => $i->post('id_muzakki'),
      // 'jenis_penyetoran'           => $i->post('jenis_penyetoran'),
      'jenis_penyetoran'           => 'Infaq',
      'jumlah'           => $i->post('jumlah'),
    ];
    $this->Crud_model->add('tbl_penyetoran', $data);
    $this->session->set_flashdata('msg', 'penyetoran berhasil ditambah');
    redirect('admin/infaq');
  }


  function edit($id_penyetoran)
  {

    $i = $this->input;
    $data = [
      'id_penyetoran' => $id_penyetoran,
      'id_muzakki'           => $i->post('id_muzakki'),
      'jenis_penyetoran'           => $i->post('jenis_penyetoran'),
      'jumlah'           => $i->post('jumlah'),
    ];
    $this->Crud_model->edit('tbl_penyetoran', 'id_penyetoran', $id_penyetoran, $data);
    $this->session->set_flashdata('msg', 'penyetoran berhasil diedit');
    redirect('admin/infaq');
  }

  function delete($id_penyetoran)
  {
    $this->Crud_model->delete('tbl_penyetoran', 'id_penyetoran', $id_penyetoran);
    $this->session->set_flashdata('msg', 'data telah dihapus');
    redirect('admin/infaq');
  }
}
