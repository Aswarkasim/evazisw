<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-4">


      <h3 class="mt-3"><strong>Cetak Laporan ZISW</strong></h3>
      <form action="<?= base_url('admin/laporan/laporan'); ?>" target="_blank" method="post">
        <input type="hidden" value="aa" name="bantu">
        <div class="form-group">
          <label for="">Pilih Laporan</label>
          <select required name="zis" class="form-control" id="">
            <option value="">-- Pilih --</option>
            <option value="Zakat">Zakat</option>
            <option value="Infaq">Infaq</option>
            <option value="Sedekah">Sedekah</option>
            <option value="Waqaf">Waqaf</option>
          </select>
        </div>

        <div class="form-group">
          <label for="">Transaksi</label>
          <select required name="transaksi" class="form-control" id="">
            <option value="">-- Pilih --</option>
            <option value="penyetoran">Penyetoran</option>
            <option value="penyaluran">Penyaluran</option>
          </select>
        </div>

        <div class="form-group">
          <label for="">Dari</label>
          <input type="date" class="form-control" name="dari">
        </div>

        <div class="form-group">
          <label for="">Sampai</label>
          <input type="date" class="form-control" name="sampai">
        </div>

        <div class="form-group">
          <button type="submit" name="cetak" class="btn btn-warning"><i class="fa fa-print"></i> Cetak</button>
          <!-- <button type="submit" name="excel" class="btn btn-success"><i class="fa fa-file-excel-o"></i> Export Excel</button> -->
        </div>

      </form>


    </div>
  </div>
</div>