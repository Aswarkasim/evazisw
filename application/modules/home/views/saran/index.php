<div class="container pt-5">

  <div class="row">

    <!-- Post Content Column -->
    <div class="col-lg-8">

      <!-- Title -->
      <h2 class="mt-4">Berikan saran dan masukan</h2>

      <hr>

      <form action="<?= base_url('home/saran/kirim'); ?>" method="POST">
        <div class="form-group">
          <div class="label"><strong> Saran</strong></div>
          <textarea name="isi_saran" class="form-control" id="editor" cols="30" rows="10"></textarea>
        </div>

        <div class="form-group pull-right">
          <button type="submit" class="btn btn-primary">Kirim <i class="fa fa-telegram"></i></button>
        </div>
      </form>

    </div>
    <!-- Sidebar Widgets Column -->
    <div class="col-md-4">
      <?php $this->load->view('home/berita/cari') ?>
      <?php $this->load->view('home/berita/kategori') ?>


    </div>

  </div>
  <!-- /.row -->

</div>


<script src="<?= base_url('assets/') ?>js/ckeditor/ckeditor.js"></script>
<script>
  CKEDITOR.replace("editor");
</script>