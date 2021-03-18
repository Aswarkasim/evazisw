<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Admin_model extends CI_Model
{


  function listBerita()
  {
    $this->db->select('tbl_berita.*,
                            tbl_kategori.nama_kategori')
      ->from('tbl_berita')
      ->join('tbl_kategori', 'tbl_kategori.id_kategori = tbl_kategori.id_kategori', 'LEFT');
    return $this->db->get()->result();
  }

  function listDaftar()
  {
    $this->db->select('tbl_daftar.*,
                            tbl_user.namalengkap')
      ->from('tbl_daftar')
      ->join('tbl_user', 'tbl_user.id_user = tbl_daftar.id_user', 'LEFT');
    return $this->db->get()->result();
  }

  function detailDaftar($id_daftar)
  {
    $this->db->select('tbl_daftar.*,
                            tbl_user.*')
      ->from('tbl_daftar')
      ->join('tbl_user', 'tbl_user.id_user = tbl_daftar.id_user', 'LEFT')
      ->where('id_daftar', $id_daftar);
    return $this->db->get()->row();
  }

  function detailBerita($slug)
  {
    $this->db->select('tbl_berita.*,
                            tbl_kategori.nama_kategori')
      ->from('tbl_berita')
      ->join('tbl_kategori', 'tbl_kategori.id_kategori = tbl_kategori.id_kategori', 'LEFT')
      ->where('tbl_berita.slug', $slug);
    return $this->db->get();
  }

  function printListRange($awal, $akhir)
  {
    $this->db->select('*')
      ->from('tbl_jadwal')
      ->where('tanggal >=', $awal)
      ->where('tanggal <=', $akhir)
      ->order_by('tanggal', 'ASC');
    return $this->db->get()->result();
  }

  public function printDone($status)
  {
    $query = $this->db->select('*')
      ->from('tbl_jadwal')
      ->where('is_done', $status)
      ->order_by('tanggal', 'ASC')
      ->get();
    return $query->result();
  }

  function listSaran()
  {
    $this->db->select('tbl_saran.*,
                            tbl_user.namalengkap')
      ->from('tbl_saran')
      ->join('tbl_user', 'tbl_user.id_user = tbl_saran.id_user', 'LEFT')
      ->order_by('tbl_saran.date_created', 'DESC');
    return $this->db->get()->result();
  }

  function detailSaran($id_saran)
  {
    $this->db->select('tbl_saran.*,
                            tbl_user.namalengkap')
      ->from('tbl_saran')
      ->join('tbl_user', 'tbl_user.id_user = tbl_saran.id_user', 'LEFT')
      ->where('id_saran', $id_saran);
    return $this->db->get()->row();
  }
}

/* End of file ModelName.php */
