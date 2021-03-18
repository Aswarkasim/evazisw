<section class="pt80 pb90 bg-white">
  <div class="container">
    <div class="row text-center">

      <div class="col-md-12 text-center pb50">
        <h2>Pendaftaran<br><strong>Pernikahan</strong></h2>
      </div>

    </div>

    <h3>Data Pendaftar</h3>



    <div class="row">
      <div class="col-md-6">

        <div class="form-group">
          <label for="">Nama Pendaftar</label>
          <input type="text" class="form-control" placeholder="Nama Pendaftar">
        </div>

        <div class="form-group">
          <label for="">No. KTP Pendaftar</label>
          <input type="text" class="form-control" placeholder="Nama Pendaftar">
        </div>
      </div>



      <div class="col-md-6">
        <div class="form-group">
          <label for="">Alamat Pendaftar</label>
          <input type="text" class="form-control" placeholder="Nama Pendaftar">
        </div>

        <div class="form-group">
          <label for="">No. Hp Pendaftar</label>
          <input type="text" class="form-control" placeholder="Nama Pendaftar">
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12 text-center">
        <a href="<?= base_url('home/nikah/daftar/dataPria'); ?>" class="btn btn-success btn-xl">Selanjutnya <i class="fa fa-arrow-right"></i></a>
        <!-- <button type="submit" class="btn btn-primary btn-xl">Selanjutnya <i class="fa fa-arrow-right"></i></button> -->
      </div>
    </div>

    <hr>
    <hr>





    <!-- Modal -->
    <div class="modal fade" id="modalRekomendasiPernikahan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <?= form_open_multipart('home/nikah/daftar/') ?>
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Rekomendasi Pernikahan</h5>
          </div>
          <div class="modal-body">
            <input type="file" name="rekomendasi_nikah" required id="">
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div>
        </div>
        <?= form_close() ?>

      </div>
    </div>



    <!-- Modal -->
    <div class="modal fade" id="modalSkDesa" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <?= form_open_multipart('home/nikah/daftar/') ?>
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Surat Keterangan Dari Desa Atau Kelurahan</h5>
          </div>
          <div class="modal-body">
            <input type="file" name="sk_desa" required id="">
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div>
        </div>
        <?= form_close() ?>
      </div>
    </div>

  </div>
  </div>


  </div>
  </div>
</section>