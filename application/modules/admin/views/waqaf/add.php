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
                <h4 class="modal-title">Tambah Desa</h4>
            </div>
            <div class="modal-body">


                <div class="form-group">
                    <div class="row">
                        <div class="col-md-3">
                            <label for="" class="pull-right">Nomor</label>
                        </div>
                        <div class="col-md-9">
                            <input type="text" class="form-control" placeholder="Nomor" name="nomor" required>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col-md-3">
                            <label for="" class="pull-right">Tanggal</label>
                        </div>
                        <div class="col-md-9">
                            <input type="date" class="form-control" placeholder="Tanggal" name="tgl_waqaf" required>
                        </div>
                    </div>
                </div>



                <div class="form-group">
                    <div class="row">
                        <div class="col-md-3">
                            <label for="" class="pull-right">Nama Desa</label>
                        </div>
                        <div class="col-md-9">
                            <select required name="id_desa" id="" class="form-control select2" style="width: 100%;">
                                <option value="">-- Desa --</option>
                                <?php foreach ($desa as $row) { ?>
                                    <option value="<?= $row->id_desa; ?>"><?= $row->nama_desa; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col-md-3">
                            <label for="" class="pull-right">Lokasi</label>
                        </div>
                        <div class="col-md-9">
                            <input type="text" class="form-control" placeholder="Lokasi" name="lokasi" required>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col-md-3">
                            <label for="" class="pull-right">Luas</label>
                        </div>
                        <div class="col-md-9">
                            <input type="text" class="form-control" placeholder="Luas" name="luas" required>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col-md-3">
                            <label for="" class="pull-right">Penggunaan</label>
                        </div>
                        <div class="col-md-9">
                            <input type="text" class="form-control" placeholder="Penggunaan" name="penggunaan" required>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col-md-3">
                            <label for="" class="pull-right">Waqif</label>
                        </div>
                        <div class="col-md-9">
                            <input type="text" class="form-control" placeholder="Waqif" name="wakif" required>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col-md-3">
                            <label for="" class="pull-right">Nadzir</label>
                        </div>
                        <div class="col-md-9">
                            <input type="text" class="form-control" placeholder="Nadzir" name="nadzir" required>
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