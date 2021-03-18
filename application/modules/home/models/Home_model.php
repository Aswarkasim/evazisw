<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Home_model extends CI_Model
{

  public function loginEmail($email, $password)
  {
    $this->db->select('*')
      ->from('tbl_user')
      ->where(array(
        'email'      => $email,
        'password'   => sha1($password)
      ));
    $query = $this->db->get();
    return $query->row();
  }
  public function loginUsername($username, $password)
  {
    $this->db->select('*')
      ->from('tbl_user')
      ->where(array(
        'username'      => $username,
        'password'   => sha1($password)
      ));
    $query = $this->db->get();
    return $query->row();
  }

  function listBerita($limit, $offset)
  {
    $this->db->select('tbl_berita.*,
                            tbl_kategori.nama_kategori')
      ->from('tbl_berita')
      ->join('tbl_kategori', 'tbl_kategori.id_kategori = tbl_berita.id_kategori', 'LEFT')
      ->limit($limit)
      ->offset($offset)
      ->order_by('date_created', 'DESC');
    return $this->db->get()->result();
  }

  function listSideBerita()
  {
    $this->db->select('*')
      ->from('tbl_berita')
      ->order_by('date_created', 'DESC')
      ->limit(5);
    return $this->db->get()->result();
  }

  function listStruktur()
  {
    $this->db->select('*')
      ->from('tbl_struktur')
      ->order_by('urutan', 'ASC');
    return $this->db->get()->result();
  }

  function cekUserDaftar($id_user)
  {
    $this->db->select('*')
      ->from('tbl_daftar')
      ->where('id_user', $id_user);
    return $this->db->get()->result();
  }

  public function cariBerita($key)
  {
    $this->db->select('*')->from('tbl_berita')
      ->like('judul_berita', $key);
    return $this->db->get()->result();
  }
}
