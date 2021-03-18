<section class="pt80 pb90 bg-white">
  <div class="container">
    <div class="row text-center">

      <div class="col-md-12 text-center pb50">
        <h2>Pendaftaran<br><strong>Pernikahan</strong></h2>
      </div>

    </div>


    <h3>Data Wanita</h3>

    <div class="row">
      <div class="col-md-6">
        <?= validation_errors() ?>
        <table class="table">
          <tr>
            <td width="200px">Nama </td>
            <td>: <?= $dataWanita->nama_wanita; ?></td>
          </tr>
          <tr>
            <td>Bin </td>
            <td>: <?= $dataWanita->bin_wanita; ?></td>
          </tr>
          <tr>
            <td>Tempat Lahir </td>
            <td>: <?= $dataWanita->tempat_lahir_wanita; ?></td>
          </tr>
          <tr>
            <td>Tanggal Lahir </td>
            <td>: <?= $dataWanita->tanggal_lahir_wanita; ?></td>
          </tr>
          <tr>
            <td>Agama </td>
            <td>: <?= $dataWanita->agama_wanita; ?></td>
          </tr>
          <tr>
            <td>Alamat </td>
            <td>: <?= $dataWanita->alamat_wanita; ?></td>
          </tr>
          <tr>
            <td>Warga Negara </td>
            <td>: <?= $dataWanita->warga_negara_wanita; ?></td>
          </tr>
          <tr>
            <td>Status </td>
            <td>: <?= $dataWanita->status_wanita; ?></td>
          </tr>
          <tr>
            <td>Umur </td>
            <td>: <?= $dataWanita->umur_wanita; ?></td>
          </tr>
          <tr>
            <td>Wali </td>
            <td>: <?= $dataWanita->wali_wanita; ?></td>
          </tr>
        </table>

        <?php include('wanita/form.php') ?>



      </div>
    </div>
    <hr>

    <?php include('wanita/ktp.php') ?>
    <?php include('wanita/ktp_wali.php') ?>
    <?php include('wanita/kk.php') ?>
    <?php include('wanita/ijazah_terakhir.php') ?>
    <?php include('wanita/sk_imunitas.php') ?>
    <?php include('wanita/sk_belum_menikah.php') ?>
    <?php include('wanita/pas_foto.php') ?>
    <?php include('wanita/akta_cerai.php') ?>
    <?php include('wanita/sk_kematian_cerai.php') ?>
    <?php include('wanita/piagam_nasehat.php') ?>


    <div class="row">
      <div class="col-md-12 text-center">
        <a href="<?= base_url('home/nikah/daftar/dataLengkap'); ?>" class="btn btn-primary btn-xl">Selanjutnya <i class="fa fa-arrow-right"></i></a>
        <!-- <button type="submit" class="btn btn-primary btn-xl">Selanjutnya <i class="fa fa-arrow-right"></i></button> -->
      </div>
    </div>



  </div>
</section>