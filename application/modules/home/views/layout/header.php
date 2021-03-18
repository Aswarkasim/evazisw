<?php $konfigurasi = $this->Crud_model->listingOne('tbl_konfigurasi', 'id_konfigurasi', '1');
?>

<div class="flash-data" data-flashdata="<?= $this->session->flashdata('msg') ?>"></div>
<div class="gagal" data-flashdata="<?= $this->session->flashdata('msg_er') ?>"></div>


<style>
  .text-black {
    color: black;
  }
</style>

<div class="jumbotron mb-0 pb-2 pt-2">
  <div class="container">
    <div class="row">
      <div class="col-md-1">
        <img width="100%" src="<?= base_url('assets/img/logo.png'); ?>" alt="">
      </div>
      <div class="col-md-11">
        <strong>
          <h2 class="text-black mb-0"><?= $konfigurasi->nama_aplikasi; ?></h2>
          <h3 class="text-black"> KECAMATAN <?= $konfigurasi->kecamatan; ?></h3>
          <small>No. Telp. <?= $konfigurasi->kontak_person; ?> | Alamat : <?= $konfigurasi->alamat; ?></p>
        </strong>
      </div>
    </div>
  </div>
</div>



<div class="flash-data" data-flashdata="<?= $this->session->flashdata('msg') ?>"></div>
<div class="gagal" data-flashdata="<?= $this->session->flashdata('msg_er') ?>"></div>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container">
    <a class="navbar-brand" href="<?= base_url(); ?>"><strong> KUA</strong></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarColor01">
      <ul class="navbar-nav mr-auto">

        <li class="nav-item <?php if ($this->uri->segment('2') == 'index') {
                              echo "active";
                            } ?>"><a class="nav-link" href="<?= base_url('home/index'); ?>"><strong> Beranda</strong></a></li>
        <li class="nav-item <?php if ($this->uri->segment('2') == 'berita') {
                              echo "active";
                            } ?>"><a class="nav-link" href="<?= base_url('home/berita'); ?>"><strong> Berita</strong></a></li>
        <li class="nav-item <?php if ($this->uri->segment('2') == 'sejarah') {
                              echo "active";
                            } ?>"><a class="nav-link" href="<?= base_url('home/sejarah'); ?>"><strong> Sejarah</strong></a></li>
        <li class="nav-item <?php if ($this->uri->segment('2') == 'visimisi') {
                              echo "active";
                            } ?>"><a class="nav-link" href="<?= base_url('home/visimisi'); ?>"><strong> Visi & Misi</strong></a></li>
        <li class="nav-item <?php if ($this->uri->segment('2') == 'saran') {
                              echo "active";
                            } ?>"><a class="nav-link" href="<?= base_url('home/saran'); ?>"><strong> Hubungi Kami</strong></a></li>

      </ul>
      <form class="form-inline my-2 my-lg-0">


        <?php if ($this->session->userdata('id_user')) { ?>
          <a href="<?= base_url('user/dashboard'); ?>" class="btn btn-success">
            <i class="fa fa-user"></i> <?php echo ' &nbsp' . $this->session->userdata('namalengkap') ?>
          </a>

        <?php } else { ?>
          <a href="<?= base_url('home/auth'); ?>" class="btn btn-success">
            <i class="fa fa-sign-in"></i> Login
          </a>
        <?php } ?>
      </form>
    </div>
  </div>
</nav>