<section class="pt80 pb90 bg-white">
  <div class="container">
    <div class="row">

      <div class="col-md-12 text-center pb50">
        <h2>Pendaftaran<br><strong>Pernikahan</strong></h2>
      </div>

    </div>

    <div class="row">
      <div class="col-md-12">
        <table class="table">
          <tr>
            <td width="200px">Nama Calon Suami</td>
            <td>: <?= $dataLengkap->nama_pria; ?></td>
          </tr>
          <tr>
            <td width="200px">Nama Calon Istri</td>
            <td>: <?= $dataLengkap->nama_wanita; ?></td>
          </tr>
          <tr>
            <td>Wali Calon Istri </td>
            <td>: <?= $dataLengkap->wali_wanita; ?></td>
          </tr>
          <tr>
            <td>Saksi 1 </td>
            <td>: <?= $dataLengkap->saksi; ?></td>
          </tr>
          <tr>
            <td>Penghulu </td>
            <td>: <?= $dataLengkap->penghulu; ?></td>
          </tr>
          <tr>
            <td>Tanggal Akad Nikah </td>
            <td>: <?= $dataLengkap->tgl_akad_nikah; ?></td>
          </tr>
          <tr>
            <td>Mahar </td>
            <td>: <?= $dataLengkap->mahar_pernikahan; ?></td>
          </tr>
          <tr>
            <td>Tempat </td>
            <td>: <?= $dataLengkap->tempat_akad; ?></td>
          </tr>
        </table>
        <?php include('kelengkapan/form.php') ?>
      </div>
    </div>



    <div class="row">
      <div class="col-md-12">
        <h3>Kelengkapan Berkas</h3>

        <?php include('kelengkapan/sk_desa.php'); ?>
        <?php include('kelengkapan/rekomendasi.php'); ?>

      </div>
    </div>

    <div class="row">
      <div class="col-md-12 text-center">
        <a href="<?= base_url('home/nikah/daftar/selesai'); ?>" class="btn btn-primary btn-xl">Selesai <i class="fa fa-arrow-right"></i></a>
        <!-- <button type="submit" class="btn btn-primary btn-xl">Selanjutnya <i class="fa fa-arrow-right"></i></button> -->
      </div>
    </div>

  </div>
  </div>
</section>