<div class="container">

  <div class="row">

    <!-- Post Content Column -->
    <div class="col-lg-8">

      <!-- Title -->
      <h2 class="mt-4">Sejarah</h2>

      <hr>
      <!-- Preview Image -->
      <!-- <img class="img-fluid rounded" src="http://placehold.it/900x300" alt=""> -->

      <hr>

      <p><?= $profil->sejarah; ?></p>

    </div>

    <!-- Sidebar Widgets Column -->
    <div class="col-md-4">


      <!-- Search Widget -->
      <div class="card my-4">
        <h5 class="card-header">Berita</h5>
        <div class="card-body">

          <?php foreach ($berita as $row) { ?>
            <div class="input-group">
              <h5><strong><a href="<?= base_url('home/berita/detail/' . $row->slug); ?>"> <?= $row->judul_berita; ?></a></strong></h5>
              <br>
              <p><?= character_limiter($row->isi, '50') ?></p>
              <hr>
            </div>
          <?php } ?>
        </div>
      </div>
    </div>


  </div>
  <!-- /.row -->

</div>