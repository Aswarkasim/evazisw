<div class="flash-data" data-flashdata="<?= $this->session->flashdata('msg') ?>"></div>

<div class="row">
    <div class="col-md-6">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title"><?= $title ?></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">

                <?php
                echo validation_errors('<div class="alert alert-warning"><i class="fa fa-warning"></i> ', '</div>');
                ?>

                <form action="<?= base_url($edit . $user->id_user) ?>" method="post">

                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3">
                                <label for="" class="pull-right">Nama</label>
                            </div>
                            <div class="col-md-9">
                                <input value="<?= $user->username ?>" type="text" name="username" class="form-control">
                            </div>
                        </div>
                    </div>


                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3">
                                <label for="" class="pull-right">Username</label>
                            </div>
                            <div class="col-md-9">
                                <input type="text" name="username" placeholder="Username" value="<?= $user->username ?>" class="form-control">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3">
                                <label for="" class="pull-right">Nama Lengkap</label>
                            </div>
                            <div class="col-md-9">
                                <input type="text" name="namalengkap" placeholder="Nama Lengkap" value="<?= $user->namalengkap ?>" class="form-control">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3">
                                <label for="" class="pull-right">No. KTP</label>
                            </div>
                            <div class="col-md-9">
                                <input type="text" name="no_ktp" placeholder="No. KTP" value="<?= $user->no_ktp ?>" class="form-control">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3">
                                <label for="" class="pull-right">Tempat Lahir</label>
                            </div>
                            <div class="col-md-9">
                                <input type="text" name="tempat_lahir" placeholder="Tempat Lahir" value="<?= $user->tempat_lahir ?>" class="form-control">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3">
                                <label for="" class="pull-right">Tanggal Lahir</label>
                            </div>
                            <div class="col-md-9">
                                <input type="date" name="tanggal_lahir" placeholder="Tanggal Lahir" value="<?= $user->tanggal_lahir ?>" class="form-control">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3">
                                <label for="" class="pull-right">Alamat</label>
                            </div>
                            <div class="col-md-9">
                                <input type="text" name="alamat" placeholder="Alamat" value="<?= $user->alamat ?>" class="form-control">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3">
                                <label for="" class="pull-right">Agama</label>
                            </div>
                            <div class="col-md-9">
                                <input type="text" name="agama" placeholder="Agama" value="<?= $user->agama ?>" class="form-control">
                            </div>
                        </div>
                    </div>


                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3">
                                <label for="" class="pull-right">Jenis Kelamin</label>
                            </div>
                            <div class="col-md-9">
                                <select name="jenis_kelamin" class="form-control">
                                    <option value="">--Jenis Kelamin--</option>
                                    <option value="Laki-laki" <?php if ($user->jenis_kelamin == "Laki-laki") {
                                                                    echo "selected";
                                                                } ?>>Laki-laki</option>
                                    <option value="Perempuan" <?php if ($user->jenis_kelamin == "Perempuan") {
                                                                    echo "selected";
                                                                } ?>>Perempuan</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3">
                                <label for="" class="pull-right">No. Hp</label>
                            </div>
                            <div class="col-md-9">
                                <input type="text" name="no_hp" placeholder="No. Hp" value="<?= $user->no_hp ?>" class="form-control">
                            </div>
                        </div>
                    </div>



                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3">
                                <label for="" class="pull-right">Status</label>
                            </div>
                            <div class="col-md-9">
                                <select name="is_aktif" class="form-control">
                                    <option value="none">--Status--</option>
                                    <option value="0" <?php if ($user->is_active == "0") {
                                                            echo "selected";
                                                        } ?>>Tidak Aktif</option>
                                    <option value="1" <?php if ($user->is_active == "1") {
                                                            echo "selected";
                                                        } ?>>Aktif</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3">
                                <label for="" class="pull-right">Password</label>
                            </div>
                            <div class="col-md-9">
                                <input type="password" placeholder="Password" name="password" class="form-control">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3">
                                <label for="" class="pull-right">Retype Password</label>
                            </div>
                            <div class="col-md-9">
                                <input type="password" placeholder="Ketik ulang password" name="re_password" class="form-control">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3">

                            </div>
                            <div class="col-md-9">
                                <a href="<?= base_url($back) ?>" class="btn btn-warning"><i class="fa fa-arrow-left"></i> Kembali</a>
                                <button type="submit" class="btn btn-primary">Tambah</button>
                            </div>
                        </div>
                    </div>

                </form>



            </div>
            <!-- /.box-body -->
        </div>
    </div>
</div>