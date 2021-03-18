    <div class="form-group">
      <label for="">Surat Keterangan Imunitas</label>
      <button type="button" class="btn btn-<?php if ($dataPria->sk_imunitas_pria) {
                                              echo "success";
                                            } else {
                                              echo "primary";
                                            } ?>" data-toggle="modal" data-target="#exampleModalSKImunitasPria">
        <?php if ($dataPria->sk_imunitas_pria) {
          echo '<i  class="fa fa-check"></i> selesai';
        } else {
          echo "Upload";
        } ?>
      </button>

    </div>


    <!-- Modal -->
    <div class="modal fade" id="exampleModalSKImunitasPria" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <?= form_open_multipart('home/nikah/pria/skImunitas') ?>
          <form method="post">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Surat Keterangan Imunitas</h5>
            </div>
            <div class="modal-body">
              <input class="form-control" type="file" name="sk_imunitas_pria" id="">
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