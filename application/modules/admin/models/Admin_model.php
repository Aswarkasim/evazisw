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

  function listPenyaluran($zis)
  {
    $this->db->select('tbl_penyaluran.*,
                            tbl_desa.nama_desa')
      ->from('tbl_penyaluran')
      ->join('tbl_desa', 'tbl_desa.id_desa = tbl_penyaluran.id_desa', 'LEFT')
      ->where('tbl_penyaluran.dana', $zis)
      ->order_by('tbl_penyaluran.date_created', 'DESC');
    return $this->db->get()->result();
  }

  function listMustahik()
  {
    $this->db->select('tbl_mustahik.*,
                            tbl_desa.nama_desa')
      ->from('tbl_mustahik')
      ->join('tbl_desa', 'tbl_desa.id_desa = tbl_mustahik.id_desa', 'LEFT')
      ->order_by('tbl_mustahik.date_created', 'DESC');
    return $this->db->get()->result();
  }

  function listWaqaf()
  {
    $this->db->select('tbl_waqaf.*,
                            tbl_desa.nama_desa')
      ->from('tbl_waqaf')
      ->join('tbl_desa', 'tbl_desa.id_desa = tbl_waqaf.id_desa', 'LEFT')
      ->order_by('tbl_waqaf.date_created', 'DESC');
    return $this->db->get()->result();
  }

  function listPenyetoran($zis)
  {
    $this->db->select('tbl_penyetoran.*,
                            tbl_muzakki.nama_muzakki')
      ->from('tbl_penyetoran')
      ->join('tbl_muzakki', 'tbl_muzakki.id_muzakki = tbl_penyetoran.id_muzakki', 'LEFT')
      ->where('tbl_penyetoran.jenis_penyetoran', $zis)
      ->order_by('tbl_penyetoran.date_created', 'DESC');
    return $this->db->get()->result();
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

  function checkWaqaf()
  {
    $query = $this->db->select('*')
      ->from('tbl_waqaf')
      ->where('id_desa', '')
      ->where('tahun', '')
      ->where('penggunaan', '')
      ->where('waqif', '')
      ->get();
    return $query->row();
  }

  function cetakListPenyetoran($zis, $dari = null, $sampai = null)
  {
    $this->db->select('tbl_penyetoran.*, 
                            tbl_muzakki.*')
      ->from('tbl_penyetoran')
      ->join('tbl_muzakki', 'tbl_muzakki.id_muzakki = tbl_penyetoran.id_muzakki', 'left')
      ->where('tbl_penyetoran.jenis_penyetoran', $zis)
      ->where('tbl_penyetoran.date_created >=', $dari)
      ->where('tbl_penyetoran.date_created <=', $sampai);
    return $this->db->get()->result();
  }


  function cetakListPenyaluran($zis, $dari = null, $sampai = null)
  {
    $this->db->select('tbl_penyaluran.*, 
                            tbl_desa.*')
      ->from('tbl_penyaluran')
      ->join('tbl_desa', 'tbl_desa.id_desa = tbl_penyaluran.id_desa', 'left')
      ->where('tbl_penyaluran.dana', $zis)
      ->where('tbl_penyaluran.date_created >=', $dari)
      ->where('tbl_penyaluran.date_created <=', $sampai);
    return $this->db->get()->result();
  }

  function cetakWaqaf($dari = null, $sampai = null)
  {
    $this->db->select('tbl_waqaf.*,
                            tbl_desa.nama_desa')
      ->from('tbl_waqaf')
      ->join('tbl_desa', 'tbl_desa.id_desa = tbl_waqaf.id_desa', 'LEFT')
      ->where('tbl_waqaf.date_created >=', $dari)
      ->where('tbl_waqaf.date_created <=', $sampai)
      ->order_by('tbl_waqaf.date_created', 'DESC');
    return $this->db->get()->result();
  }
}

/* End of file ModelName.php */
