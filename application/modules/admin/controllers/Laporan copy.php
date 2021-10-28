<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Laporan extends CI_Controller
{


  public function __construct()
  {
    parent::__construct();

    $this->load->model('admin/admin_model', 'AM');
  }


  public function index()
  {
    $data = [
      'content'   => 'admin/laporan/index'
    ];
    $this->load->view('admin/layout/wrapper', $data, FALSE);
  }

  function laporan()
  {

    $i = $this->input;
    $zis = $i->post('zis');
    $transaksi = $i->post('transaksi');
    $dari = $i->post('dari');
    $sampai = $i->post('sampai');

    if (isset($_POST['cetak'])) {
      $this->cetak($transaksi, $zis, $dari, $sampai);
    } else if (isset($_POST['excel'])) {
      $this->exportExcel($transaksi, $zis, $dari, $sampai);
    };
  }

  function cetak($transaksi, $zis, $dari, $sampai)
  {
    $konfigurasi = $this->Crud_model->listingOne('tbl_konfigurasi', 'id_konfigurasi', '1');

    // $peminjaman = $this->AM->cetakListPeminjaman($transaksi, $dari, $sampai);

    $title = '';

    if ($transaksi == 'penyetoran') {
      $cetak = $this->AM->cetakListPenyetoran($zis, $dari, $sampai);

      $data = [
        'title'     => $title,
        'cetak' => $cetak,
        'konfigurasi' => $konfigurasi,
      ];
      $this->load->view('admin/laporan/cetak_penyetoran', $data, FALSE);
    } else {
      $cetak = $this->AM->cetakListPenyaluran($zis, $dari, $sampai);

      $data = [
        'title'     => $title,
        'cetak' => $cetak,
        'konfigurasi' => $konfigurasi,
      ];
      $this->load->view('admin/laporan/cetak_penyaluran', $data, FALSE);
    }
  }



  private function exportExcel($transaksi, $dari, $sampai)
  {
    $this->load->library("excel");

    $object = new PHPExcel();

    $object->setActiveSheetIndex(0);

    $table_columns = array("Date Created", "Nama Anggota", "Judul Buku", "Tanggal Peminjaman", "Tanggal Harus Kembali", "Tanggal Kembali", "Status Kembali");

    $column = 0;

    foreach ($table_columns as $field) {

      $object->getActiveSheet()->setCellValueByColumnAndRow($column, 1, $field);

      $column++;
    }


    $data = $this->AM->cetakListPeminjaman($transaksi, $dari, $sampai);


    $excel_row = 2;

    foreach ($data as $row) {

      $object->getActiveSheet()->setCellValueByColumnAndRow(0, $excel_row, $row->date_created);
      $object->getActiveSheet()->setCellValueByColumnAndRow(1, $excel_row, $row->nama_anggota);
      $object->getActiveSheet()->setCellValueByColumnAndRow(2, $excel_row, $row->judul_buku);
      $object->getActiveSheet()->setCellValueByColumnAndRow(3, $excel_row, $row->tangga_peminjaman);
      $object->getActiveSheet()->setCellValueByColumnAndRow(4, $excel_row, $row->tanggal_harus_kembali);
      $object->getActiveSheet()->setCellValueByColumnAndRow(5, $excel_row, $row->tanggal_kembali);
      $object->getActiveSheet()->setCellValueByColumnAndRow(6, $excel_row, $row->status_kembali);

      $excel_row++;
    }

    $object_writer = PHPExcel_IOFactory::createWriter($object, 'Excel5');

    header('Content-Type: application/vnd.ms-excel');

    header('Content-Disposition: attachment;filename="DataBuku.xls"');

    ob_end_clean();
    ob_start();
    $object_writer->save('php://output');
  }
}
