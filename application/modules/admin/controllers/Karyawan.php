<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Karyawan extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    // is_logged_in_admin();
  }


  public function index()
  {
    $tombol  = [
      'add'     => 'admin/karyawan/add',
      'edit'    => 'admin/karyawan/edit/',
      'delete'  => 'admin/karyawan/delete/'
    ];

    $karyawan = $this->Crud_model->listing('tbl_karyawan');
    $struktur = $this->Crud_model->listing('tbl_struktur');
    $data = [

      'karyawan' => $karyawan,
      'tombol'   => $tombol,
      'struktur'   => $struktur,
      'content' => 'admin/karyawan/index'
    ];
    $this->load->view('admin/layout/wrapper', $data, FALSE);
  }

  function add()
  {

    $this->load->helper('String');

    $valid = $this->form_validation;
    $valid->set_rules('id_karyawan', 'Kode Kaategori', 'is_unique[tbl_karyawan.id_karyawan]', array('is_unique' => '%s telah ada. Silahkan masukkan kode yang lain'));
    $valid->set_rules('nama_karyawan', 'Nama Kaategori', 'is_unique[tbl_karyawan.nama_karyawan]', array('is_unique' => '%s telah ada. Silahkan masukkan kode yang lain'));


    if ($valid->run() === false) {
      $this->index();
    } else {
      $i = $this->input;
      $data = [
        'id_karyawan'     => random_string(),
        'nama_karyawan'   => $i->post('nama_karyawan'),
        'tempat_lahir'    => $i->post('tempat_lahir'),
        'tanggal_lahir'   => $i->post('tanggal_lahir'),
        'pangkat'         => $i->post('pangkat'),
        'golongan'        => $i->post('golongan'),
        'pendidikan_terakhir'   => $i->post('pendidikan_terakhir'),
        'id_struktur'         => $i->post('id_struktur'),
        'alamat'          => $i->post('alamat')
      ];
      $this->Crud_model->add('tbl_karyawan', $data);
      $this->session->set_flashdata('msg', 'karyawan berhasil ditambah');
      redirect('admin/karyawan');
    }
  }
  function edit($id_karyawan)
  {
    $valid = $this->form_validation;
    // $valid->set_rules('id_karyawan', 'Kode Kaategori', 'macthes[tbl_karyawan.id_karyawan]', array('matches' => '%s telah ada. Silahkan masukkan kode yang lain'));
    // $valid->set_rules('nama_karyawan', 'Nama Kaategori', 'macthes[tbl_karyawan.nama_karyawan]', array('matches' => '%s telah ada. Silahkan masukkan kode yang lain'));


    if ($valid->run() === TRUE) {
      $this->index();
    } else {
      $i = $this->input;
      $data = [
        'id_karyawan'   => $id_karyawan,
        'nama_karyawan'   => $i->post('nama_karyawan'),
        'tempat_lahir'    => $i->post('tempat_lahir'),
        'tanggal_lahir'   => $i->post('tanggal_lahir'),
        'pangkat'         => $i->post('pangkat'),
        'golongan'        => $i->post('golongan'),
        'pendidikan_terakhir'   => $i->post('pendidikan_terakhir'),
        'id_struktur'         => $i->post('id_struktur'),
        'alamat'          => $i->post('alamat')
      ];
      $this->Crud_model->edit('tbl_karyawan', 'id_karyawan', $id_karyawan, $data);
      $this->session->set_flashdata('msg', 'karyawan berhasil diedit');
      redirect('admin/karyawan');
    }
  }

  function delete($id_karyawan)
  {
    $this->Crud_model->delete('tbl_karyawan', 'id_karyawan', $id_karyawan);
    $this->session->set_flashdata('msg', 'data telah dihapus');
    redirect('admin/karyawan');
  }
}
