<div class="flash-data" data-flashdata="<?= $this->session->flashdata('msg') ?>"></div>



<div class="row">
    <div class="col-md-12">


        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Manajemen Desa</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">

                <p>
                    <!-- <a href="<?= base_url($tombol['add']) ?>" class="btn btn-sm btn-primary"><i class="fa fa-plus"></i> Tambah</a> -->
                    <?php include('add.php') ?>
                </p>

                <div class="table-responsive">
                    <table class="table DataTable">

                        <thead>

                            <tr class="bg-primary">
                                <th width="40px">No</th>
                                <th>Nama Desa</th>
                                <th>Lokasi</th>
                                <th>Luas</th>
                                <th>Penggunaan</th>
                                <th>Wakif</th>
                                <th>Nadzir</th>
                                <th>Nomor</th>
                                <th>Tanggal</th>
                                <th width="100px">Aksi</th>
                            </tr>

                        </thead>

                        <tbody id="targetData">

                            <?php $no = 1;
                            foreach ($waqaf as $row) { ?>
                                <tr>
                                    <td><?= $no++; ?></td>
                                    <td><?= $row->nama_desa; ?></td>
                                    <td><?= $row->lokasi; ?></td>
                                    <td><?= $row->luas . ' m'; ?></td>
                                    <td><?= $row->penggunaan; ?></td>
                                    <td><?= $row->wakif; ?></td>
                                    <td><?= $row->nadzir; ?></td>
                                    <td><?= $row->nomor; ?></td>
                                    <td><?= $row->tgl_waqaf; ?></td>


                                    <td>
                                        <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#ModalEdit<?= $row->id_waqaf ?>">
                                            <i class="fa fa-edit"></i>
                                        </button>

                                        <!-- <a href="<?= base_url($tombol['edit']) ?>" class="btn btn-success btn-xs"><i class="fa fa-edit"></i> Edit</a> -->
                                        <a href="<?= base_url($tombol['delete'] . $row->id_waqaf) ?>" class="btn btn-danger btn-xs tombol-hapus"><i class="fa fa-trash"></i></a>
                                    </td>
                                    <?php include('edit.php')
                                    ?>
                                    </td>
                                </tr>
                            <?php } ?>

                        </tbody>
                    </table>

                </div>

            </div>
            <!-- /.box-body -->
        </div>

    </div>
</div>