<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Daftar extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();

    $this->load->model('home/Home_model', 'HM');
  }


  public function index()
  {
    $data = [
      'content'  => 'home/daftar/index'
    ];
    $this->load->view('home/layout/wrapper', $data, FALSE);
  }


  function dataPria()
  {
    is_logged_in_user();

    $this->load->helper('string');
    $id_user = $this->session->userdata('id_user');
    $data = $this->Crud_model->listingOne('tbl_daftar', 'id_user', $id_user);
    if ($data == null) {
      $dataAdd = [
        'id_daftar' => random_string(),
        'id_user' => $id_user
      ];
      $this->Crud_model->add('tbl_daftar', $dataAdd);
      $this->session->set_flashdata('id_daftar', $dataAdd['id_daftar']);
    }

    $data = [
      'dataPria'    => $data,
      'content'  => 'home/daftar/pria'
    ];
    $this->load->view('home/layout/wrapper', $data, FALSE);
  }

  function dataWanita()
  {
    is_logged_in_user();

    $this->load->helper('string');
    $id_user = $this->session->userdata('id_user');
    $data = $this->Crud_model->listingOne('tbl_daftar', 'id_user', $id_user);
    if ($data == null) {
      $dataAdd = [
        'id_daftar' => random_string(),
        'id_user' => $id_user
      ];
      $this->Crud_model->add('tbl_daftar', $dataAdd);
      $this->session->set_flashdata('id_daftar', $dataAdd['id_daftar']);
    }

    $data = [
      'dataWanita'    => $data,
      'content'  => 'home/daftar/wanita'
    ];
    $this->load->view('home/layout/wrapper', $data, FALSE);
  }

  function dataLengkap()
  {
    $id_user = $this->session->userdata('id_user');
    $data = $this->Crud_model->listingOne('tbl_daftar', 'id_user', $id_user);
    $data = [
      'dataLengkap' => $data,
      'content'  => 'home/daftar/kelengkapan'
    ];
    $this->load->view('home/layout/wrapper', $data, FALSE);
    $this->session->set_flashdata('msg', 'Data anda telah terkirim. Silakan tunggu konfirmasi selanjutnya');
  }

  function selesai()
  {
    $data = [
      'content'  => 'home/daftar/selesai'
    ];
    $this->load->view('home/layout/wrapper', $data, FALSE);
  }

  function skDesa()
  {
    $id_user = $this->session->userdata('id_user');
    $dataDaftar = $this->Crud_model->listingOne('tbl_daftar', 'id_user', $id_user);
    if (!empty($_FILES['sk_desa']['name'])) {
      $config['upload_path']   = './assets/uploads/dokumenNikah/';
      $config['allowed_types'] = 'gif|jpg|png|svg|jpeg';
      $config['max_size']      = '100000'; // KB 
      $this->upload->initialize($config);

      if (!$this->upload->do_upload('sk_desa')) {
        $this->upload->display_errors();
        redirect('home/nikah/daftar/dataPria');
      } else {

        if ($dataDaftar->sk_desa != "") {
          unlink($dataDaftar->sk_desa);
        }
        $upload_data = ['uploads' => $this->upload->data()];
        $data = [
          'sk_desa'        => $config['upload_path'] . $upload_data['uploads']['file_name']
        ];
        $this->Crud_model->edit('tbl_daftar', 'id_user', $id_user, $data);
        $this->session->set_flashdata('msg', 'SK Desa diupload');
        redirect('home/nikah/daftar/dataLengkap');
      }
    }
  }

  function rekomendasiNikah()
  {
    $id_user = $this->session->userdata('id_user');
    $dataDaftar = $this->Crud_model->listingOne('tbl_daftar', 'id_user', $id_user);
    if (!empty($_FILES['rekomendasi_nikah']['name'])) {
      $config['upload_path']   = './assets/uploads/dokumenNikah/';
      $config['allowed_types'] = 'gif|jpg|png|svg|jpeg';
      $config['max_size']      = '100000'; // KB 
      $this->upload->initialize($config);

      if (!$this->upload->do_upload('rekomendasi_nikah')) {
        $this->upload->display_errors();
        redirect('home/nikah/daftar/dataPria');
      } else {

        if ($dataDaftar->rekomendasi_nikah != "") {
          unlink($dataDaftar->rekomendasi_nikah);
        }
        $upload_data = ['uploads' => $this->upload->data()];
        $data = [
          'rekomendasi_nikah'        => $config['upload_path'] . $upload_data['uploads']['file_name']
        ];
        $this->Crud_model->edit('tbl_daftar', 'id_user', $id_user, $data);
        $this->session->set_flashdata('msg', 'Rekomendasi nikah telah diupload');
        redirect('home/nikah/daftar/dataLengkap');
      }
    }
  }

  public function formKelengkapan()
  {
    $id_user = $this->session->userdata('id_user');
    $i = $this->input;
    $valid = $this->form_validation;
    $valid->set_rules('saksi', 'Saksi', 'required');

    if ($valid->run() === false) {
      redirect('home/nikah/daftar/dataLengkap');
    } else {
      $data = [
        'nama_pria'      => $i->post('nama_pria'),
        'saksi'        => $i->post('saksi'),
        'tgl_akad_nikah' => $i->post('tgl_akad_nikah'),
        'tempat_akad'    => $i->post('tempat_akad'),
        'mahar_pernikahan' => $i->post('mahar_pernikahan'),
      ];
      $this->Crud_model->edit('tbl_daftar', 'id_user', $id_user, $data);
      $this->session->set_flashdata('msg', 'Form telah tersimpan');
      redirect('home/nikah/daftar/dataLengkap');
    }
  }
}
