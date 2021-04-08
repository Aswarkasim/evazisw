<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Mustahik extends CI_Controller
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
      'add'     => 'admin/mustahik/add',
      'edit'    => 'admin/mustahik/edit/',
      'delete'  => 'admin/mustahik/delete/'
    ];

    $desa = $this->Crud_model->listing('tbl_desa');
    $mustahik = $this->AM->listMustahik('tbl_mustahik');
    $data = [

      'mustahik' => $mustahik,
      'tombol'   => $tombol,
      'desa'   => $desa,
      'content' => 'admin/mustahik/index'
    ];
    $this->load->view('admin/layout/wrapper', $data, FALSE);
  }

  function add()
  {

    $this->load->helper('string');


    $i = $this->input;
    $data = [
      'id_mustahik'       => random_string(),
      'id_desa'           => $i->post('id_desa'),
      'rp_fakir'          => $i->post('rp_fakir'),
      'jlh_fakir'         => $i->post('jlh_fakir'),
      'rp_amil'           => $i->post('rp_amil'),
      'jlh_amil'          => $i->post('jlh_amil'),
      'rp_muallaf'        => $i->post('rp_muallaf'),
      'jlh_muallaf'       => $i->post('jlh_muallaf'),
      'rp_fisabilillah'   => $i->post('rp_fisabilillah'),
      'jlh_fisabilillah'  => $i->post('jlh_fisabilillah'),
      'rp_ibnusabil'      => $i->post('rp_ibnusabil'),
      'jlh_ibnusabil'     => $i->post('jlh_ibnusabil'),
    ];
    $this->Crud_model->add('tbl_mustahik', $data);
    $this->session->set_flashdata('msg', 'mustahik berhasil ditambah');
    redirect('admin/mustahik');
  }


  function edit($id_mustahik)
  {

    $i = $this->input;
    $data = [
      'id_mustahik' => $id_mustahik,
      'id_desa'    => $i->post('id_desa'),
      'mustahik'    => $i->post('mustahik'),
      'rupiah'    => $i->post('rupiah'),
      'jumlah_orang'    => $i->post('jumlah_orang')
    ];
    $this->Crud_model->edit('tbl_mustahik', 'id_mustahik', $id_mustahik, $data);
    $this->session->set_flashdata('msg', 'mustahik berhasil diedit');
    redirect('admin/mustahik');
  }

  function delete($id_mustahik)
  {
    $this->Crud_model->delete('tbl_mustahik', 'id_mustahik', $id_mustahik);
    $this->session->set_flashdata('msg', 'data telah dihapus');
    redirect('admin/mustahik');
  }
}
