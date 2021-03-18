<div class="col-md-12 text-center mt-5">
  <h2>Berita<br></h2>
</div>

<div class="container">

  <hr>

  <div class="row">
    <div class="col-md-8">
      <ul class="list-unstyled">

        <?php foreach ($berita as $row) { ?>
          <li class="media">
            <img src="<?= base_url($row->gambar); ?>" width="100px" class="mr-3" alt="...">
            <div class="media-body">
              <h5 class="mt-0 mb-1"><a href="<?= base_url('home/berita/detail/' . $row->slug); ?>"><strong><?= $row->judul_berita; ?></strong></a></h5>
              <p><?= character_limiter($row->isi) ?></p>
            </div>
          </li>
          <hr>
        <?php } ?>

      </ul>
    </div>

    <div class="col-md-4">

      <?php $this->load->view('home/berita/cari') ?>
      <?php $this->load->view('home/berita/kategori') ?>



    </div>
  </div>

  <div class="row">
    <div class="col-md-8 text-center">
      <?php if (isset($pagination)) {
        echo $pagination;
      } ?>
    </div>
  </div>
</div>