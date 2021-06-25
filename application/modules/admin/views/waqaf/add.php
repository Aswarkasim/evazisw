<div class="box">
    <div class="box-body">
        <div class="row">
            <div class="col-md-6">


                <?php
                echo  form_open_multipart(base_url('admin/waqaf/add'));
                ?>

                <form action="" method="POST">

                    <input type="hidden" value="<?= $waqaf->id_waqaf; ?>" name="id_waqaf">

                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3">
                                <label for="" class="pull-right">Nomor</label>
                            </div>
                            <div class="col-md-9">
                                <input type="text" class="form-control" value="<?= ($waqaf->nomor != '') ? $waqaf->nomor : set_value('nomor') ?>" placeholder="Nomor" name="nomor" required>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3">
                                <label for="" class="pull-right">Tanggal</label>
                            </div>
                            <div class="col-md-9">
                                <input type="date" class="form-control" value="<?= ($waqaf->tgl_waqaf != '') ? $waqaf->tgl_waqaf : set_value('tgl_waqaf') ?>" placeholder="Tanggal" name="tgl_waqaf" required>
                            </div>
                        </div>
                    </div>



                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3">
                                <label for="" class="pull-right">Nama Desa</label>
                            </div>
                            <div class="col-md-9">
                                <select required name="id_desa" id="" class="form-control select2" style="width: 100%;">
                                    <option value="">-- Desa --</option>
                                    <?php foreach ($desa as $row) { ?>
                                        <option value="<?= $row->id_desa; ?>" <?= $waqaf->id_desa == $row->id_desa ? 'selected' : ''; ?>><?= $row->nama_desa; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3">
                                <label for="" class="pull-right">Lokasi</label>
                            </div>
                            <div class="col-md-9">
                                <input type="text" class="form-control" value="<?= ($waqaf->lokasi != '') ? $waqaf->lokasi : set_value('lokasi') ?>" placeholder="Lokasi" name="lokasi" required>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3">
                                <label for="" class="pull-right">Luas</label>
                            </div>
                            <div class="col-md-9">
                                <input type="text" class="form-control" placeholder="Luas" value="<?= ($waqaf->luas != '') ? $waqaf->luas : set_value('luas') ?>" name="luas" required>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3">
                                <label for="" class="pull-right">Penggunaan</label>
                            </div>
                            <div class="col-md-9">
                                <input type="text" class="form-control" placeholder="Penggunaan" value="<?= ($waqaf->penggunaan != '') ? $waqaf->penggunaan : set_value('penggunaan') ?>" name="penggunaan" required>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3">
                                <label for="" class="pull-right">Waqif</label>
                            </div>
                            <div class="col-md-9">
                                <input type="text" class="form-control" placeholder="Waqif" value="<?= ($waqaf->waqif != '') ? $waqaf->waqif : set_value('waqif') ?>" name="waqif" required>
                            </div>
                        </div>
                    </div>



                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3">
                                <label for="" class="pull-right">Bukti Penyerahan</label>
                            </div>
                            <div class="col-md-9">
                                <input type="file" class="form-control" placeholder="Bukti" name="bukti"><br>
                                <img src="<?= base_url($waqaf->bukti); ?>" width="50%" alt="">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3">
                            </div>
                            <div class="col-md-9">
                                <button type="submit" class="btn btn-primary">Simpan</button>

                            </div>
                        </div>
                    </div>
                </form>
                <?= form_close() ?>

            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-3">
                            <label for="" class="pull-right">Nadzir</label>
                        </div>
                        <div class="col-md-9">
                            <form action="">
                                <p id="pesan" class="text-danger"></p>
                                <input type="text" name="nama_nadzir" placeholder="Nama Nadzir" class="form-control"> <br>
                                <input type="text" name="umur" placeholder="Umur" class="form-control"><br>
                                <!-- <div class="btn btn-primary btn-sm" id="btn-post" onclick="postNadzir()">Tambah Nadzir</div> -->
                                <!-- <a href="#" class="btn btn-warning" id="btn-post" onclick="postNadzir()" name="btn-btn-primary">Tambah nadzir</a> -->
                                <button class="btn btn-warning" id="btn-post" onclick="postNadzir()" name="btn-btn-primary">Tambah nadzir</button>

                                <p id="namaNadzir"></p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<script>
    readNadzir()
    //id Waqaf
    function readNadzir() {

        $.ajax({
            type: 'POST',
            url: '<?= base_url('admin/waqaf/readNadzir/' . $waqaf->id_waqaf) ?>',
            dataType: 'json',
            success: function(data) {
                var baris = '';

                for (var i = 0; i < data.length; i++) {
                    baris += '<p>' + data[i].nama_nadzir + '(' + data[i].umur + 'th) <a onclick = "deleteNadzir(\'' + data[i].id_nadzir + '\')"> <i class = "fa fa-times" > </i></a> </p>'
                }
                $('#namaNadzir').html(baris)
            }
        })
    }

    function postNadzir() {

        var id_waqaf = '<?= $waqaf->id_waqaf; ?>'
        var nama_nadzir = $("[name='nama_nadzir']").val();
        var umur = $("[name='umur']").val();

        $.ajax({
            type: 'POST',
            data: 'id_waqaf=' + id_waqaf + '&nama_nadzir=' + nama_nadzir + '&umur=' + umur,
            url: '<?= base_url() . 'admin/waqaf/addNadzir' ?>',
            dataType: 'json',
            success: function(result) {
                $("#pesan").html(result.pesan);
                readNadzir()

                if (result.pesan == '') {

                    $("[name = 'nama_nadzir']").val('')
                    $("[name = 'umur']").val('')
                }
            }
        })
    }

    function deleteNadzir(id_nadzir) {
        var tanya = confirm('Hapus Nadzir?')

        if (tanya) {

            $.ajax({
                type: 'POST',
                data: 'id_nadzir=' + id_nadzir,
                url: '<?= base_url('admin/waqaf/deletNadzir/') ?>',
                success: function() {
                    readNadzir();
                }
            })
        }
    }
</script>