<?= $this->session->flashdata('pesan');?>
<h2>Daftar Lapangan</h2>
<table border="1" class="table table-bordered table-striped">
  <tr align="center">
    <th rowspan="2">No</th>
    <th rowspan="2">Nama Lapangan</th>
    <th rowspan="2">Ket</th>
    <th colspan="2">Harga</th>
    <th colspan="3">Foto</th>
    <th rowspan="2" colspan="2">Aksi</th>
  </tr>
  <tr>
    <th>Siang <=17:59</th>
    <th>Malam >=18:00</th>
    <th>Foto 1</th>
    <th>Foto 2</th>
    <th>Foto 3</th>
  </tr>
  <?php

  foreach($lapangan as $tampil){
    ?>
      <tr>
        <td><?php echo $tampil->idlapangan;?></td>
        <td><?php echo $tampil->nm;?></td>
        <td><?php echo $tampil->ket;?></td>
        <td><?php echo $tampil->harga1;?></td>
        <td><?php echo $tampil->harga2;?></td>
        <td><a href="<?= base_url('assets/');?>futsal/foto lapangan/<?php echo $tampil->f1;?>" target="blank"><img src="<?= base_url('assets/');?>futsal/foto lapangan/<?php echo $tampil->f1;?>" height="100" width="100"></a></td>
        <td><a href="<?= base_url('assets/');?>futsal/foto lapangan/<?php echo $tampil->f2;?>" target="blank"><img src="<?= base_url('assets/');?>futsal/foto lapangan/<?php echo $tampil->f2;?>" height="100" width="100"></a></td>
        <td><a href="<?= base_url('assets/');?>futsal/foto lapangan/<?php echo $tampil->f3;?>" target="blank"><img src="<?= base_url('assets/');?>futsal/foto lapangan/<?php echo $tampil->f3;?>" height="100" width="100"></a></td>
        <td><a href="<?= base_url('futsal/member_futsal/jadwal?idlap='.$tampil->idlapangan);?>" class="btn btn-warning">Lihat Jadwal</a></td>
        <?php
        if ($this->session->userdata('email'))
        {

          ?>
          <td><a href="<?= base_url('futsal/member_futsal/pesanan?idlap='.$tampil->idlapangan);?>" class="btn btn-info">Pesan</a></td>
          <?php

        }else{

          ?>
            <td><a data-toggle="modal" data-target="#kode" class="btn btn-info">Pesan</a></td>
          <?php

        }
        ?>

      </tr>
    <?php
  }
  ?>
</table>
 