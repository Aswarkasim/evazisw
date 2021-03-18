<section class="pt80 pb90 bg-grey">
  <div class="container">
    <div class="row text-center">

      <div class="col-md-12 text-center pb-5 pt-5">
        <h2>Jadwal<br><strong>Pernikahan</strong></h2>
      </div>

    </div>

    <div class="row">
      <?php foreach ($jadwal as $row) { ?>
        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <div class="card-body">
              <center>
                <h5><strong><?= $row->nama_pria; ?></strong></h5>
                <h5><strong>&</strong></h5>
                <h5><strong><?= $row->nama_wanita; ?></strong></h5>
              </center>
              <table class="table">
                <tr>
                  <td>Tempat</td>
                  <td>: <?= $row->tempat; ?></td>
                </tr>
                <tr>
                  <td>Tanggal</td>
                  <td>: <?= $row->tanggal; ?></td>
                </tr>
                <tr>
                  <td>Jam</td>
                  <td>: <?= $row->jam; ?> WITA</td>
                </tr>
              </table>
              <hr>
              <div class="d-flex justify-content-between align-items-center">

              </div>
            </div>
          </div>
        </div>
      <?php } ?>

    </div>

  </div>
</section>