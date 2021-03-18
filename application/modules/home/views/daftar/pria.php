<section class="pt80 pb90 bg-white">
  <div class="container">
    <div class="row text-center">

      <div class="col-md-12 text-center pb50">
        <h2>Pendaftaran<br><strong>Pernikahan</strong></h2>
      </div>

    </div>


    <h3>Data Pria</h3>

    <div class="row">
      <div class="col-md-6">
        <?= validation_errors() ?>
        <table class="table">
          <tr>
            <td width="200px">Nama </td>
            <td>: <?= $dataPria->nama_pria; ?></td>
          </tr>
          <tr>
            <td>Bin </td>
            <td>: <?= $dataPria->bin_pria; ?></td>
          </tr>
          <tr>
            <td>Tempat Lahir </td>
            <td>: <?= $dataPria->tempat_lahir_pria; ?></td>
          </tr>
          <tr>
            <td>Tanggal Lahir </td>
            <td>: <?= $dataPria->tanggal_lahir_pria; ?></td>
          </tr>
          <tr>
            <td>Agama </td>
            <td>: <?= $dataPria->agama_pria; ?></td>
          </tr>
          <tr>
            <td>Alamat </td>
            <td>: <?= $dataPria->alamat_pria; ?></td>
          </tr>
          <tr>
            <td>Warga Negara </td>
            <td>: <?= $dataPria->warga_negara_pria; ?></td>
          </tr>
          <tr>
            <td>Status </td>
            <td>: <?= $dataPria->status_pria; ?></td>
          </tr>
          <tr>
            <td>Umur </td>
            <td>: <?= $dataPria->umur_pria; ?></td>
          </tr>
        </table>

        <?php include('pria/form.php') ?>



      </div>
    </div>
    <hr>

    <?php include('pria/ktp.php') ?>
    <?php include('pria/ktp_wali.php') ?>
    <?php include('pria/kk.php') ?>
    <?php include('pria/ijazah_terakhir.php') ?>
    <?php include('pria/sk_imunitas.php') ?>
    <?php include('pria/sk_belum_menikah.php') ?>
    <?php include('pria/pas_foto.php') ?>
    <?php include('pria/akta_cerai.php') ?>
    <?php include('pria/sk_kematian_cerai.php') ?>
    <?php include('pria/piagam_nasehat.php') ?>



    <div class="row">
      <div class="col-md-12 text-center">
        <a href="<?= base_url('home/nikah/daftar/dataWanita'); ?>" class="btn btn-primary btn-xl">Selanjutnya <i class="fa fa-arrow-right"></i></a>
        <!-- <button type="submit" class="btn btn-primary btn-xl">Selanjutnya <i class="fa fa-arrow-right"></i></button> -->
      </div>
    </div>



  </div>
</section>