<div class="modal fade" id="ModalEdit<?= $row->id_penyaluran ?>">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Edit Penyaluran</h4>
            </div>
            <?= form_open(base_url($tombol['edit'] . $row->id_penyaluran)) ?>
            <div class="modal-body">
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
                            <label for="" class="pull-right">Mustahik</label>
                        </div>
                        <div class="col-md-9">
                            <select required name="mustahik" id="" class="form-control">
                                <option value="">-- Mustahik --</option>
                                <option value="Miskin" <?= $row->mustahik == 'Miskin' ? 'selected' : ''; ?>>Fakir/Miskin</option>
                                <option value="Amil" <?= $row->mustahik == 'Amil' ? 'selected' : ''; ?>>Amil</option>
                                <option value="Muallaf" <?= $row->mustahik == 'Muallaf' ? 'selected' : ''; ?>>Muallaf</option>
                                <option value="Fisabilillah" <?= $row->mustahik == 'Fisabilillah' ? 'selected' : ''; ?>>Fisabilillah</option>
                                <option value="Ibnu Sabil" <?= $row->mustahik == 'Ibnu Sabil' ? 'selected' : ''; ?>>Ibnu Sabil</option>
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
                            <input type="number" class="form-control" placeholder="Rupiah" value="<?= $row->rupiah; ?>" name=" rupiah" required>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col-md-3">
                            <label for="" class="pull-right">Jumlah Orang</label>
                        </div>
                        <div class="col-md-9">
                            <input type="number" class="form-control" placeholder="Jumlah Orang" value="<?= $row->jumlah_orang; ?>" name="jumlah_orang" required>
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