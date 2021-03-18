    <div class="form-group">
      <label for="">Rekomendasi Pernikahan</label>
      <button type="button" class="btn btn-<?php if ($dataLengkap->rekomendasi_nikah) {
                                              echo "success";
                                            } else {
                                              echo "primary";
                                            } ?>" data-toggle="modal" data-target="#exampleModalrekomendasi_nikah">
        <?php if ($dataLengkap->rekomendasi_nikah) {
          echo '<i  class="fa fa-check"></i> selesai';
        } else {
          echo "Upload";
        } ?>
      </button>

    </div>


    <!-- Modal -->
    <div class="modal fade" id="exampleModalrekomendasi_nikah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <?= form_open_multipart('home/nikah/daftar/rekomendasiNikah') ?>
          <form method="post">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Rekomendasi Pernikahan</h5>
            </div>
            <div class="modal-body">
              <input class="form-control" type="file" name="rekomendasi_nikah" id="">
            </div>
            <div class="modal-footer">
              <button type="submit" class="btn btn-primary">Upload</button>
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
          </form>
          <?= form_close() ?>
        </div>
      </div>
    </div>