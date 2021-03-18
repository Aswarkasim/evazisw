<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Akun extends CI_Controller
{

  public function index()
  {
    $id_user = $this->session->userdata('id_user');
    $user = $this->Crud_model->listingOne('tbl_user', 'id_user', $id_user);
    $data = [
      'user'    => $user,
      'content'  => 'user/akun/index'
    ];
    $this->load->view('home/layout/wrapper', $data, FALSE);
  }

  public function edit()
  {
    $id_user = $this->session->userdata('id_user');
    $i = $this->input;
    $valid = $this->form_validation;
    $valid->set_rules('namalengkap', 'Nama Lengkap', 'required');

    if ($valid->run() === false) {
      redirect('user/akun');
    } else {
      $data = [
        'namalengkap'        => $i->post('namalengkap'),
        'tempat_lahir'        => $i->post('tempat_lahir'),
        'tanggal_lahir'        => $i->post('tanggal_lahir'),
        'jenis_kelamin'        => $i->post('jenis_kelamin'),
        'agama'        => $i->post('agama'),
        'no_hp'        => $i->post('no_hp'),
        'no_ktp'        => $i->post('no_ktp'),
        'alamat'        => $i->post('alamat')
      ];
      $this->Crud_model->edit('tbl_user', 'id_user', $id_user, $data);
      $this->session->set_flashdata('msg', 'Data telah tersimpan');
      redirect('user/akun', 'refresh');
    }
  }
  function ubahGambar()
  {
    $id_user = $this->session->userdata('id_user');
    $user = $this->Crud_model->listingOne('tbl_user', 'id_user', $id_user);
    if (!empty($_FILES['gambar']['name'])) {
      $config['upload_path']   = './assets/uploads/images/';
      $config['allowed_types'] = 'gif|jpg|png|svg|jpeg';
      $config['max_size']      = '24000'; // KB 
      $this->upload->initialize($config);

      if (!$this->upload->do_upload('gambar')) {
        $this->upload->display_errors();
        redirect('user/pribadi');
      } else {
        if ($user->gambar != "") {
          unlink($user->gambar);
        }
        $upload_data = ['uploads' => $this->upload->data()];
        $data = [
          'gambar'        => $config['upload_path'] . $upload_data['uploads']['file_name']
        ];
        $this->Crud_model->edit('tbl_user', 'id_user', $id_user, $data);
        $this->session->set_flashdata('msg', 'KTP diupload');
        redirect('user/dashboard');
      }
    }
  }
}
