<div class="container pt-5">

  <div class="row">
    <div class="col-md-8">
      <center>
        <h3><strong>Struktur Organisasi</strong></h3>
      </center>
      <table class="table">
        <?php foreach ($struktur as $row) { ?>
          <tr>
            <td width="300px" align="right"><?= $row->nama_struktur; ?></td>
            <td>
              <?php
              $karyawan = $this->Crud_model->listingOneAll('tbl_karyawan', 'id_struktur', $row->id_struktur);
              foreach ($karyawan as $k) {
              ?>
                <table>
                  <tr>
                    <td><?= $k->nama_karyawan; ?></td>
                  </tr>
                </table>

              <?php } ?>
            </td>
          </tr>
        <?php } ?>
      </table>
    </div>

    <div class="col-md-4">

      <?php $this->load->view('home/berita/cari') ?>
      <?php $this->load->view('home/berita/kategori') ?>


    </div>
  </div>
</div>