<div class="row">
    <div class="col-md-6">
        <div class="box">
            <div class="box-body">
                <!-- <div class="col-md-3">
                    <label for="" class="pull-right">Nama Muzakki</label>
                </div> -->
                <?= form_open(base_url('admin/penyaluran/edit/' . $zis->id_penyaluran)) ?>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-3">
                            <label for="" class="pull-right">Nama Desa</label>
                        </div>
                        <div class="col-md-9">
                            <select required name="id_desa" id="" class="form-control select2" style="width: 100%;">
                                <option value="">-- Desa --</option>
                                <?php foreach ($desa as $d) { ?>
                                    <option value="<?= $d->id_desa; ?>" <?= $d->id_desa == $zis->id_desa ? 'selected' : ''; ?>><?= $d->nama_desa; ?></option>
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
                                <option value="Miskin" <?= $zis->mustahik == 'Miskin' ? 'selected' : ''; ?>>Fakir/Miskin</option>
                                <option value="Amil" <?= $zis->mustahik == 'Amil' ? 'selected' : ''; ?>>Amil</option>
                                <option value="Muallaf" <?= $zis->mustahik == 'Muallaf' ? 'selected' : ''; ?>>Muallaf</option>
                                <option value="Fisabilillah" <?= $zis->mustahik == 'Fisabilillah' ? 'selected' : ''; ?>>Fisabilillah</option>
                                <option value="Ibnu Sabil" <?= $zis->mustahik == 'Ibnu Sabil' ? 'selected' : ''; ?>>Ibnu Sabil</option>
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
                            <input type="number" class="form-control" placeholder="Rupiah" value="<?= $zis->rupiah; ?>" name=" rupiah" required>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col-md-3">
                            <label for="" class="pull-right">Jumlah Orang</label>
                        </div>
                        <div class="col-md-9">
                            <input type="number" class="form-control" placeholder="Jumlah Orang" value="<?= $zis->jumlah_orang; ?>" name="jumlah_orang" required>
                        </div>
                    </div>
                </div>


                <div class="form-group">
                    <div class="row">
                        <div class="col-md-3">
                        </div>
                        <div class="col-md-9">
                            <a href="<?= base_url('admin/penyaluran/index/infaq'); ?>" class="btn btn-warning"><i class="fa fa-arrow-left"></i> Kembali</a>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </div>
                </div>

            </div>

            <?= form_close() ?>

        </div>
    </div>
</div>
</div>