<button type="button" class="btn btn-warning btn-sx" data-toggle="modal" data-target="#modal-default">
    <i class="fa fa-plus"></i>Tambah
</button>
<?= form_open(base_url($tombol['add'])) ?>
<div class="modal fade" id="modal-default">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Tambah Penyetoran</h4>
            </div>
            <div class="modal-body">


                <div class="form-group">
                    <div class="row">
                        <div class="col-md-3">
                            <label for="" class="pull-right">Tanggal</label>
                        </div>
                        <div class="col-md-9">
                            <input type="date" class="form-control" placeholder="Tanggal" name="tgl_zis" required>
                        </div>
                    </div>
                </div>



                <div class="form-group">
                    <div class="row">
                        <div class="col-md-3">
                            <label for="" class="pull-right">Nama Muzakki</label>
                        </div>
                        <div class="col-md-9">
                            <select required name="id_muzakki" id="" class="form-control select2" style="width: 100%;">
                                <option value="">-- Muzakki --</option>
                                <?php foreach ($muzakki as $row) { ?>
                                    <option value="<?= $row->id_muzakki; ?>"><?= $row->nama_muzakki; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col-md-3">
                            <label for="" class="pull-right">Jenis Zis</label>
                        </div>
                        <div class="col-md-9">
                            <select required name="jenis_zis" id="" class="form-control">
                                <option value="">-- Jenis Zis --</option>
                                <option value="Zakat Fitrah">Zakat Fitrah</option>
                                <option value="Zakat Mal">Zakat Mal</option>
                                <option value="Infaq">Infaq</option>
                                <option value="Sedekah">Sedekah</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col-md-3">
                            <label for="" class="pull-right">Jumlah</label>
                        </div>
                        <div class="col-md-9">
                            <input type="number" class="form-control" placeholder="Jumlah" name="jumlah" required>
                        </div>
                    </div>
                </div>


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<?= form_close() ?>
<!-- /.modal -->