<div class="container">
  <br><br>
  <h4 class="text-center"><strong>Daftar Waqaf</strong></h4>
  <div class="table-responsive">
    <table class="table DataTable">

      <thead>

        <tr class="bg-primary">
          <th width="40px">#</th>
          <th>Nomor</th>
          <th>Waqif</th>
          <th>Penggunaan</th>
          <th>Tanggal</th>
        </tr>

      </thead>

      <tbody id="targetData">

        <?php $no = 1;
        foreach ($waqaf as $row) { ?>
          <tr>
            <td><?= $no++; ?></td>
            <td><?= $row->nomor; ?></td>
            <td><?= $row->waqif; ?></td>
            <td><?= $row->penggunaan; ?></td>
            <td><?= $row->tgl_waqaf; ?></td>


          </tr>
        <?php } ?>

      </tbody>
    </table>

  </div>
</div>