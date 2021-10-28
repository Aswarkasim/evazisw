<div class="box">

    <div class="box-body">
        <div class="box-title">
            <a href="<?= base_url('/admin/waqaf'); ?>" class="btn btn-warning"><i class="fa fa-arrow-left"></i> Kembali</a>
            <h4><strong>Rincian Waqaf</strong></h4>
        </div>
        <div class="row">
            <div class="col-md-6">

                <table class="table">
                    <tr>
                        <td>No</td>
                        <td>: <?= $waqaf->nomor; ?></td>
                    </tr>

                    <tr>
                        <td>Tanggal</td>
                        <td>: <?= $waqaf->tgl_waqaf; ?></td>
                    </tr>

                    <tr>
                        <td>Waqif</td>
                        <td>: <?= $waqaf->waqif; ?></td>
                    </tr>

                    <tr>
                        <td>Nama Desa</td>
                        <td>: <?= $waqaf->nomor; ?></td>
                    </tr>

                    <tr>
                        <td>Lokasi</td>
                        <td>: <?= $waqaf->nomor; ?></td>
                    </tr>

                    <tr>
                        <td>Luas</td>
                        <td>: <?= $waqaf->luas; ?></td>
                    </tr>

                    <tr>
                        <td>Penggunaan</td>
                        <td>: <?= $waqaf->penggunaan; ?></td>
                    </tr>

                    <tr>
                        <td>Nadzir</td>
                        <td>:
                            <?php
                            $nadzir = $this->Crud_model->listingOneAll('tbl_nadzir', 'id_nadzir', $waqaf->id_waqaf);
                            foreach ($nadzir as $row) {
                                echo $row->nama_nadzir . '<br>';
                            }
                            ?>
                        </td>
                    </tr>

                    <tr>
                        <td>Status</td>
                        <td>

                            <?php $status = '';
                            if ($waqaf->is_done == 1) {
                                $status = 'Tersalurkan';
                            } else {
                                $status = 'Belum Tersalurkan';
                            } ?>
                            <div class="btn-group">
                                <button type="button" class="btn <?= $waqaf->is_done == 1 ? 'btn-success' : 'btn-danger'; ?>"><i class="fa fa-exchange"></i> <?= $status; ?></button>
                                <button type="button" class="btn <?= $waqaf->is_done == 1 ? 'btn-success' : 'btn-danger'; ?> dropdown-toggle" data-toggle="dropdown">
                                    <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="<?= base_url('admin/waqaf/is_done/' . $waqaf->id_waqaf . '/1')  ?>"><i class="fa fa-edit"></i> Salurkan</a></li>
                                    <li><a href="<?= base_url('admin/waqaf/is_done/' . $waqaf->id_waqaf . '/0')  ?>"><i class="fa fa-trash"></i> Batal</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>



                </table>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="">Bukti Penyerahan</label><br>
                    <img src="<?= base_url($waqaf->bukti); ?>" width="80%" alt="">
                </div>
            </div>
        </div>
    </div>
</div>