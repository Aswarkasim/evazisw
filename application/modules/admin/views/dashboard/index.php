<!-- Begin Page Content -->
<div class="row">
    <div class="col-lg-12">
        <i class="fa fa-home fa-3x">Beranda</i><br>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="alert alert-success">
            <p>
                <i class="fa fa-user"></i>
                Selamat datang <?= $user->nama_admin ?> diaplikasi KUA kecamatan sendana. Download panduan penggunaan <a href="<?= base_url('admin/dashboard/panduan') ?>">di sini <i class="fa fa-download"></i></a>
            </p>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-aqua">
            <div class="inner">
                <h3><?= count($berita) ?></h3>

                <p>Berita</p>
            </div>
            <div class="icon">
                <i class="ion ion-bag"></i>
            </div>
            <a href="<?= base_url('admin/berita') ?>" class="small-box-footer">Lihat Selengkapnya <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-green">
            <div class="inner">
                <h3><?= count($jadwal) ?></h3>

                <p>Jadwal Pernikahan</p>
            </div>
            <div class="icon">
                <i class="fa fa-download"></i>
            </div>
            <a href="<?= base_url('admin/jadwal') ?>" class="small-box-footer">Lihat Selengkapnya <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-yellow">
            <div class="inner">
                <h3><?= count($karyawan) ?></h3>

                <p>Karyawan</p>
            </div>
            <div class="icon">
                <i class="fa fa-upload"></i>
            </div>
            <a href="<?= base_url('admin/karyawan') ?>" class="small-box-footer">Lihat Selengkapnya <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-red">
            <div class="inner">
                <h3><?= count($dataUser) ?></h3>

                <p>User</p>
            </div>
            <div class="icon">
                <i class="fa fa-user"></i>
            </div>
            <a href="<?= base_url('admin/user') ?>" class="small-box-footer">Lihat Selengkapnya <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <!-- ./col -->






</div>
<!-- /.container-fluid -->