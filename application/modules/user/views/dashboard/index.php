<?php $this->load->view('user/nav'); ?>

<div class="container">
  <?php if (isset($data)) {
    if ($data->is_valid == 1) { ?>
      <div class="alert alert-success"><i class="fa fa-check"></i> Data anda telah diterima</div>
    <?php } else { ?>
      <div class="alert alert-warning"><i class="fa fa-clock-o"></i> Data anda masih dalam proses validasi</div>
    <?php } ?>

    <?php if (isset($data)) {
      if ($jadwal) { ?>
        <div class="alert alert-success"><i class="fa fa-check"></i> Jadwal akad nikah anda telah terbit, dan penghulu yang menangani adalah bapak <?= $jadwal->penghulu; ?></div>
      <?php }
    } else { ?>
      <div class="alert alert-warning"><i class="fa fa-clock-o"></i> Jadwal akad nikah anda belum terbit </div>
  <?php }
  } ?>

</div>