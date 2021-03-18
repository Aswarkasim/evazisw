<?php $this->load->view('user/nav'); ?>

<div class="jumbotron">

  <div class="container">
    <style>
      td {
        padding-bottom: 10px;
        padding-top: 10px;
      }
    </style>
    <strong>
      <?= validation_errors() ?>
      <table>
        <tr>
          <td width="200px" align="left">No. KTP</td>
          <td>: <?= $user->no_ktp; ?></td>
        </tr>

        <tr>
          <td align="left">Nama Lengkap</td>
          <td>: <?= $user->namalengkap; ?></td>
        </tr>



        <tr>
          <td align="left">Tempat Tanggal Lahir</td>
          <td>: <?= $user->tempat_lahir . ', ' . $user->tanggal_lahir; ?></td>
        </tr>

        <tr>
          <td align="left">Jenis Kelamin</td>
          <td>: <?= $user->jenis_kelamin; ?></td>
        </tr>

        <tr>
          <td align="left">Agama</td>
          <td>: <?= $user->agama; ?></td>
        </tr>

        <tr>
          <td align="left">No. Telpon</td>
          <td>: <?= $user->no_hp; ?></td>
        </tr>

        <tr>
          <td align="left">Alamat</td>
          <td>: <?= $user->alamat; ?></td>
        </tr>

      </table>

      <?php include('edit.php') ?>

    </strong>

  </div>
</div>