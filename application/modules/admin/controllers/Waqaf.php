<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Waqaf extends CI_Controller
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
      'add'     => 'admin/waqaf/add',
      'edit'    => 'admin/waqaf/edit/',
      'delete'  => 'admin/waqaf/delete/'
    ];

    $desa = $this->Crud_model->listing('tbl_desa');
    $waqaf = $this->AM->listWaqaf('tbl_waqaf');
    $data = [

      'waqaf' => $waqaf,
      'tombol'   => $tombol,
      'desa'   => $desa,
      'content' => 'admin/waqaf/index'
    ];
    $this->load->view('admin/layout/wrapper', $data, FALSE);
  }

  function add($id_waqaf = null)
  {

    $this->load->helper('string');
    if ($id_waqaf == null) {

      $waqaf = $this->AM->checkWaqaf();

      if (!$waqaf) {
        $dataWaqaf = [
          'id_waqaf' => random_string()
        ];
        $this->Crud_model->add('tbl_waqaf', $dataWaqaf);
        $waqaf = $this->Crud_model->listingOne('tbl_waqaf', 'id_waqaf', $dataWaqaf['id_waqaf']);
      } else {
        $waqaf = $this->Crud_model->listingOne('tbl_waqaf', 'id_waqaf', $waqaf->id_waqaf);
      }
    } else {
      $waqaf = $this->Crud_model->listingOne('tbl_waqaf', 'id_waqaf', $id_waqaf);
    }


    $desa = $this->Crud_model->listing('tbl_desa');

    $required = '%s tidak boleh kosong';
    $valid = $this->form_validation;
    $valid->set_rules('nomor', 'Nomor', 'required');
    if ($valid->run()) {
      if (!empty($_FILES['bukti']['name'])) {
        $config['upload_path']   = './assets/uploads/images/';
        $config['allowed_types'] = 'gif|jpg|png|PNG|svg|jpeg|JPG|JPEG';
        $config['max_size']      = '24000'; // KB 
        $this->upload->initialize($config);
        if (!$this->upload->do_upload('bukti')) {
          $data = [
            'title'     => 'Tambah User',
            'add'       => 'admin/waqaf/add',
            'back'      => 'admin/waqaf',
            'content'   => 'admin/waqaf/add',
            'error'     => $this->upload->display_errors(),
            'content'  => 'admin/waqaf/add'
          ];
          $this->load->view('admin/layout/wrapper', $data, FALSE);
        } else {


          if ($waqaf->gambar != "") {
            unlink($waqaf->gambar);
          }

          $upload_data = ['uploads' => $this->upload->data()];

          $i = $this->input;

          $id_waqaf = $i->post('id_waqaf');

          $data = [
            'id_waqaf'       => $id_waqaf,
            'id_desa'           => $i->post('id_desa'),
            'nomor'          => $i->post('nomor'),
            'tgl_waqaf'          => $i->post('tgl_waqaf'),
            'lokasi'          => $i->post('lokasi'),
            'luas'          => $i->post('luas'),
            'penggunaan'          => $i->post('penggunaan'),
            'waqif'          => $i->post('waqif'),
            'nadzir'          => $i->post('nadzir'),
            'bukti'          => $config['upload_path'] . $upload_data['uploads']['file_name']
          ];
          $this->Crud_model->edit('tbl_waqaf', 'id_waqaf', $id_waqaf, $data);
          $this->session->set_flashdata('msg', 'waqaf berhasil ditambah');
          redirect('admin/waqaf');
        }
      } else {
        $i = $this->input;
        $id_waqaf = $i->post('id_waqaf');

        $data = [
          'id_waqaf'       => $id_waqaf,
          'id_desa'           => $i->post('id_desa'),
          'nomor'          => $i->post('nomor'),
          'tgl_waqaf'          => $i->post('tgl_waqaf'),
          'lokasi'          => $i->post('lokasi'),
          'luas'          => $i->post('luas'),
          'penggunaan'          => $i->post('penggunaan'),
          'waqif'          => $i->post('waqif'),
          'nadzir'          => $i->post('nadzir')
        ];
        $this->Crud_model->edit('tbl_waqaf', 'id_waqaf', $id_waqaf, $data);
        $this->session->set_flashdata('msg', 'waqaf berhasil ditambah');
        redirect('admin/waqaf');
      }
    }



    $data = [
      'title'     => 'Tambah User',
      'add'       => 'admin/waqaf/add',
      'back'      => 'admin/waqaf',
      'desa'      => $desa,
      'waqaf'      => $waqaf,
      'content'   => 'admin/waqaf/add'
    ];
    $this->load->view('admin/layout/wrapper', $data, FALSE);
  }


  function edit($id_waqaf)
  {

    $i = $this->input;
    $data = [
      'id_waqaf' => $id_waqaf,
      'id_desa'           => $i->post('id_desa'),
      'nomor'          => $i->post('nomor'),
      'tgl_waqaf'          => $i->post('tgl_waqaf'),
      'lokasi'          => $i->post('lokasi'),
      'luas'          => $i->post('luas'),
      'penggunaan'          => $i->post('penggunaan'),
      'waqif'          => $i->post('waqif'),
      'nadzir'          => $i->post('nadzir'),
    ];
    $this->Crud_model->edit('tbl_waqaf', 'id_waqaf', $id_waqaf, $data);
    $this->session->set_flashdata('msg', 'waqaf berhasil diedit');
    redirect('admin/waqaf');
  }

  function detail($id_waqaf)
  {

    $waqaf = $this->Crud_model->listingOne('tbl_waqaf', 'id_waqaf', $id_waqaf);
    $data = [
      'waqaf'   => $waqaf,
      'content'  => 'admin/waqaf/detail'
    ];
    $this->load->view('/layout/wrapper', $data, FALSE);
  }

  function delete($id_waqaf)
  {
    $this->Crud_model->delete('tbl_waqaf', 'id_waqaf', $id_waqaf);
    $this->session->set_flashdata('msg', 'data telah dihapus');
    redirect('admin/waqaf');
  }

  function readNadzir($id_waqaf)
  {
    $nadzir = $this->Crud_model->listingOneAll('tbl_nadzir', 'id_waqaf', $id_waqaf);
    echo  json_encode($nadzir);
  }

  function addNadzir()
  {

    $this->load->helper('string');

    $nama_nadzir = $this->input->post('nama_nadzir');
    $umur = $this->input->post('umur');
    $id_waqaf = $this->input->post('id_waqaf');

    if ($nama_nadzir == '') {
      $result['pesan'] = "Nama Nadzir tidak boleh kosong";
    } else if ($umur == '') {
      $result['pesan'] = "Umur tidak boleh kosong";
    } else {

      $data = [
        'id_nadzir'   => random_string(),
        'id_waqaf' => $id_waqaf,
        'nama_nadzir' => $nama_nadzir,
        'umur' => $umur,
      ];
      $this->Crud_model->add('tbl_nadzir', $data);
    }
    echo json_encode($result);
  }

  function deletNadzir()
  {
    $id_nadzir = $this->input->post('id_nadzir');
    $this->Crud_model->delete('tbl_nadzir', 'id_nadzir', $id_nadzir);
  }

  function is_done($id_waqaf, $value)
  {
    __is_boolean('tbl_waqaf', 'id_waqaf', $id_waqaf, 'is_done', $value);
    redirect('admin/waqaf/detail/' . $id_waqaf);
  }
}
