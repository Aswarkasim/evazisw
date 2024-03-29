<div class="flash-data" data-flashdata="<?= $this->session->flashdata('msg') ?>"></div>

<div class="row">
    <div class="col-md-10">


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

                <table class="table DataTable">
                    <thead>
                        <tr>
                            <th width="40px">No</th>
                            <th>Nama Desa</th>
                            <th>Mustahik</th>
                            <th>Rupiah</th>
                            <th>Jumlah Orang</th>
                            <th width="100px">Aksi</th>
                        </tr>
                    </thead>
                    <tbody id="targetData">
                        <?php $no = 1;
                        foreach ($penyaluran as $row) { ?>
                            <tr>
                                <td><?= $no ?></td>
                                <td><?= $row->nama_desa ?></td>
                                <td><?= $row->mustahik ?></td>
                                <td><?= 'Rp. ' . nominal($row->rupiah) ?></td>
                                <td><?= $row->jumlah_orang   ?></td>
                                <td>
                                    <!-- <button type="button" class="btn btn-success btn-xs" data-toggle="modal tooltip" data-placement="top" title="Edit" data-target="#ModalEdit<?= $row->id_penyaluran ?>">
                                        <i class="fa fa-edit"></i>Edit
                                    </button>
 -->
                                    <a href="<?= base_url($tombol['edit'] . $row->id_penyaluran) ?>" class="btn btn-success btn-xs"><i class="fa fa-edit"></i> Edit</a>
                                    <a href="<?= base_url($tombol['delete'] . $row->id_penyaluran) ?>" data-toggle="tooltip" data-placement="top" title="Hapus" class="btn btn-danger btn-xs tombol-hapus"><i class="fa fa-trash"></i> Hapus</a>
                                </td>
                            </tr>
                        <?php $no++;
                        } ?>
                    </tbody>
                </table>

            </div>
            <!-- /.box-body -->
        </div>

    </div>
</div>