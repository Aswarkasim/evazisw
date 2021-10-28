<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Penyaluran extends CI_Controller
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
      'add'     => 'admin/penyaluran/add/' . $zis,
      'edit'    => 'admin/penyaluran/edit_page/',
      'delete'  => 'admin/penyaluran/delete/'
    ];

    $desa = $this->Crud_model->listing('tbl_desa');
    $penyaluran = $this->AM->listPenyaluran($zis);
    $data = [

      'penyaluran' => $penyaluran,
      'tombol'   => $tombol,
      'desa'   => $desa,
      'content' => 'admin/penyaluran/index'
    ];
    $this->load->view('admin/layout/wrapper', $data, FALSE);
  }

  function add($zis)
  {

    $this->load->helper('string');


    $i = $this->input;
    $data = [
      'id_penyaluran'      => random_string(),
      'id_desa'    => $i->post('id_desa'),
      'mustahik'    => $i->post('mustahik'),
      'rupiah'    => $i->post('rupiah'),
      'dana'    => $zis,
      'jumlah_orang'    => $i->post('jumlah_orang'),
    ];
    $this->Crud_model->add('tbl_penyaluran', $data);
    $this->session->set_flashdata('msg', 'penyaluran berhasil ditambah');
    redirect('admin/penyaluran/index/' . $zis);
  }

  function edit_page($id_penyaluran)
  {
    $zis = $this->Crud_model->listingOne('tbl_penyaluran', 'id_penyaluran', $id_penyaluran);
    $muzakki = $this->Crud_model->listing('tbl_muzakki');
    $desa = $this->Crud_model->listing('tbl_desa');
    $data = [
      'zis'       => $zis,
      'desa'       => $desa,
      'muzakki'       => $muzakki,
      'content'  => 'admin/penyaluran/edit'
    ];
    $this->load->view('/layout/wrapper', $data, FALSE);
  }


  function edit($id_penyaluran)
  {

    $zis = $this->Crud_model->listingOne('tbl_penyaluran', 'id_penyaluran', $id_penyaluran);
    $i = $this->input;
    $data = [
      'id_penyaluran' => $id_penyaluran,
      'id_desa'    => $i->post('id_desa'),
      'mustahik'    => $i->post('mustahik'),
      'rupiah'    => $i->post('rupiah'),
      'jumlah_orang'    => $i->post('jumlah_orang')
    ];
    $this->Crud_model->edit('tbl_penyaluran', 'id_penyaluran', $id_penyaluran, $data);
    $this->session->set_flashdata('msg', 'penyaluran berhasil diedit');
    redirect('admin/penyaluran/index/' . $zis->dana);
  }

  function delete($id_penyaluran)
  {
    $this->Crud_model->delete('tbl_penyaluran', 'id_penyaluran', $id_penyaluran);
    $this->session->set_flashdata('msg', 'data telah dihapus');
    redirect('admin/penyaluran');
  }
}
