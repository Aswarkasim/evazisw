<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Saran extends CI_Controller
{

  public function index()
  {
    $kategori = $this->Crud_model->listing('tbl_kategori', '5');
    $data = [
      'kategori'  => $kategori,
      'content'  => 'home/saran/index'
    ];
    $this->load->view('home/layout/wrapper', $data, FALSE);
  }

  function kirim()
  {
    is_logged_in_user();

    $this->load->helper('string');

    $i = $this->input;
    $valid = $this->form_validation;
    $valid->set_rules('deskripsi', 'Deskripsi', 'required', ['required' => '%s tidak boleh kosong']);

    $data = [
      'id_saran'   => random_string(),
      'id_user'  => $this->session->userdata('id_user'),
      'isi_saran'  => $this->input->post('isi_saran'),
    ];
    $this->Crud_model->add('tbl_saran', $data);
    $this->session->set_flashdata('msg', 'Terima kasi telah mengirimkan saran');
    redirect('home/saran', 'refresh');
  }
}

/* End of file Controllername.php */