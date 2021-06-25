<div class="flash-data" data-flashdata="<?= $this->session->flashdata('msg') ?>"></div>

<style>
    .rp {
        font-size: 10px;
    }

    .nama-desa {
        font-size: 12px;
    }
</style>

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

                    <table class="table table-bordered table-responsive DataTable">

                        <thead>

                            <tr class="bg-primary">
                                <th width="40px" rowspan="3">No</th>
                                <th rowspan="3">Nama Desa</th>
                                <th colspan="10" class="text-center">Penyaluran</th>
                                <th width="100px">Aksi</th>
                            </tr>

                        </thead>

                        <tbody id="targetData">
                            <strong>
                                <tr class="bg-success">
                                    <td rowspan="2"></td>
                                    <td rowspan="2"></td>
                                    <td colspan="2">Fakir</td>
                                    <td colspan="2">Amil</td>
                                    <td colspan="2">Muallaf</td>
                                    <td colspan="2">Fisabilillah</td>
                                    <td colspan="2">Ibnu Sabil</td>
                                </tr>
                                <tr class="bg-warning">
                                    <td>Rupiah</td>
                                    <td>Jumlah Orang</td>
                                    <td>Rupiah</td>
                                    <td>Jumlah Orang</td>
                                    <td>Rupiah</td>
                                    <td>Jumlah Orang</td>
                                    <td>Rupiah</td>
                                    <td>Jumlah Orang</td>
                                    <td>Rupiah</td>
                                    <td>Jumlah Orang</td>
                                </tr>
                            </strong>
                            <?php $no = 1;
                            foreach ($mustahik as $row) { ?>
                                <tr>
                                    <td class="rp"><?= $no++; ?></td>
                                    <td class="nama-desa"><?= $row->nama_desa; ?></td>

                                    <td class="rp"><?= 'Rp. ' . nominal($row->rp_fakir); ?></td>
                                    <td class="rp"><?= 'Rp. ' . nominal($row->jlh_fakir); ?></td>

                                    <td class="rp"><?= 'Rp. ' . nominal($row->rp_amil); ?></td>
                                    <td class="rp"><?= 'Rp. ' . nominal($row->jlh_amil); ?></td>

                                    <td class="rp"><?= 'Rp. ' . nominal($row->rp_muallaf); ?></td>
                                    <td class="rp"><?= 'Rp. ' . nominal($row->jlh_muallaf); ?></td>

                                    <td class="rp"><?= 'Rp. ' . nominal($row->rp_fisabilillah); ?></td>
                                    <td class="rp"><?= 'Rp. ' . nominal($row->jlh_fisabilillah); ?></td>

                                    <td class="rp"><?= 'Rp. ' . nominal($row->rp_ibnusabil); ?></td>
                                    <td class="rp"><?= 'Rp. ' . nominal($row->jlh_ibnusabil); ?></td>

                                    <td class="rp">
                                        <button type="button" class="btn btn-success btn-xs" data-toggle="modal tooltip" data-placement="top" title="Edit" data-target="#ModalEdit<?= $row->id_mustahik ?>">
                                            <i class="fa fa-edit"></i>
                                        </button>

                                        <!-- <a href="<?= base_url($tombol['edit']) ?>" class="btn btn-success btn-xs"><i class="fa fa-edit"></i> Edit</a> -->
                                        <a href="<?= base_url($tombol['delete'] . $row->id_mustahik) ?>" data-toggle="tooltip" data-placement="top" title="Hapus" class="btn btn-danger btn-xs tombol-hapus"><i class="fa fa-trash"></i></a>
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