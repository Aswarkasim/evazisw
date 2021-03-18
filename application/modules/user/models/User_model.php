<?php

defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model
{

    public function login($kd_anggota, $password)
    {
        $this->db->select('*')
            ->from('tbl_anggota')
            ->where(array(
                'kd_anggota'      => $kd_anggota,
                'password'   => sha1($password)
            ));
        $query = $this->db->get();
        return $query->row();
    }

    function listBukuPinjam($kd_anggota)
    {
        $this->db->select('tbl_peminjaman.*, 
                            tbl_buku.judul_buku')
            ->from('tbl_peminjaman')
            ->join('tbl_buku', 'tbl_buku.kd_buku = tbl_peminjaman.kd_buku', 'left')
            ->where('kd_anggota', $kd_anggota)
            ->where('status_kembali', 'Belum');
        return $this->db->get()->result();
    }

    function detailBukuPinjam($kd_buku)
    {
        $this->db->select('tbl_buku.*, tbl_penerbit.nm_penerbit, tbl_kategori.nm_kategori')
            ->from('tbl_buku')
            ->join('tbl_penerbit', 'tbl_penerbit.kd_penerbit = tbl_buku.kd_penerbit', 'left')
            ->join('tbl_kategori', 'tbl_kategori.kd_kategori = tbl_buku.kd_kategori', 'left')
            ->where('kd_buku', $kd_buku);
        return $this->db->get()->row();
    }
}
