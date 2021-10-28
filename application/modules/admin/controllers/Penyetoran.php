<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Penyetoran extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    // is_logged_in_admin();
    $this->load->model('admin/Admin_model', 'AM');
  }


  public function index($zis)
  {
    $tombol  = [
      'add'     => 'admin/penyetoran/add/' . $zis,
      'edit'    => 'admin/penyetoran/edit/',
      'delete'  => 'admin/penyetoran/delete/'
    ];

    $muzakki = $this->Crud_model->listing('tbl_muzakki');
    $penyetoran = $this->AM->listPenyetoran($zis);
    $data = [

      'penyetoran' => $penyetoran,
      'tombol'   => $tombol,
      'muzakki'   => $muzakki,
      'content' => 'admin/penyetoran/index'
    ];
    $this->load->view('admin/layout/wrapper', $data, FALSE);
  }

  function add($zis)
  {

    $this->load->helper('string');


    $i = $this->input;
    $data = [
      'id_penyetoran'       => random_string(),
      'id_muzakki'           => $i->post('id_muzakki'),
      // 'jenis_penyetoran'           => $i->post('jenis_penyetoran'),
      'jenis_penyetoran'           => $zis,
      'jumlah'           => $i->post('jumlah'),
    ];
    $this->Crud_model->add('tbl_penyetoran', $data);
    $this->session->set_flashdata('msg', 'penyetoran berhasil ditambah');
    redirect('admin/penyetoran/index/' . $zis);
  }

  function edit_page($id_penyetoran)
  {
    $zis = $this->Crud_model->listingOne('tbl_penyetoran', 'id_penyetoran', $id_penyetoran);
    $muzakki = $this->Crud_model->listing('tbl_muzakki');
    $data = [
      'zis'       => $zis,
      'muzakki'       => $muzakki,
      'content'  => 'admin/penyetoran/edit'
    ];
    $this->load->view('/layout/wrapper', $data, FALSE);
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
    redirect('admin/penyetoran/index/' . $data['jenis_penyetoran']);
  }

  function delete($id_penyetoran)
  {
    $this->Crud_model->delete('tbl_penyetoran', 'id_penyetoran', $id_penyetoran);
    $this->session->set_flashdata('msg', 'data telah dihapus');
    redirect('admin/penyetoran');
  }
}
