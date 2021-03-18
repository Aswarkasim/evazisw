<div class="form-group">
  <label for="">Lengkapi Form</label>
  <button type="button" class="btn btn-<?php if (($dataLengkap->mahar_pernikahan) != "" && $dataLengkap->wali_wanita != "") {
                                          echo "success";
                                        } else {
                                          echo "primary";
                                        } ?>" data-toggle="modal" data-target="#exampleModalFormWanita">
    <?php if (($dataLengkap->mahar_pernikahan) != "" && $dataLengkap->wali_wanita != "") {
      echo '<i  class="fa fa-check"></i> selesai';
    } else {
      echo "Lengkapi";
    } ?>
  </button>

</div>

<!-- Modal -->
<div class="modal fade" id="exampleModalFormWanita" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <?= form_open('home/nikah/daftar/formKelengkapan') ?>
      <form method="post">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Formulir Wanita</h5>
        </div>
        <div class="modal-body">

          <div class="form-group">
            <label for="">Saksi</label>
            <input type="text" class="form-control" name="saksi" value="<?= $dataLengkap->saksi; ?>" required placeholder="Saksi">
          </div>

          <div class="form-group">
            <label for="">Mahar</label>
            <input type="text" class="form-control" name="mahar_pernikahan" value="<?= $dataLengkap->mahar_pernikahan; ?>" required placeholder="Mahar">
          </div>

          <div class="form-group">
            <label for="">Tempat</label>
            <input type="text" class="form-control" name="tempat_akad" value="<?= $dataLengkap->tempat_akad; ?>" required placeholder="Tempat Akad">
          </div>

          <div class="form-group">
            <label for="">Tanggal Akad</label>
            <input type="date" class="form-control" name="tgl_akad_nikah" value="<?= $dataLengkap->tgl_akad_nikah; ?>" required placeholder="Saksi 2">
          </div>


        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Simpan</button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
        </div>
      </form>
      <?= form_close() ?>
    </div>
  </div>
</div>