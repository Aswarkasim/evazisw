<div class="form-group">
  <label for="">Lengkapi Form</label>
  <button type="button" class="btn btn-<?php if (($dataWanita->nama_wanita) != "" && $dataWanita->umur_wanita != "") {
                                          echo "success";
                                        } else {
                                          echo "primary";
                                        } ?>" data-toggle="modal" data-target="#exampleModalFormWanita">
    <?php if (($dataWanita->nama_wanita) != "" && $dataWanita->umur_wanita != "") {
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
      <?= form_open('home/nikah/wanita/form') ?>
      <form method="post">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Formulir Wanita</h5>
        </div>
        <div class="modal-body">

          <div class="form-group">
            <label for="">Nama Lengkap (Sesuai KTP)</label>
            <input type="text" class="form-control" name="nama_wanita" value="<?= $dataWanita->nama_wanita; ?>" required placeholder="Nama Lengkap">
          </div>

          <div class="form-group">
            <label for="">Bin</label>
            <input type="text" class="form-control" name="bin_wanita" value="<?= $dataWanita->bin_wanita; ?>" required placeholder="Bin">
          </div>

          <div class="form-group">
            <label for="">Tempat Lahir (Sesuai KTP)</label>
            <input type="text" class="form-control" name="tempat_lahir_wanita" value="<?= $dataWanita->tempat_lahir_wanita; ?>" required placeholder="Tempat Lahir">
          </div>

          <div class="form-group">
            <label for="">Tanggal Lahir (Sesuai KTP)</label>
            <input type="date" class="form-control" name="tanggal_lahir_wanita" value="<?= $dataWanita->tanggal_lahir_wanita; ?>" required placeholder="Tanggal Lahir">
          </div>

          <div class="form-group">
            <label for="">Agama (Sesuai KTP)</label>
            <input type="text" class="form-control" name="agama_wanita" value="<?= $dataWanita->agama_wanita; ?>" required placeholder="Agama">
          </div>

          <div class="form-group">
            <label for="">Alamat (Sesuai KTP)</label>
            <input type="text" class="form-control" name="alamat_wanita" value="<?= $dataWanita->alamat_wanita; ?>" required placeholder="Alamat">
          </div>

          <div class="form-group">
            <label for="">Warga Negara</label>
            <input type="text" class="form-control" name="warga_negara_wanita" value="<?= $dataWanita->warga_negara_wanita; ?>" required placeholder="Warga Negara">
          </div>

          <div class="form-group">
            <label for="">Status</label>
            <select name="status_wanita" required class="form-control">
              <option value="">--Status--</option>
              <option value="Perawan" <?= $dataWanita->status_wanita != 'Perawan' ?: 'selected';  ?>>Perawan</option>
              <option value="Kanda Mati" <?= $dataWanita->status_wanita != "Kanda Mati" ?: 'selected';  ?>>Kanda Mati</option>
              <option value="Janda Talak/Cerai" <?= $dataWanita->status_wanita != "Janda Talak/Cerai" ?: 'selected';  ?>>Janda Talak/Cerai</option>
            </select>
          </div>

          <div class="form-group">
            <label for="">Umur</label>
            <input type="text" class="form-control" name="umur_wanita" value="<?= $dataWanita->umur_wanita; ?>" required placeholder="Umur">
          </div>

          <div class="form-group">
            <label for="">Wali</label>
            <input type="text" class="form-control" name="wali_wanita" value="<?= $dataWanita->wali_wanita; ?>" required placeholder="Wali">
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