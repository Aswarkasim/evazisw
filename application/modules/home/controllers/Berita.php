<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Berita extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('home/Home_model', 'HM');
  }



  function index()
  {
    $this->load->library('pagination');

    $berita = $this->Crud_model->listing('tbl_berita');
    $kategori = $this->Crud_model->listing('tbl_kategori');

    $config['base_url']     = base_url('home/berita/index/');
    $config['total_rows']   = count($berita);
    $config['per_page']     = 8;

    $from = $this->uri->segment(4);
    $this->pagination->initialize($config);
    $berita = $this->HM->listBerita($config['per_page'], $from);

    $data = [
      'from'      => $from,
      'berita'   => $berita,
      'kategori'   => $kategori,
      'pagination' => $this->pagination->create_links(),
      'content'   => 'home/berita/index'
    ];
    $this->load->view('home/layout/wrapper', $data, FALSE);
  }

  function detail($slug)
  {
    $berita = $this->Crud_model->listingOne('tbl_berita', 'slug', $slug);
    $beritaList = $this->Crud_model->listing('tbl_berita', '2');
    $kategori = $this->Crud_model->listing('tbl_kategori', '2');
    $data = [
      'berita'  => $berita,
      'kategori'  => $kategori,
      'beritaList'  => $beritaList,
      'content'   => 'home/berita/detail'
    ];
    $this->load->view('home/layout/wrapper', $data, FALSE);
  }

  function cari()
  {

    $this->load->model('home/Home_model', 'HM');
    $key = $this->input->post('key');
    $berita = $this->HM->cariBerita($key);
    $kategori = $this->Crud_model->listing('tbl_kategori');

    $data = [
      'berita'  => $berita,
      'kategori'  => $kategori,
      'content'  => 'home/berita/index'
    ];
    $this->load->view('home/layout/wrapper', $data, FALSE);
  }

  function kategori($id_kategori)
  {
    $berita = $this->Crud_model->listingOneAll('tbl_berita', 'id_kategori', $id_kategori);
    $kategori = $this->Crud_model->listing('tbl_kategori');



    $data = [
      'berita'  => $berita,
      'kategori'  => $kategori,
      'content'  => 'home/berita/index'
    ];
    $this->load->view('home/layout/wrapper', $data, FALSE);
  }
}
