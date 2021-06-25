<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Struktur extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    // is_logged_in_admin();
  }


  public function index()
  {
    $tombol  = [
      'add'     => 'admin/struktur/add',
      'edit'    => 'admin/struktur/edit/',
      'delete'  => 'admin/struktur/delete/'
    ];

    $struktur = $this->Crud_model->listing('tbl_struktur');
    $data = [

      'struktur' => $struktur,
      'tombol'   => $tombol,
      'content' => 'admin/struktur/index'
    ];
    $this->load->view('admin/layout/wrapper', $data, FALSE);
  }

  function add()
  {

    $this->load->helper('String');

    $valid = $this->form_validation;
    $valid->set_rules('nama_struktur', 'Nama Struktur', 'is_unique[tbl_struktur.nama_struktur]', array('is_unique' => '%s telah ada. Silahkan masukkan kode yang lain'));
    $valid->set_rules('urutan', 'Urutan', 'is_unique[tbl_struktur.urutan]', array('is_unique' => '%s telah ada. Silahkan masukkan angka yang lain'));


    if ($valid->run() === false) {
      $this->index();
    } else {
      $i = $this->input;
      $data = [
        'id_struktur'   => random_string(),
        'nama_struktur'   => $i->post('nama_struktur'),
        'urutan'   => $i->post('urutan')
      ];
      $this->Crud_model->add('tbl_struktur', $data);
      $this->session->set_flashdata('msg', 'struktur berhasil ditambah');
      redirect('admin/struktur');
    }
  }
  function edit($id_struktur)
  {
    $valid = $this->form_validation;
    // $valid->set_rules('id_struktur', 'Kode Kaategori', 'macthes[tbl_struktur.id_struktur]', array('matches' => '%s telah ada. Silahkan masukkan kode yang lain'));
    // $valid->set_rules('nama_struktur', 'Nama Kaategori', 'macthes[tbl_struktur.nama_struktur]', array('matches' => '%s telah ada. Silahkan masukkan kode yang lain'));


    if ($valid->run() === TRUE) {
      $this->index();
    } else {
      $i = $this->input;
      $data = [

        'nama_struktur'   => $i->post('nama_struktur'),
        'urutan'   => $i->post('urutan'),
        'id_struktur'   => $id_struktur
      ];
      $this->Crud_model->edit('tbl_struktur', 'id_struktur', $id_struktur, $data);
      $this->session->set_flashdata('msg', 'struktur berhasil diedit');
      redirect('admin/struktur');
    }
  }

  function delete($id_struktur)
  {
    $this->Crud_model->delete('tbl_struktur', 'id_struktur', $id_struktur);
    $this->session->set_flashdata('msg', 'data telah dihapus');
    redirect('admin/struktur');
  }
}
