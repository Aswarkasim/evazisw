    <div class="form-group">
      <label for="">Akta Cerai (Jika Ada)</label>
      <button type="button" class="btn btn-<?php if ($dataWanita->akta_cerai_wanita) {
                                              echo "success";
                                            } else {
                                              echo "primary";
                                            } ?>" data-toggle="modal" data-target="#exampleModalAktaCeraiWanita">
        <?php if ($dataWanita->akta_cerai_wanita) {
          echo '<i  class="fa fa-check"></i> selesai';
        } else {
          echo "Upload";
        } ?>
      </button>

    </div>


    <!-- Modal -->
    <div class="modal fade" id="exampleModalAktaCeraiWanita" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <?= form_open_multipart('home/nikah/wanita/aktaCerai') ?>
          <form method="post">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Akta Cerai</h5>
            </div>
            <div class="modal-body">
              <input class="form-control" type="file" name="akta_cerai_wanita" id="">
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