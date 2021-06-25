<div class="modal fade" id="ModalEdit<?= $row->id_penyetoran ?>">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Edit Penyaluran</h4>
            </div>

            <?= form_open(base_url($tombol['edit'] . $row->id_penyetoran)) ?>
            <div class="modal-body">

                <div class="form-group">
                    <div class="row">
                        <div class="col-md-3">
                            <label for="" class="pull-right">Nama Muzakki</label>
                        </div>
                        <div class="col-md-9">
                            <select required name="id_muzakki" id="" class="form-control select2" style="width: 100%;">
                                <option value="">-- Muzakki --</option>
                                <?php foreach ($muzakki as $d) { ?>
                                    <option value="<?= $d->id_muzakki; ?>" <?= $d->id_muzakki == $row->id_muzakki ? 'selected' : ''; ?>><?= $d->nama_muzakki; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col-md-3">
                            <label for="" class="pull-right">Jenis Penyetoran</label>
                        </div>
                        <div class="col-md-9">
                            <select required name="jenis_penyetoran" id="" class="form-control">
                                <option value="">-- Jenis Penyetoran --</option>
                                <option value="Zakat Fitrah" <?= $row->jenis_penyetoran == 'Zakat Fitrah' ? 'selected' : ''; ?>>Zakat Fitrah</option>
                                <option value="Zakat Mal" <?= $row->jenis_penyetoran == 'Zakat Mal' ? 'selected' : ''; ?>>Zakat Mal</option>
                                <option value="Infaq" <?= $row->jenis_penyetoran == 'Infaq' ? 'selected' : ''; ?>>Infaq</option>
                                <option value="Sedekah" <?= $row->jenis_penyetoran == 'Sedekah' ? 'selected' : ''; ?>>Sedekah</option>
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
                            <input type="number" class="form-control" placeholder="Jumlah" value="<?= $row->jumlah; ?>" name="jumlah" required>
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