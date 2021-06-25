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
                <h4 class="modal-title">Tambah Kategori</h4>
            </div>
            <div class="modal-body">

             <div class="form-group">
                    <div class="row">
                        <div class="col-md-3">
                            <label for="" class="pull-right">NIK</label>
                        </div>
                        <div class="col-md-9">
                            <input type="text" class="form-control" placeholder="NIK" name="nik" required>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col-md-3">
                            <label for="" class="pull-right">Nama Muzakki</label>
                        </div>
                        <div class="col-md-9">
                            <input type="text" class="form-control" placeholder="Nama Muzakki" name="nama_muzakki" required>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-3">
                            <label for="" class="pull-right">Jenis Kelamin</label>
                        </div>
                        <div class="col-md-9">
                            <select name="jenis_kelamin" class="form-control" id="">
                                <option value="">-- Jenis Kelamin --</option>
                                <option value="Laki-laki">Laki-laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col-md-3">
                            <label for="" class="pull-right">Desa</label>
                        </div>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="desa" placeholder="Desa" required>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col-md-3">
                            <label for="" class="pull-right">Dusun</label>
                        </div>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="dusun" placeholder="Dusun" required>
                        </div>
                    </div>
                </div>

                 <div class="form-group">
                    <div class="row">
                        <div class="col-md-3">
                            <label for="" class="pull-right">Alamat Lengkap</label>
                        </div>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="alamat"  placeholder="Alamat" required>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col-md-3">
                            <label for="" class="pull-right">Pekerjaan</label>
                        </div>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="pekerjaan" placeholder="Pekerjaan" required>
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