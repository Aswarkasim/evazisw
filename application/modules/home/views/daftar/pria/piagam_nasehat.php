    <div class="form-group">
      <label for="">Piagam Nasehat Pernikahan</label>
      <button type="button" class="btn btn-<?php if ($dataPria->piagam_nasehat_pernikahan_pria) {
                                              echo "success";
                                            } else {
                                              echo "primary";
                                            } ?>" data-toggle="modal" data-target="#exampleModalpiagam_nasehat_pernikahan_pria">
        <?php if ($dataPria->piagam_nasehat_pernikahan_pria) {
          echo '<i  class="fa fa-check"></i> selesai';
        } else {
          echo "Upload";
        } ?>
      </button>

    </div>


    <!-- Modal -->
    <div class="modal fade" id="exampleModalpiagam_nasehat_pernikahan_pria" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <?= form_open_multipart('home/nikah/pria/piagamNasehat') ?>
          <form method="post">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Piagam Nasehat Pernikahan</h5>
            </div>
            <div class="modal-body">
              <input class="form-control" type="file" name="piagam_nasehat_pernikahan_pria" id="">
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