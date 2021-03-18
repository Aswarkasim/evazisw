<div class="container">

  <div class="row">

    <!-- Post Content Column -->
    <div class="col-lg-8">

      <!-- Title -->
      <h1 class="mt-4"><?= $berita->judul_berita; ?></h1>

      <hr>

      <!-- Date/Time -->
      <p><?= bulan($berita->date_created); ?></p>

      <hr>

      <!-- Preview Image -->
      <img class="img-fluid rounded" src="<?= base_url($berita->gambar); ?>" alt="">

      <hr>

      <!-- Post Content -->
      <p class="lead"><?= $berita->isi; ?></p>

      <hr>



    </div>

    <!-- Sidebar Widgets Column -->
    <div class="col-md-4">


      <!-- Search Widget -->
      <?php $this->load->view('home/berita/cari') ?>
      <?php $this->load->view('home/berita/kategori') ?>


    </div>


  </div>
  <!-- /.row -->





</div>