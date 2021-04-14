<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Saran extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('admin/Admin_model', 'AM');
  }


  public function index()
  {
    // $saran = $this->AM->listSaran();
    $saran = $this->Crud_model->listing('tbl_saran');
    $data = [
      'saran'   => $saran,
      'content'  => 'admin/saran/index'
    ];
    $this->load->view('admin/layout/wrapper', $data, FALSE);
  }

  function detail($id_saran)
  {
    is_read('tbl_saran', 'id_saran', $id_saran);
    // $saran = $this->AM->detailSaran($id_saran);

    $saran = $this->Crud_model->listingOne('tbl_saran', 'id_saran', $id_saran);
    $data = [
      'saran'     => $saran,
      'content'   => 'admin/saran/detail'
    ];
    $this->load->view('admin/layout/wrapper', $data, FALSE);
  }

  function delete($id_saran)
  {
    $this->Crud_model->delete('tbl_saran', 'id_saran', $id_saran);
    $this->session->set_flashdata('msg', 'Saran dihapus');
    redirect('admin/saran', 'refresh');
  }
}

/* End of file Controllername.php */
