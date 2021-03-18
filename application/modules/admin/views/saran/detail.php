<div class="col-md-9">
  <div class="box box-primary">
    <div class="box-header with-border">
      <a href="<?= base_url('admin/saran'); ?>" class="btn btn-default"><i class="fa fa-arrow-left"></i> Kembali</a><br><br>
      <h3 class="box-title">Pesan dari <?= $saran->namalengkap; ?></h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body no-padding">
      <div class="mailbox-read-info">
        <h3> <?= $saran->namalengkap; ?></h3>
        <span class="mailbox-read-time pull-right"><?= format_indo($saran->date_created) ?></span></h5>
      </div>

      <div class="mailbox-read-message">
        <?= $saran->isi_saran; ?>
      </div>
      <!-- /.mailbox-read-message -->
    </div>

    <!-- /.box-footer -->
    <div class="box-footer">
      <!-- <div class="pull-right">
        <button type="button" class="btn btn-default"><i class="fa fa-reply"></i> Reply</button>
        <button type="button" class="btn btn-default"><i class="fa fa-share"></i> Forward</button>
      </div> -->
      <a href="<?= base_url('admin/saran/delete/' . $saran->id_saran); ?>" class="btn btn-default tombol-hapus"><i class="fa fa-trash-o"></i> Hapus</a>
      <!-- <button type="button" class="btn btn-default"><i class="fa fa-print"></i> Print</button> -->
    </div>
    <!-- /.box-footer -->
  </div>
  <!-- /. box -->
</div>