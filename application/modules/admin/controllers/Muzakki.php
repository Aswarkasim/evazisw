<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Muzakki extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    // is_logged_in_admin();
  }


  public function index()
  {
    $tombol  = [
      'add'     => 'admin/muzakki/add',
      'edit'    => 'admin/muzakki/edit/',
      'delete'  => 'admin/muzakki/delete/'
    ];

    $muzakki = $this->Crud_model->listing('tbl_muzakki');
    $data = [

      'muzakki' => $muzakki,
      'tombol'   => $tombol,
      'content' => 'admin/muzakki/index'
    ];
    $this->load->view('admin/layout/wrapper', $data, FALSE);
  }

  function add()
  {

    $this->load->helper('string');


    $i = $this->input;
    $data = [
      'id_muzakki'      => random_string(),
      'nama_muzakki'    => $i->post('nama_muzakki'),
      'jenis_kelamin'   => $i->post('jenis_kelamin'),
      'desa'            => $i->post('desa'),
      'dusun'           => $i->post('dusun'),
      'pekerjaan'       => $i->post('pekerjaan')
    ];
    $this->Crud_model->add('tbl_muzakki', $data);
    $this->session->set_flashdata('msg', 'muzakki berhasil ditambah');
    redirect('admin/muzakki');
  }
  function edit($id_muzakki)
  {

    $i = $this->input;
    $data = [
      'id_muzakki' => $id_muzakki,
      'nama_muzakki'    => $i->post('nama_muzakki'),
      'jenis_kelamin'   => $i->post('jenis_kelamin'),
      'desa'            => $i->post('desa'),
      'dusun'           => $i->post('dusun'),
      'pekerjaan'       => $i->post('pekerjaan')
    ];
    $this->Crud_model->edit('tbl_muzakki', 'id_muzakki', $id_muzakki, $data);
    $this->session->set_flashdata('msg', 'muzakki berhasil diedit');
    redirect('admin/muzakki');
  }

  function delete($id_muzakki)
  {
    $this->Crud_model->delete('tbl_muzakki', 'id_muzakki', $id_muzakki);
    $this->session->set_flashdata('msg', 'data telah dihapus');
    redirect('admin/muzakki');
  }
}
