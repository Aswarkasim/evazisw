<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Pria extends CI_Controller
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


  function ktp()
  {
    $id_user = $this->session->userdata('id_user');
    $dataDaftar = $this->Crud_model->listingOne('tbl_daftar', 'id_user', $id_user);
    if (!empty($_FILES['ktp_pria']['name'])) {
      $config['upload_path']   = './assets/uploads/dokumenNikah/';
      $config['allowed_types'] = 'gif|jpg|png|svg|jpeg';
      $config['max_size']      = '24000'; // KB 
      $this->upload->initialize($config);

      if (!$this->upload->do_upload('ktp_pria')) {
        $this->upload->display_errors();
        redirect('home/nikah/daftar/dataPria');
      } else {

        if ($dataDaftar->ktp_pria != "") {
          unlink($dataDaftar->ktp_pria);
        }
        $upload_data = ['uploads' => $this->upload->data()];
        $data = [
          'ktp_pria'        => $config['upload_path'] . $upload_data['uploads']['file_name']
        ];
        $this->Crud_model->edit('tbl_daftar', 'id_user', $id_user, $data);
        $this->session->set_flashdata('msg', 'KTP diupload');
        redirect('home/nikah/daftar/dataPria');
      }
    }
  }

  function kk()
  {
    $id_user = $this->session->userdata('id_user');
    $dataDaftar = $this->Crud_model->listingOne('tbl_daftar', 'id_user', $id_user);
    if (!empty($_FILES['kk_pria']['name'])) {
      $config['upload_path']   = './assets/uploads/dokumenNikah/';
      $config['allowed_types'] = 'gif|jpg|png|svg|jpeg';
      $config['max_size']      = '100000'; // KB 
      $this->upload->initialize($config);

      if (!$this->upload->do_upload('kk_pria')) {
        $this->upload->display_errors();
        redirect('home/nikah/daftar/dataPria');
      } else {

        if ($dataDaftar->kk_pria != "") {
          unlink($dataDaftar->kk_pria);
        }
        $upload_data = ['uploads' => $this->upload->data()];
        $data = [
          'kk_pria'        => $config['upload_path'] . $upload_data['uploads']['file_name']
        ];
        $this->Crud_model->edit('tbl_daftar', 'id_user', $id_user, $data);
        $this->session->set_flashdata('msg', 'Kartu Keluarga diupload');
        redirect('home/nikah/daftar/dataPria');
      }
    }
  }

  function ijazah()
  {
    $id_user = $this->session->userdata('id_user');
    $dataDaftar = $this->Crud_model->listingOne('tbl_daftar', 'id_user', $id_user);
    if (!empty($_FILES['ijazah_terakhir_pria']['name'])) {
      $config['upload_path']   = './assets/uploads/dokumenNikah/';
      $config['allowed_types'] = 'gif|jpg|png|svg|jpeg';
      $config['max_size']      = '100000'; // KB 
      $this->upload->initialize($config);

      if (!$this->upload->do_upload('ijazah_terakhir_pria')) {
        $this->upload->display_errors();
        redirect('home/nikah/daftar/dataPria');
      } else {

        if ($dataDaftar->ijazah_terakhir_pria != "") {
          unlink($dataDaftar->ijazah_terakhir_pria);
        }
        $upload_data = ['uploads' => $this->upload->data()];
        $data = [
          'ijazah_terakhir_pria'        => $config['upload_path'] . $upload_data['uploads']['file_name']
        ];
        $this->Crud_model->edit('tbl_daftar', 'id_user', $id_user, $data);
        $this->session->set_flashdata('msg', 'Ijazah diupload');
        redirect('home/nikah/daftar/dataPria');
      }
    }
  }

  function skBelumMenikah()
  {
    $id_user = $this->session->userdata('id_user');
    $dataDaftar = $this->Crud_model->listingOne('tbl_daftar', 'id_user', $id_user);
    if (!empty($_FILES['sk_belum_menikah_pria']['name'])) {
      $config['upload_path']   = './assets/uploads/dokumenNikah/';
      $config['allowed_types'] = 'gif|jpg|png|svg|jpeg';
      $config['max_size']      = '100000'; // KB 
      $this->upload->initialize($config);

      if (!$this->upload->do_upload('sk_belum_menikah_pria')) {
        $this->upload->display_errors();
        redirect('home/nikah/daftar/dataPria');
      } else {

        if ($dataDaftar->sk_belum_menikah_pria != "") {
          unlink($dataDaftar->sk_belum_menikah_pria);
        }
        $upload_data = ['uploads' => $this->upload->data()];
        $data = [
          'sk_belum_menikah_pria'        => $config['upload_path'] . $upload_data['uploads']['file_name']
        ];
        $this->Crud_model->edit('tbl_daftar', 'id_user', $id_user, $data);
        $this->session->set_flashdata('msg', 'Surat keterangan belum menikah diupload');
        redirect('home/nikah/daftar/dataPria');
      }
    }
  }

  function skImunitas()
  {
    $id_user = $this->session->userdata('id_user');
    $dataDaftar = $this->Crud_model->listingOne('tbl_daftar', 'id_user', $id_user);
    if (!empty($_FILES['sk_imunitas_pria']['name'])) {
      $config['upload_path']   = './assets/uploads/dokumenNikah/';
      $config['allowed_types'] = 'gif|jpg|png|svg|jpeg';
      $config['max_size']      = '100000'; // KB 
      $this->upload->initialize($config);

      if (!$this->upload->do_upload('sk_imunitas_pria')) {
        $this->upload->display_errors();
        redirect('home/nikah/daftar/dataPria');
      } else {

        if ($dataDaftar->sk_imunitas_pria != "") {
          unlink($dataDaftar->sk_imunitas_pria);
        }
        $upload_data = ['uploads' => $this->upload->data()];
        $data = [
          'sk_imunitas_pria'        => $config['upload_path'] . $upload_data['uploads']['file_name']
        ];
        $this->Crud_model->edit('tbl_daftar', 'id_user', $id_user, $data);
        $this->session->set_flashdata('msg', 'Surat keterangan imunitas diupload');
        redirect('home/nikah/daftar/dataPria');
      }
    }
  }

  function pasFoto()
  {
    $id_user = $this->session->userdata('id_user');
    $dataDaftar = $this->Crud_model->listingOne('tbl_daftar', 'id_user', $id_user);
    if (!empty($_FILES['foto_pria']['name'])) {
      $config['upload_path']   = './assets/uploads/dokumenNikah/';
      $config['allowed_types'] = 'gif|jpg|png|svg|jpeg';
      $config['max_size']      = '100000'; // KB 
      $this->upload->initialize($config);

      if (!$this->upload->do_upload('foto_pria')) {
        $this->upload->display_errors();
        redirect('home/nikah/daftar/dataPria');
      } else {

        if ($dataDaftar->foto_pria != "") {
          unlink($dataDaftar->foto_pria);
        }
        $upload_data = ['uploads' => $this->upload->data()];
        $data = [
          'foto_pria'        => $config['upload_path'] . $upload_data['uploads']['file_name']
        ];
        $this->Crud_model->edit('tbl_daftar', 'id_user', $id_user, $data);
        $this->session->set_flashdata('msg', 'Pas Foto diupload');
        redirect('home/nikah/daftar/dataPria');
      }
    }
  }

  function aktaCerai()
  {
    $id_user = $this->session->userdata('id_user');
    $dataDaftar = $this->Crud_model->listingOne('tbl_daftar', 'id_user', $id_user);
    if (!empty($_FILES['akta_cerai_pria']['name'])) {
      $config['upload_path']   = './assets/uploads/dokumenNikah/';
      $config['allowed_types'] = 'gif|jpg|png|svg|jpeg';
      $config['max_size']      = '100000'; // KB 
      $this->upload->initialize($config);

      if (!$this->upload->do_upload('akta_cerai_pria')) {
        $this->upload->display_errors();
        redirect('home/nikah/daftar/dataPria');
      } else {

        if ($dataDaftar->akta_cerai_pria != "") {
          unlink($dataDaftar->akta_cerai_pria);
        }
        $upload_data = ['uploads' => $this->upload->data()];
        $data = [
          'akta_cerai_pria'        => $config['upload_path'] . $upload_data['uploads']['file_name']
        ];
        $this->Crud_model->edit('tbl_daftar', 'id_user', $id_user, $data);
        $this->session->set_flashdata('msg', 'Akta Cerai diupload');
        redirect('home/nikah/daftar/dataPria');
      }
    }
  }

  function skKematian()
  {
    $id_user = $this->session->userdata('id_user');
    $dataDaftar = $this->Crud_model->listingOne('tbl_daftar', 'id_user', $id_user);
    if (!empty($_FILES['sk_kematian_cerai_pria']['name'])) {
      $config['upload_path']   = './assets/uploads/dokumenNikah/';
      $config['allowed_types'] = 'gif|jpg|png|svg|jpeg';
      $config['max_size']      = '100000'; // KB 
      $this->upload->initialize($config);

      if (!$this->upload->do_upload('sk_kematian_cerai_pria')) {
        $this->upload->display_errors();
        redirect('home/nikah/daftar/dataPria');
      } else {

        if ($dataDaftar->sk_kematian_cerai_pria != "") {
          unlink($dataDaftar->sk_kematian_cerai_pria);
        }
        $upload_data = ['uploads' => $this->upload->data()];
        $data = [
          'sk_kematian_cerai_pria'        => $config['upload_path'] . $upload_data['uploads']['file_name']
        ];
        $this->Crud_model->edit('tbl_daftar', 'id_user', $id_user, $data);
        $this->session->set_flashdata('msg', 'Sk Kematian Cerai diupload');
        redirect('home/nikah/daftar/dataPria');
      }
    }
  }

  function piagamNasehat()
  {
    $id_user = $this->session->userdata('id_user');
    $dataDaftar = $this->Crud_model->listingOne('tbl_daftar', 'id_user', $id_user);
    if (!empty($_FILES['piagam_nasehat_pernikahan_pria']['name'])) {
      $config['upload_path']   = './assets/uploads/dokumenNikah/';
      $config['allowed_types'] = 'gif|jpg|png|svg|jpeg';
      $config['max_size']      = '100000'; // KB 
      $this->upload->initialize($config);

      if (!$this->upload->do_upload('piagam_nasehat_pernikahan_pria')) {
        $this->upload->display_errors();
        redirect('home/nikah/daftar/dataPria');
      } else {

        if ($dataDaftar->piagam_nasehat_pernikahan_pria != "") {
          unlink($dataDaftar->piagam_nasehat_pernikahan_pria);
        }
        $upload_data = ['uploads' => $this->upload->data()];
        $data = [
          'piagam_nasehat_pernikahan_pria'        => $config['upload_path'] . $upload_data['uploads']['file_name']
        ];
        $this->Crud_model->edit('tbl_daftar', 'id_user', $id_user, $data);
        $this->session->set_flashdata('msg', 'Piagam diupload');
        redirect('home/nikah/daftar/dataPria');
      }
    }
  }

  function ktpWali()
  {
    $id_user = $this->session->userdata('id_user');
    $dataDaftar = $this->Crud_model->listingOne('tbl_daftar', 'id_user', $id_user);
    if (!empty($_FILES['ktp_wali_pria']['name'])) {
      $config['upload_path']   = './assets/uploads/dokumenNikah/';
      $config['allowed_types'] = 'gif|jpg|png|svg|jpeg';
      $config['max_size']      = '100000'; // KB 
      $this->upload->initialize($config);

      if (!$this->upload->do_upload('ktp_wali_pria')) {
        $this->upload->display_errors();
        redirect('home/nikah/daftar/dataPria');
      } else {

        if ($dataDaftar->ktp_wali_pria != "") {
          unlink($dataDaftar->ktp_wali_pria);
        }
        $upload_data = ['uploads' => $this->upload->data()];
        $data = [
          'ktp_wali_pria'        => $config['upload_path'] . $upload_data['uploads']['file_name']
        ];
        $this->Crud_model->edit('tbl_daftar', 'id_user', $id_user, $data);
        $this->session->set_flashdata('msg', 'KTP Wali diupload');
        redirect('home/nikah/daftar/dataPria');
      }
    }
  }

  public function form()
  {
    $id_user = $this->session->userdata('id_user');
    $i = $this->input;
    $valid = $this->form_validation;
    $valid->set_rules('nama_pria', 'Nama Pria', 'required');

    if ($valid->run() === false) {
      redirect('home/nikah/daftar/dataPria');
    } else {
      $data = [
        'nama_pria'        => $i->post('nama_pria'),
        'bin_pria'        => $i->post('bin_pria'),
        'tempat_lahir_pria'        => $i->post('tempat_lahir_pria'),
        'tanggal_lahir_pria'        => $i->post('tanggal_lahir_pria'),
        'agama_pria'        => $i->post('agama_pria'),
        'alamat_pria'        => $i->post('alamat_pria'),
        'status_pria'        => $i->post('status_pria'),
        'warga_negara_pria'        => $i->post('warga_negara_pria'),
        'umur_pria'        => $i->post('umur_pria')
      ];
      $this->Crud_model->edit('tbl_daftar', 'id_user', $id_user, $data);
      $this->session->set_flashdata('msg', 'Form telah tersimpan');
      redirect('home/nikah/daftar/dataPria');
    }
  }
}
