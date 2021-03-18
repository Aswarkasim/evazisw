<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Wanita extends CI_Controller
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


  function dataWanita()
  {
    is_logged_in_user();

    $this->load->helper('string');
    $id_user = $this->session->userdata('id_user');
    $data = $this->Crud_model->listingOne('tbl_daftar', 'id_user', $id_user);


    $data = [
      'dataWanita'    => $data,
      'content'  => 'home/daftar/wanita'
    ];
    $this->load->view('home/layout/wrapper', $data, FALSE);
  }


  function ktp()
  {
    $id_user = $this->session->userdata('id_user');
    $dataDaftar = $this->Crud_model->listingOne('tbl_daftar', 'id_user', $id_user);
    if (!empty($_FILES['ktp_wanita']['name'])) {
      $config['upload_path']   = './assets/uploads/dokumenNikah/';
      $config['allowed_types'] = 'gif|jpg|png|svg|jpeg';
      $config['max_size']      = '24000'; // KB 
      $this->upload->initialize($config);

      if (!$this->upload->do_upload('ktp_wanita')) {
        $this->upload->display_errors();
        redirect('home/nikah/daftar/dataWanita');
      } else {

        if ($dataDaftar->ktp_wanita != "") {
          unlink($dataDaftar->ktp_wanita);
        }
        $upload_data = ['uploads' => $this->upload->data()];
        $data = [
          'ktp_wanita'        => $config['upload_path'] . $upload_data['uploads']['file_name']
        ];
        $this->Crud_model->edit('tbl_daftar', 'id_user', $id_user, $data);
        $this->session->set_flashdata('msg', 'KTP diupload');
        redirect('home/nikah/daftar/dataWanita');
      }
    }
  }

  function kk()
  {
    $id_user = $this->session->userdata('id_user');
    $dataDaftar = $this->Crud_model->listingOne('tbl_daftar', 'id_user', $id_user);
    if (!empty($_FILES['kk_wanita']['name'])) {
      $config['upload_path']   = './assets/uploads/dokumenNikah/';
      $config['allowed_types'] = 'gif|jpg|png|svg|jpeg';
      $config['max_size']      = '100000'; // KB 
      $this->upload->initialize($config);

      if (!$this->upload->do_upload('kk_wanita')) {
        $this->upload->display_errors();
        redirect('home/nikah/daftar/dataWanita');
      } else {

        if ($dataDaftar->kk_wanita != "") {
          unlink($dataDaftar->kk_wanita);
        }
        $upload_data = ['uploads' => $this->upload->data()];
        $data = [
          'kk_wanita'        => $config['upload_path'] . $upload_data['uploads']['file_name']
        ];
        $this->Crud_model->edit('tbl_daftar', 'id_user', $id_user, $data);
        $this->session->set_flashdata('msg', 'Kartu Keluarga diupload');
        redirect('home/nikah/daftar/dataWanita');
      }
    }
  }

  function ijazah()
  {
    $id_user = $this->session->userdata('id_user');
    $dataDaftar = $this->Crud_model->listingOne('tbl_daftar', 'id_user', $id_user);
    if (!empty($_FILES['ijazah_terakhir_wanita']['name'])) {
      $config['upload_path']   = './assets/uploads/dokumenNikah/';
      $config['allowed_types'] = 'gif|jpg|png|svg|jpeg';
      $config['max_size']      = '100000'; // KB 
      $this->upload->initialize($config);

      if (!$this->upload->do_upload('ijazah_terakhir_wanita')) {
        $this->upload->display_errors();
        redirect('home/nikah/daftar/dataWanita');
      } else {

        if ($dataDaftar->ijazah_terakhir_wanita != "") {
          unlink($dataDaftar->ijazah_terakhir_wanita);
        }
        $upload_data = ['uploads' => $this->upload->data()];
        $data = [
          'ijazah_terakhir_wanita'        => $config['upload_path'] . $upload_data['uploads']['file_name']
        ];
        $this->Crud_model->edit('tbl_daftar', 'id_user', $id_user, $data);
        $this->session->set_flashdata('msg', 'Ijazah diupload');
        redirect('home/nikah/daftar/dataWanita');
      }
    }
  }

  function skBelumMenikah()
  {
    $id_user = $this->session->userdata('id_user');
    $dataDaftar = $this->Crud_model->listingOne('tbl_daftar', 'id_user', $id_user);
    if (!empty($_FILES['sk_belum_menikah_wanita']['name'])) {
      $config['upload_path']   = './assets/uploads/dokumenNikah/';
      $config['allowed_types'] = 'gif|jpg|png|svg|jpeg';
      $config['max_size']      = '100000'; // KB 
      $this->upload->initialize($config);

      if (!$this->upload->do_upload('sk_belum_menikah_wanita')) {
        $this->upload->display_errors();
        redirect('home/nikah/daftar/dataWanita');
      } else {

        if ($dataDaftar->sk_belum_menikah_wanita != "") {
          unlink($dataDaftar->sk_belum_menikah_wanita);
        }
        $upload_data = ['uploads' => $this->upload->data()];
        $data = [
          'sk_belum_menikah_wanita'        => $config['upload_path'] . $upload_data['uploads']['file_name']
        ];
        $this->Crud_model->edit('tbl_daftar', 'id_user', $id_user, $data);
        $this->session->set_flashdata('msg', 'Surat keterangan belum menikah diupload');
        redirect('home/nikah/daftar/dataWanita');
      }
    }
  }

  function skImunitas()
  {
    $id_user = $this->session->userdata('id_user');
    $dataDaftar = $this->Crud_model->listingOne('tbl_daftar', 'id_user', $id_user);
    if (!empty($_FILES['sk_imunitas_wanita']['name'])) {
      $config['upload_path']   = './assets/uploads/dokumenNikah/';
      $config['allowed_types'] = 'gif|jpg|png|svg|jpeg';
      $config['max_size']      = '100000'; // KB 
      $this->upload->initialize($config);

      if (!$this->upload->do_upload('sk_imunitas_wanita')) {
        $this->upload->display_errors();
        redirect('home/nikah/daftar/dataWanita');
      } else {

        if ($dataDaftar->sk_imunitas_wanita != "") {
          unlink($dataDaftar->sk_imunitas_wanita);
        }
        $upload_data = ['uploads' => $this->upload->data()];
        $data = [
          'sk_imunitas_wanita'        => $config['upload_path'] . $upload_data['uploads']['file_name']
        ];
        $this->Crud_model->edit('tbl_daftar', 'id_user', $id_user, $data);
        $this->session->set_flashdata('msg', 'Surat keterangan imunitas diupload');
        redirect('home/nikah/daftar/dataWanita');
      }
    }
  }

  function pasFoto()
  {
    $id_user = $this->session->userdata('id_user');
    $dataDaftar = $this->Crud_model->listingOne('tbl_daftar', 'id_user', $id_user);
    if (!empty($_FILES['foto_wanita']['name'])) {
      $config['upload_path']   = './assets/uploads/dokumenNikah/';
      $config['allowed_types'] = 'gif|jpg|png|svg|jpeg';
      $config['max_size']      = '100000'; // KB 
      $this->upload->initialize($config);

      if (!$this->upload->do_upload('foto_wanita')) {
        $this->upload->display_errors();
        redirect('home/nikah/daftar/dataWanita');
      } else {

        if ($dataDaftar->foto_wanita != "") {
          unlink($dataDaftar->foto_wanita);
        }
        $upload_data = ['uploads' => $this->upload->data()];
        $data = [
          'foto_wanita'        => $config['upload_path'] . $upload_data['uploads']['file_name']
        ];
        $this->Crud_model->edit('tbl_daftar', 'id_user', $id_user, $data);
        $this->session->set_flashdata('msg', 'Pas Foto diupload');
        redirect('home/nikah/daftar/dataWanita');
      }
    }
  }

  function aktaCerai()
  {
    $id_user = $this->session->userdata('id_user');
    $dataDaftar = $this->Crud_model->listingOne('tbl_daftar', 'id_user', $id_user);
    if (!empty($_FILES['akta_cerai_wanita']['name'])) {
      $config['upload_path']   = './assets/uploads/dokumenNikah/';
      $config['allowed_types'] = 'gif|jpg|png|svg|jpeg';
      $config['max_size']      = '100000'; // KB 
      $this->upload->initialize($config);

      if (!$this->upload->do_upload('akta_cerai_wanita')) {
        $this->upload->display_errors();
        redirect('home/nikah/daftar/dataWanita');
      } else {

        if ($dataDaftar->akta_cerai_wanita != "") {
          unlink($dataDaftar->akta_cerai_wanita);
        }
        $upload_data = ['uploads' => $this->upload->data()];
        $data = [
          'akta_cerai_wanita'        => $config['upload_path'] . $upload_data['uploads']['file_name']
        ];
        $this->Crud_model->edit('tbl_daftar', 'id_user', $id_user, $data);
        $this->session->set_flashdata('msg', 'Akta Cerai diupload');
        redirect('home/nikah/daftar/dataWanita');
      }
    }
  }

  function skKematian()
  {
    $id_user = $this->session->userdata('id_user');
    $dataDaftar = $this->Crud_model->listingOne('tbl_daftar', 'id_user', $id_user);
    if (!empty($_FILES['sk_kematian_cerai_wanita']['name'])) {
      $config['upload_path']   = './assets/uploads/dokumenNikah/';
      $config['allowed_types'] = 'gif|jpg|png|svg|jpeg';
      $config['max_size']      = '100000'; // KB 
      $this->upload->initialize($config);

      if (!$this->upload->do_upload('sk_kematian_cerai_wanita')) {
        $this->upload->display_errors();
        redirect('home/nikah/daftar/dataWanita');
      } else {

        if ($dataDaftar->sk_kematian_cerai_wanita != "") {
          unlink($dataDaftar->sk_kematian_cerai_wanita);
        }
        $upload_data = ['uploads' => $this->upload->data()];
        $data = [
          'sk_kematian_cerai_wanita'        => $config['upload_path'] . $upload_data['uploads']['file_name']
        ];
        $this->Crud_model->edit('tbl_daftar', 'id_user', $id_user, $data);
        $this->session->set_flashdata('msg', 'Sk Kematian Cerai diupload');
        redirect('home/nikah/daftar/dataWanita');
      }
    }
  }

  function piagamNasehat()
  {
    $id_user = $this->session->userdata('id_user');
    $dataDaftar = $this->Crud_model->listingOne('tbl_daftar', 'id_user', $id_user);
    if (!empty($_FILES['piagam_nasehat_pernikahan_wanita']['name'])) {
      $config['upload_path']   = './assets/uploads/dokumenNikah/';
      $config['allowed_types'] = 'gif|jpg|png|svg|jpeg';
      $config['max_size']      = '100000'; // KB 
      $this->upload->initialize($config);

      if (!$this->upload->do_upload('piagam_nasehat_pernikahan_wanita')) {
        $this->upload->display_errors();
        redirect('home/nikah/daftar/dataWanita');
      } else {

        if ($dataDaftar->piagam_nasehat_pernikahan_wanita != "") {
          unlink($dataDaftar->piagam_nasehat_pernikahan_wanita);
        }
        $upload_data = ['uploads' => $this->upload->data()];
        $data = [
          'piagam_nasehat_pernikahan_wanita'        => $config['upload_path'] . $upload_data['uploads']['file_name']
        ];
        $this->Crud_model->edit('tbl_daftar', 'id_user', $id_user, $data);
        $this->session->set_flashdata('msg', 'Paigam nasehat pernikahan diupload');
        redirect('home/nikah/daftar/dataWanita');
      }
    }
  }

  function ktpWali()
  {
    $id_user = $this->session->userdata('id_user');
    $dataDaftar = $this->Crud_model->listingOne('tbl_daftar', 'id_user', $id_user);
    if (!empty($_FILES['ktp_wali_wanita']['name'])) {
      $config['upload_path']   = './assets/uploads/dokumenNikah/';
      $config['allowed_types'] = 'gif|jpg|png|svg|jpeg';
      $config['max_size']      = '100000'; // KB 
      $this->upload->initialize($config);

      if (!$this->upload->do_upload('ktp_wali_wanita')) {
        $this->upload->display_errors();
        redirect('home/nikah/daftar/dataWanita');
      } else {

        if ($dataDaftar->ktp_wali_wanita != "") {
          unlink($dataDaftar->ktp_wali_wanita);
        }
        $upload_data = ['uploads' => $this->upload->data()];
        $data = [
          'ktp_wali_wanita'        => $config['upload_path'] . $upload_data['uploads']['file_name']
        ];
        $this->Crud_model->edit('tbl_daftar', 'id_user', $id_user, $data);
        $this->session->set_flashdata('msg', 'Sk wali diupload');
        redirect('home/nikah/daftar/dataWanita');
      }
    }
  }

  public function form()
  {
    $id_user = $this->session->userdata('id_user');
    $i = $this->input;
    $valid = $this->form_validation;
    $valid->set_rules('nama_wanita', 'Nama Pria', 'required');

    if ($valid->run() === false) {
      redirect('home/nikah/daftar/dataPria');
    } else {
      $data = [
        'nama_wanita'        => $i->post('nama_wanita'),
        'bin_wanita'        => $i->post('bin_wanita'),
        'tempat_lahir_wanita'        => $i->post('tempat_lahir_wanita'),
        'tanggal_lahir_wanita'        => $i->post('tanggal_lahir_wanita'),
        'agama_wanita'        => $i->post('agama_wanita'),
        'alamat_wanita'        => $i->post('alamat_wanita'),
        'status_wanita'        => $i->post('status_wanita'),
        'umur_wanita'        => $i->post('umur_wanita'),
        'warga_negara_wanita'        => $i->post('warga_negara_wanita'),
        'wali_wanita'        => $i->post('wali_wanita')
      ];
      $this->Crud_model->edit('tbl_daftar', 'id_user', $id_user, $data);
      $this->session->set_flashdata('msg', 'Form telah tersimpan');
      redirect('home/nikah/daftar/dataWanita');
    }
  }
}
