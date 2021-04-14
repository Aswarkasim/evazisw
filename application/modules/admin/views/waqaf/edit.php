<div class="modal fade" id="ModalEdit<?= $row->id_waqaf ?>">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Edit Penyaluran</h4>
            </div>

            <?= form_open(base_url($tombol['edit'] . '/' . $row->id_waqaf)) ?>
            <div class="modal-body">

                <div class="form-group">
                    <div class="row">
                        <div class="col-md-3">
                            <label for="" class="pull-right">Nomor</label>
                        </div>
                        <div class="col-md-9">
                            <input type="text" class="form-control" placeholder="Nomor" value="<?= $row->nomor; ?>" name="nomor" required>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col-md-3">
                            <label for="" class="pull-right">Tanggal</label>
                        </div>
                        <div class="col-md-9">
                            <input type="date" class="form-control" placeholder="Tanggal" value="<?= $row->tgl_waqaf; ?>" name="tgl_waqaf" required>
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
                                <?php foreach ($desa as $d) { ?>
                                    <option value="<?= $d->id_desa; ?>" <?= $d->id_desa == $row->id_desa ? 'selected' : ''; ?>><?= $d->nama_desa; ?></option>
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
                            <input type="text" class="form-control" placeholder="Lokasi" value="<?= $row->lokasi; ?>" name="lokasi" required>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col-md-3">
                            <label for="" class="pull-right">Luas</label>
                        </div>
                        <div class="col-md-9">
                            <input type="text" class="form-control" placeholder="Luas" value="<?= $row->luas; ?>" name="luas" required>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col-md-3">
                            <label for="" class="pull-right">Penggunaan</label>
                        </div>
                        <div class="col-md-9">
                            <input type="text" class="form-control" placeholder="Penggunaan" value="<?= $row->penggunaan; ?>" name="penggunaan" required>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col-md-3">
                            <label for="" class="pull-right">Wakif</label>
                        </div>
                        <div class="col-md-9">
                            <input type="text" class="form-control" placeholder="Wakif" name="wakif" value="<?= $row->wakif; ?>" required>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col-md-3">
                            <label for="" class="pull-right">Nadzir</label>
                        </div>
                        <div class="col-md-9">
                            <input type="text" class="form-control" placeholder="Nadzir" value="<?= $row->nadzir; ?>" name="nadzir" required>
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