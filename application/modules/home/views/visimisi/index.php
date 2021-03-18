<div class="container pt-5">

  <div class="row">

    <!-- Post Content Column -->
    <div class="col-lg-8">

      <!-- Title -->
      <h2 class="mt-4">VISI & MISI</h2>

      <hr>

      <blockquote>
        <h3><strong>Visi</strong></h3>
      </blockquote>
      <p><?= $profil->visi; ?></p>
      <hr>

      <blockquote>
        <h3><strong>Misi</strong></h3>
      </blockquote>
      <p><?= $profil->misi; ?></p>

      <hr>


    </div>

    <!-- Sidebar Widgets Column -->
    <div class="col-md-4">
      <?php $this->load->view('home/berita/cari') ?>
      <?php $this->load->view('home/berita/kategori') ?>

    </div>

  </div>
</div>