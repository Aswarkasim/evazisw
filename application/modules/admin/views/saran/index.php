<?php
$this->load->helper('string');

?>
<div class="col-md-12">
  <div class="box box-primary">
    <div class="box-header with-border">
      <h3 class="box-title"><strong>Surat Masuk</strong></h3>

      <div class="box-tools pull-right">
        <!-- /.box-tools -->
      </div>
      <!-- /.box-header -->
      <div class="box-body no-padding">
        <br>
        <div class="row">
          <div class="col-md-8">
            <!-- <a href="<?= base_url('admin/saran'); ?>" class="btn btn-default btn-sm"><i class="fa fa-refresh"></i></a> -->
          </div>
          <!-- <div class="col-md-4">
            <form action="<?= base_url('admin/saran/cari'); ?>" method="post">
              <div class="input-group margin">
                <input type="text" name="where" class="form-control" placeholder="cari">
                <span class="input-group-btn">
                  <button type="submit" class="btn btn-primary btn-flat"><i class="fa fa-search"></i></button>
                </span>
              </div>
            </form>
          </div> -->
        </div>

        <div class="row">
          <div class="col-md-12">
            <div class="">

              <style>
                .read-data {
                  color: darkgray;
                }

                .not-read-data {
                  color: #f4c000;
                }
              </style>


              <div class="table-responsive">
                <table class="table DataTable">
                  <thead>
                    <tr>
                      <td width="20px">#</td>
                      <td width="200px">#</td>
                      <td>#</td>
                      <td width="200px">#</td>
                      <td width="20px">#</td>
                    </tr>
                  </thead>
                  <tbody>

                    <?php foreach ($saran as $row) { ?>
                      <tr>
                        <td class=""><a href="#"><i class="fa <?php if ($row->is_read == '1') {
                                                                echo 'fa-envelope-open read-data';
                                                              } else {
                                                                echo 'fa-envelope not-read-data';
                                                              } ?>"></i></a></td>
                        <td class=""><a href="<?= base_url('admin/saran/detail/' . $row->id_saran); ?>"><?= $row->namalengkap; ?></a></td>
                        <td class=""><?= character_limiter($row->isi_saran, 50); ?></td>
                        <td class=""><?= format_indo($row->date_created); ?></td>
                        <td><a href="<?= base_url('admin/saran/delete/' . $row->id_saran); ?>" class="tombol-hapus"><i class="fa fa-trash"></i></a></td>
                      </tr>
                    <?php } ?>
                  </tbody>
                </table>
              </div>

            </div>
          </div>
        </div>

      </div>
      <!-- /.mail-box-messages -->
    </div>

  </div>
  <!-- /. box -->
</div>