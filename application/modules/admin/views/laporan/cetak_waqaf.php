<!DOCTYPE html>
<html lang="en">

<head>
  <title>Cetak Anggota</title>
  <link rel="stylesheet" href="<?= base_url('assets/admin/') ?>bower_components/bootstrap/dist/css/bootstrap.min.css">
  <style type="text/css">
    /* body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        } */

    @page {
      size: landscape;
      margin-left: 100px;
      margin-right: 100px;
      margin-top: 50px;
      margin-bottom: 50px;
    }

    .pembungkus {
      position: relative;
    }

    #qrCode {
      position: absolute;
      top: 10px;
      left: 10px;
    }

    /* h2 {
            position: absolute;
            left: 410px;
            top: 320px;
        }

        p {
            position: absolute;
            left: 220px;
            top: 380px;
            width: 600px
        } */
  </style>
</head>

<body>
  <div class="container-fluid">
    <div class="text-center">
      <h3><?php echo 'LAPORAN ' . strtoupper($title) ?></h3>
      <h3><?= $konfigurasi->nama_aplikasi; ?></h3>
    </div>



    <table class="table table-bordered">
      <thead>
        <tr>
          <th width="40px">#</th>
          <th>Nomor</th>
          <th>Waqif</th>
          <th>Nama Desa</th>
          <th>Penggunaan</th>
          <th>Tanggal</th>
        </tr>
      </thead>
      <tbody>
        <?php $no = 1;
        foreach ($cetak as $row) { ?>
          <tr>
            <td><?= $no++; ?></td>
            <td><?= $row->nomor; ?></td>
            <td><?= $row->waqif; ?></strong></a></td>
            <td><?= $row->nama_desa; ?></td>
            <td><?= $row->penggunaan; ?></td>
            <td><?= $row->tgl_waqaf; ?></td>
          </tr>
        <?php $no++;
        } ?>
      </tbody>
    </table>

  </div>

  <script>
    window.print()
  </script>
</body>

</html>