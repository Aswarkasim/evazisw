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


  public function index()
  {
    $tombol  = [
      'add'     => 'admin/penyaluran/add',
      'edit'    => 'admin/penyaluran/edit/',
      'delete'  => 'admin/penyaluran/delete/'
    ];

    $desa = $this->Crud_model->listing('tbl_desa');
    $penyaluran = $this->AM->listPenyaluran('tbl_penyaluran');
    $data = [

      'penyaluran' => $penyaluran,
      'tombol'   => $tombol,
      'desa'   => $desa,
      'content' => 'admin/penyaluran/index'
    ];
    $this->load->view('admin/layout/wrapper', $data, FALSE);
  }

  function add()
  {

    $this->load->helper('string');


    $i = $this->input;
    $data = [
      'id_penyaluran'      => random_string(),
      'id_desa'    => $i->post('id_desa'),
      'mustahik'    => $i->post('mustahik'),
      'rupiah'    => $i->post('rupiah'),
      'jumlah_orang'    => $i->post('jumlah_orang'),
    ];
    $this->Crud_model->add('tbl_penyaluran', $data);
    $this->session->set_flashdata('msg', 'penyaluran berhasil ditambah');
    redirect('admin/penyaluran');
  }
  function edit($id_penyaluran)
  {

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
    redirect('admin/penyaluran');
  }

  function delete($id_penyaluran)
  {
    $this->Crud_model->delete('tbl_penyaluran', 'id_penyaluran', $id_penyaluran);
    $this->session->set_flashdata('msg', 'data telah dihapus');
    redirect('admin/penyaluran');
  }
}
