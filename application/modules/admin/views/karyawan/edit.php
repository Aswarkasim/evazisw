<div class="modal fade" id="ModalEdit<?= $row->id_karyawan ?>">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Edit Karyawan</h4>
            </div>
            <?= form_open(base_url($tombol['edit'] . '/' . $row->id_karyawan)) ?>
            <div class="modal-body">
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-3">
                            <label for="" class="pull-right">Nama Karyawan</label>
                        </div>
                        <div class="col-md-9">
                            <input type="text" placeholder="Karyawan" class="form-control" name="nama_karyawan" value="<?= $row->nama_karyawan; ?>" required>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col-md-3">
                            <label for="" class="pull-right">Tempat Lahir</label>
                        </div>
                        <div class="col-md-9">
                            <input type="text" placeholder="Tempat Lahir" class="form-control" value="<?= $row->tempat_lahir; ?>" name="tempat_lahir" required>
                        </div>
                    </div>
                </div>


                <div class="form-group">
                    <div class="row">
                        <div class="col-md-3">
                            <label for="" class="pull-right">Tanggal Lahir</label>
                        </div>
                        <div class="col-md-9">
                            <input type="date" placeholder="Tanggal Lahir" class="form-control" value="<?= $row->tanggal_lahir; ?>" name="tanggal_lahir" required>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col-md-3">
                            <label for="" class="pull-right">Pangkat</label>
                        </div>
                        <div class="col-md-9">
                            <input type="text" placeholder="Pangkat" class="form-control" value=" <?= $row->pangkat; ?>" name=" pangkat" required>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col-md-3">
                            <label for="" class="pull-right">Golongan</label>
                        </div>
                        <div class="col-md-9">
                            <input type="text" placeholder="Golongan" class="form-control" value="<?= $row->golongan; ?>" name=" golongan" required>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col-md-3">
                            <label for="" class="pull-right">Pendidikan Terakhir</label>
                        </div>
                        <div class="col-md-9">
                            <input type="text" placeholder="Pendidikan Terakhir" value=" <?= $row->pendidikan_terakhir; ?>" class=" form-control" name="pendidikan_terakhir" required>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col-md-3">
                            <label for="" class="pull-right">jabatan</label>
                        </div>
                        <div class="col-md-9">
                            <select name="id_struktur" class="form-control">
                                <option value="">-- Jabatan --</option>
                                <?php foreach ($struktur as $d) { ?>
                                    <option value="<?= $d->id_struktur; ?>" <?php if ($row->id_struktur == $d->id_struktur) {
                                                                                echo "selected";
                                                                            } ?>><?= $d->nama_struktur; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col-md-3">
                            <label for="" class="pull-right">Alamat</label>
                        </div>
                        <div class="col-md-9">
                            <input type="text" placeholder="Alamat" value="<?= $row->alamat; ?>" class="form-control" name="alamat" required>
                        </div>
                    </div>
                </div>


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </div>
        <?= form_close() ?>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->