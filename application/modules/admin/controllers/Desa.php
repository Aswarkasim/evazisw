<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Desa extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    // is_logged_in_admin();
  }


  public function index()
  {
    $tombol  = [
      'add'     => 'admin/desa/add',
      'edit'    => 'admin/desa/edit/',
      'delete'  => 'admin/desa/delete/'
    ];

    $desa = $this->Crud_model->listing('tbl_desa');
    $data = [

      'desa' => $desa,
      'tombol'   => $tombol,
      'content' => 'admin/desa/index'
    ];
    $this->load->view('admin/layout/wrapper', $data, FALSE);
  }

  function add()
  {

    $this->load->helper('string');


    $i = $this->input;
    $data = [
      'id_desa'      => random_string(),
      'nama_desa'    => $i->post('nama_desa')
    ];
    $this->Crud_model->add('tbl_desa', $data);
    $this->session->set_flashdata('msg', 'desa berhasil ditambah');
    redirect('admin/desa');
  }
  function edit($id_desa)
  {

    $i = $this->input;
    $data = [
      'id_desa' => $id_desa,
      'nama_desa'    => $i->post('nama_desa')
    ];
    $this->Crud_model->edit('tbl_desa', 'id_desa', $id_desa, $data);
    $this->session->set_flashdata('msg', 'desa berhasil diedit');
    redirect('admin/desa');
  }

  function delete($id_desa)
  {
    $this->Crud_model->delete('tbl_desa', 'id_desa', $id_desa);
    $this->session->set_flashdata('msg', 'data telah dihapus');
    redirect('admin/desa');
  }
}
