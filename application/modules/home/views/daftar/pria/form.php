<div class="form-group">
  <label for="">Lengkapi Form</label>
  <button type="button" class="btn btn-<?php if (($dataPria->nama_pria) != "" && $dataPria->umur_pria != "") {
                                          echo "success";
                                        } else {
                                          echo "primary";
                                        } ?>" data-toggle="modal" data-target="#exampleModalFormPRIA">
    <?php if (($dataPria->nama_pria) != "" && $dataPria->umur_pria != "") {
      echo '<i  class="fa fa-check"></i> selesai';
    } else {
      echo "Lengkapi";
    } ?>
  </button>

</div>

<!-- Modal -->
<div class="modal fade" id="exampleModalFormPRIA" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <?= form_open('home/nikah/pria/form') ?>
      <form method="post">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Formulir Pria</h5>
        </div>
        <div class="modal-body">

          <div class="form-group">
            <label for="">Nama Lengkap (Sesuai KTP)</label>
            <input type="text" class="form-control" name="nama_pria" value="<?= $dataPria->nama_pria; ?>" required placeholder="Nama Lengkap">
          </div>

          <div class="form-group">
            <label for="">Bin</label>
            <input type="text" class="form-control" name="bin_pria" value="<?= $dataPria->bin_pria; ?>" required placeholder="Bin">
          </div>

          <div class="form-group">
            <label for="">Tempat Lahir (Sesuai KTP)</label>
            <input type="text" class="form-control" name="tempat_lahir_pria" value="<?= $dataPria->tempat_lahir_pria; ?>" required placeholder="Tempat Lahir">
          </div>

          <div class="form-group">
            <label for="">Tanggal Lahir (Sesuai KTP)</label>
            <input type="date" class="form-control" name="tanggal_lahir_pria" value="<?= $dataPria->tanggal_lahir_pria; ?>" required placeholder="Tanggal Lahir">
          </div>

          <div class="form-group">
            <label for="">Agama (Sesuai KTP)</label>
            <input type="text" class="form-control" name="agama_pria" value="<?= $dataPria->agama_pria; ?>" required placeholder="Agama">
          </div>

          <div class="form-group">
            <label for="">Alamat (Sesuai KTP)</label>
            <input type="text" class="form-control" name="alamat_pria" value="<?= $dataPria->alamat_pria; ?>" required placeholder="Alamat (Sesuai KTP)">
          </div>

          <div class="form-group">
            <label for="">Warga Negara</label>
            <input type="text" class="form-control" name="warga_negara_pria" value="<?= $dataPria->warga_negara_pria; ?>" required placeholder="Warga Negara">
          </div>



          <div class="form-group">
            <label for="">Status</label>
            <select name="status_pria" required class="form-control">
              <option value="">--Status--</option>
              <option value="Jejaka" <?= $dataPria->status_pria != 'Jejaka' ?: 'selected';  ?>>Jejaka</option>
              <option value="Duda Mati" <?= $dataPria->status_pria != "Duda Mati" ?: 'selected';  ?>>Duda Mati</option>
              <option value="Duda Talak/Cerai" <?= $dataPria->status_pria != "Duda Talak/Cerai" ?: 'selected';  ?>>Duda Talak/Cerai</option>
              <option value="Beristri" <?= $dataPria->status_pria != "Beristri" ?: 'selected';  ?>>Beristri</option>
            </select>
          </div>

          <div class="form-group">
            <label for="">Umur</label>
            <input type="text" class="form-control" name="umur_pria" value="<?= $dataPria->umur_pria; ?>" required placeholder="Umur">
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