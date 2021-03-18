<?php
$id_user = $this->session->userdata('id_user');
$user = $this->Crud_model->listingOne('tbl_user', 'id_user', $id_user);
?>

<div class="jumbotron pt100 pb80">
  <div class="container">

    <div class="row">
      <div class="col-md-2">
        <img src="<?php if ($user->gambar == '') {
                    echo base_url('assets/uploads/avatar-default.png');
                  } else {
                    echo
                      base_url($user->gambar);
                  } ?>" alt="author" width="100%">

        <p>
          <br>
          <!-- Button trigger modal -->
          <button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#exampleModal">
            <i class="fa fa-edit"></i> Ubah foto
          </button>

        </p>
      </div>
      <div class="col-md-3">
        <h4><strong><?php //echo $user->nama_user 
                    ?></strong></h4>
        <h6 class="author-name"><?php //echo 'Angkatan ' . $user->angkatan 
                                ?></h6>
      </div>
    </div>

  </div>
</div>



<section id="elements-buttons">
  <div class="container">

    <div class="row">

    </div>

    <div class="row">

      <div class="col-md-10">

        <div class="buttons-tabs-centered">

          <ul class="nav nav-tabs">


            <li class="nav-link <?php if ($this->uri->segment('2') == 'dashboard') {
                                  echo 'active';
                                } ?>">
              <a href="<?= base_url('user/dashboard'); ?>" role="tab" class="control-item"><strong> Pendaftaran Nikah</strong></a>
            </li>
            <li class="nav-link <?php if ($this->uri->segment('2') == 'peminjaman') {
                                  echo 'active';
                                } ?>">
              <a href="<?= base_url('user/akun') ?>" role="tab" class="control-item"><strong>Data Akun</strong></a>

            <li class="nav-link <?php if ($this->uri->segment('2') == 'password') {
                                  echo 'active';
                                } ?>">
              <a href="<?= base_url('user/password') ?>" role="tab" class="control-item"><strong>Ubah Password</strong></a>
            </li>

          </ul>

        </div>

      </div>

    </div>
  </div>
</section>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ubah Foto</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <?= form_open_multipart('user/akun/ubahGambar') ?>
      <form action="" method="POST">
        <div class="modal-body">
          <input type="file" name="gambar" class="form-control">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
      </form>
      <? form_close() ?>
    </div>
  </div>
</div>