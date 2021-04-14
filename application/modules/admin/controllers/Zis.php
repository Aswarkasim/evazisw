<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Zis extends CI_Controller
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
      'add'     => 'admin/zis/add',
      'edit'    => 'admin/zis/edit/',
      'delete'  => 'admin/zis/delete/'
    ];

    $muzakki = $this->Crud_model->listing('tbl_muzakki');
    $zis = $this->AM->listZis('tbl_zis');
    $data = [

      'zis' => $zis,
      'tombol'   => $tombol,
      'muzakki'   => $muzakki,
      'content' => 'admin/zis/index'
    ];
    $this->load->view('admin/layout/wrapper', $data, FALSE);
  }

  function add()
  {

    $this->load->helper('string');


    $i = $this->input;
    $data = [
      'id_zis'       => random_string(),
      'id_muzakki'           => $i->post('id_muzakki'),
      'jenis_zis'           => $i->post('jenis_zis'),
      'jumlah'           => $i->post('jumlah'),
    ];
    $this->Crud_model->add('tbl_zis', $data);
    $this->session->set_flashdata('msg', 'zis berhasil ditambah');
    redirect('admin/zis');
  }


  function edit($id_zis)
  {

    $i = $this->input;
    $data = [
      'id_zis' => $id_zis,
      'id_muzakki'           => $i->post('id_muzakki'),
      'jenis_zis'           => $i->post('jenis_zis'),
      'jumlah'           => $i->post('jumlah'),
    ];
    $this->Crud_model->edit('tbl_zis', 'id_zis', $id_zis, $data);
    $this->session->set_flashdata('msg', 'zis berhasil diedit');
    redirect('admin/zis');
  }

  function delete($id_zis)
  {
    $this->Crud_model->delete('tbl_zis', 'id_zis', $id_zis);
    $this->session->set_flashdata('msg', 'data telah dihapus');
    redirect('admin/zis');
  }
}
