<?php

$id_user = $this->session->userdata('id_user');
$role = $this->session->userdata('role');

$saran = $this->Crud_model->listingOneAll('tbl_saran', 'is_read', '0');

?>

<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">HEADER</li>

            <li class="<?php if ($this->uri->segment(2) == "dashboard") {
                            echo "active";
                        }
                        ?>"><a href="<?php echo base_url('admin/dashboard')
                                        ?>"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>

            <li class="treeview <?php if ($this->uri->segment(2) == "profil") {
                                    echo "active";
                                } ?>">
                <a href="#"><i class="fa fa-building"></i> <span>Zis</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="<?php if ($this->uri->segment(2) == "penyetoran") {
                                    echo "active";
                                } ?>"><a href="<?= base_url('admin/penyetoran') ?>">Penyetoran</a></li>

                    <li class="<?php if ($this->uri->segment(3) == "penyaluran") {
                                    echo "active";
                                } ?>"><a href="<?= base_url('admin/penyaluran') ?>">Penyaluran</a></li>

                    <li class="<?php if ($this->uri->segment(3) == "mustahik") {
                                    echo "active";
                                } ?>"><a href="<?= base_url('admin/mustahik') ?>">Mustahik</a></li>

                    <li class="<?php if ($this->uri->segment(3) == "desa") {
                                    echo "active";
                                } ?>"><a href="<?= base_url('admin/desa') ?>">Desa</a></li>
                </ul>
            </li>

            <li class="<?php if ($this->uri->segment(2) == "muzakki") {
                            echo "active";
                        }
                        ?>"><a href="<?php echo base_url('admin/muzakki')
                                        ?>"><i class="fa fa-users"></i> <span>Muzakki</span>
                </a></li>


            <li class="<?php if ($this->uri->segment(2) == "saran") {
                            echo "active";
                        }
                        ?>"><a href="<?php echo base_url('admin/saran')
                                        ?>"><i class="fa fa-ticket"></i> <span>Saran</span>
                    <span class="pull-right-container">
                        <small class="label pull-right bg-blue"><?= count($saran) ?></small>
                    </span>
                </a></li>


            <li class="treeview <?php if ($this->uri->segment(2) == "profil") {
                                    echo "active";
                                } ?>">
                <a href="#"><i class="fa fa-building"></i> <span>Profil</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="<?php if ($this->uri->segment(2) == "profil") {
                                    echo "active";
                                } ?>"><a href="<?= base_url('admin/profil') ?>">Profil</a></li>

                    <li class="<?php if ($this->uri->segment(3) == "profil") {
                                    echo "active";
                                } ?>"><a href="<?= base_url('admin/profil/visimisi') ?>">Visi & Misi</a></li>
                </ul>
            </li>




            <li class="treeview <?php if ($this->uri->segment(2) == "berita") {
                                    echo "active";
                                } ?>">
                <a href="#"><i class="fa fa-newspaper-o"></i> <span>Berita</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="<?php if ($this->uri->segment(3) == "add") {
                                    echo "active";
                                } ?>"><a href="<?= base_url('admin/berita/add') ?>">Tambah Berita</a></li>
                    <li class="<?php if ($this->uri->segment(2) == "berita") {
                                    echo "active";
                                } ?>"><a href="<?= base_url('admin/berita') ?>">List Berita</a></li>
                    <li class="<?php if ($this->uri->segment(2) == "kategori") {
                                    echo "active";
                                } ?>"><a href="<?= base_url('admin/kategori') ?>">Kategori</a></li>
                </ul>
            </li>



            <li class="treeview <?php if ($this->uri->segment(2) == "user") {
                                    echo "active";
                                } ?>">
                <a href="#"><i class="fa fa-user"></i> <span>Manajemen User</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="<?php if ($this->uri->segment(2) == "user") {
                                    echo "active";
                                } ?>"><a href="<?= base_url('admin/user') ?>">User</a></li>
                    <li class="<?php if ($this->uri->segment(2) == "admin") {
                                    echo "active";
                                } ?>"><a href="<?= base_url('admin/admin') ?>">Admin</a></li>
                </ul>
            </li>

            <li class="treeview <?php if ($this->uri->segment(2) == "konfigurasi") {
                                    echo "active";
                                } ?>">
                <a href="#"><i class="fa fa-cogs"></i> <span>Konfigurasi</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="<?php if ($this->uri->segment(3) == "index") {
                                    echo "active";
                                } ?>"><a href="<?= base_url('admin/konfigurasi/index') ?>">General</a></li>


                    <li class="<?php if ($this->uri->segment(3) == "banner") {
                                    echo "active";
                                } ?>"><a href="<?= base_url('admin/konfigurasi/banner') ?>">Banner</a></li>
                </ul>

        </ul>
        <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

    <!-- Main content -->
    <section class="content container-fluid">