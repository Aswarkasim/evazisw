<div class="flash-data" data-flashdata="<?= $this->session->flashdata('msg') ?>"></div>



<div class="row">
    <div class="col-md-12">


        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Manajemen Zis</h3>
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
                                <th>Nama Muzakki</th>
                                <th>Jenis Zis</th>
                                <th>Jumlah</th>
                                <th width="100px">Aksi</th>
                            </tr>

                        </thead>

                        <tbody id="targetData">

                            <?php $no = 1;
                            foreach ($penyetoran as $row) { ?>
                                <tr>
                                    <td><?= $no++; ?></td>
                                    <td><?= $row->nama_muzakki; ?></td>
                                    <td><?= $row->jenis_penyetoran; ?></td>
                                    <td><?= 'Rp. ' . nominal($row->jumlah); ?></td>


                                    <td>
                                        <a href="<?= base_url('admin/penyetoran/edit_page/' . $row->id_penyetoran); ?>" class="btn btn-success btn-xs">
                                            <i class="fa fa-edit"></i>
                                        </a>

                                        <!-- <a href="<?= base_url($tombol['edit']) ?>" class="btn btn-success btn-xs"><i class="fa fa-edit"></i> Edit</a> -->
                                        <a href="<?= base_url($tombol['delete'] . $row->id_penyetoran) ?>" data-toggle="tooltip" data-placement="top" title="Hapus" class="btn btn-danger btn-xs tombol-hapus"><i class="fa fa-trash"></i></a>
                                    </td>

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