<div class="row">
    <div class="col-md-6">
        <div class="box">
            <div class="box-body">

                <form action="<?= base_url('admin/penyetoran/edit/' . $zis->id_penyetoran) ?>" method="POST">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3">
                                <label for="" class="pull-right">Nama Muzakki</label>
                            </div>
                            <div class="col-md-9">
                                <select required name="id_muzakki" id="" class="form-control select2" style="width: 100%;">
                                    <option value="">-- Muzakki --</option>
                                    <?php foreach ($muzakki as $d) { ?>
                                        <option value="<?= $d->id_muzakki; ?>" <?= $d->id_muzakki == $zis->id_muzakki ? 'selected' : ''; ?>><?= $d->nama_muzakki; ?></option>
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
                                    <option value="Zakat Fitrah" <?= $zis->jenis_penyetoran == 'Zakat Fitrah' ? 'selected' : ''; ?>>Zakat Fitrah</option>
                                    <option value="Zakat Mal" <?= $zis->jenis_penyetoran == 'Zakat Mal' ? 'selected' : ''; ?>>Zakat Mal</option>
                                    <option value="Infaq" <?= $zis->jenis_penyetoran == 'Infaq' ? 'selected' : ''; ?>>Infaq</option>
                                    <option value="Sedekah" <?= $zis->jenis_penyetoran == 'Sedekah' ? 'selected' : ''; ?>>Sedekah</option>
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
                                <input type="number" class="form-control" placeholder="Jumlah" value="<?= $zis->jumlah; ?>" name="jumlah" required>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3">
                            </div>
                            <div class="col-md-9">
                                <a href="<?= base_url('admin/penyetoran/index/sedekah'); ?>" class="btn btn-warning"><i class="fa fa-arrow-left"></i> Kembali</a>
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </div>
                    </div>

                </form>

            </div>
        </div>
    </div>
</div>