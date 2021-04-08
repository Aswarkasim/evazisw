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
                            <label for="" class="pull-right">Mustahik</label>
                        </div>
                        <div class="col-md-9">
                            <select required name="mustahik" id="" class="form-control">
                                <option value="">-- Mustahik --</option>
                                <option value="Miskin">Fakir/Miskin</option>
                                <option value="Amil">Amil</option>
                                <option value="Muallaf">Muallaf</option>
                                <option value="Fisabilillah">Fisabilillah</option>
                                <option value="Ibnu Sabil">Ibnu Sabil</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col-md-3">
                            <label for="" class="pull-right">Rupiah</label>
                        </div>
                        <div class="col-md-9">
                            <input type="number" class="form-control" placeholder="Rupiah" name="rupiah" required>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col-md-3">
                            <label for="" class="pull-right">Jumlah Orang</label>
                        </div>
                        <div class="col-md-9">
                            <input type="number" class="form-control" placeholder="Jumlah Orang" name="jumlah_orang" required>
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