<?php


defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    // is_logged_in_admin();
  }


  public function index()
  {

    $user = $this->Crud_model->listing('tbl_user');
    $data = [

      'user' => $user,
      'add'     => 'admin/user/add',
      'edit'    => 'admin/user/edit/',
      'delete'  => 'admin/user/delete/',
      'content' => 'admin/user/index'
    ];
    $this->load->view('admin/layout/wrapper', $data, FALSE);
  }

  function add()
  {

    $this->load->helper('String');

    $valid = $this->form_validation;
    $valid->set_rules('username', 'Nama Username', 'is_unique[tbl_user.username]', array('is_unique' => '%s telah ada. Silahkan masukkan kode yang lain'));


    if ($valid->run() === false) {
      $data = [
        'title'     => 'Tambah User',
        'add'       => 'admin/user/add',
        'back'      => 'admin/user',
        'content'   => 'admin/user/add'
      ];
      $this->load->view('admin/layout/wrapper', $data, FALSE);
    } else {
      $i = $this->input;
      $data = [
        'id_user'         => random_string('numeric'),
        'username'        => $i->post('username'),
        'namalengkap'     => $i->post('namalengkap'),
        'no_ktp'          => $i->post('no_ktp'),
        'no_hp'           => $i->post('no_hp'),
        'tanggal_lahir'   => $i->post('tanggal_lahir'),
        'tempat_lahir'    => $i->post('tempat_lahir'),
        'alamat'          => $i->post('alamat'),
        'agama'           => $i->post('agama'),
        'jenis_kelamin'   => $i->post('jenis_kelamin'),
        'password'        => sha1($i->post('password')),
        'is_active'       => $i->post('is_aktif')
      ];
      $this->Crud_model->add('tbl_user', $data);
      $this->session->set_flashdata('msg', 'user berhasil ditambah');
      redirect('admin/user');
    }
  }

  function edit($id_user)
  {

    $this->load->helper('String');

    $user = $this->Crud_model->listingOne('tbl_user', 'id_user', $id_user);

    $valid = $this->form_validation;
    $valid->set_rules('namalengkap', 'Nama Lengkap', 'required');


    if ($valid->run() === false) {
      $data = [
        'title'     => 'Edit User ' . $user->namalengkap,
        'edit'       => 'admin/user/edit/',
        'back'      => 'admin/user',
        'user'      => $user,
        'content'   => 'admin/user/edit'
      ];
      $this->load->view('admin/layout/wrapper', $data, FALSE);
    } else {
      $i = $this->input;
      $password = "";
      if ($i->post('password') != "") {
        $password = sha1($i->post('password'));
      } else {
        $password = $user->password;
      }


      $data = [
        'id_user'         => $id_user,
        'username'        => $i->post('username'),
        'namalengkap'     => $i->post('namalengkap'),
        'no_ktp'          => $i->post('no_ktp'),
        'no_hp'           => $i->post('no_hp'),
        'tanggal_lahir'   => $i->post('tanggal_lahir'),
        'tempat_lahir'    => $i->post('tempat_lahir'),
        'alamat'          => $i->post('alamat'),
        'agama'           => $i->post('agama'),
        'jenis_kelamin'   => $i->post('jenis_kelamin'),
        'password'        => $password,
        'is_active'       => $i->post('is_aktif')
      ];
      $this->Crud_model->edit('tbl_user', 'id_user', $id_user, $data);
      $this->session->set_flashdata('msg', 'user berhasil ditambah');
      redirect('admin/user');
    }
  }

  function delete($id_user)
  {
    $this->Crud_model->delete('tbl_user', 'id_user', $id_user);
    $this->session->set_flashdata('msg', 'data telah dihapus');
    redirect('admin/user');
  }
}
