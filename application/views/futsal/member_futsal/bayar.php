<?= $this->session->flashdata('pesan');?>
<h2>Pembayaran</h2>  
    <table width='478' border='1' class='table table-bordered table-striped'>
      <tr>
        <th>No</th>
        <th>ID Pemesanan</th>
        <th>Tgl Pesan</th>
        <th>Nama Lapangan</th>
        <th>Tgl Main</th>
        <th>Lama Sewa</th>
        <th>Jam Mulai</th>
        <th>Jam Habis</th>
        <th>Harga</th>
        <th>Total Harga</th>
        <th>Aksi</th>
      </tr>
      <?php
      
      foreach($pembayaran as $cek){

        ?>
        <tr>
            <td>1</td>
            <td><?php echo $cek->id_keranjang;?></td>
            <td><?php echo $cek->tgl_pesan;?></td>
            <td><?php echo $cek->nm;?></td>
            <td><?php echo $cek->tgl_main;?></td>
            <td><?php echo $cek->lama;?></td>
            <td><?php echo $cek->jmulai;?></td>
            <td><?php echo $cek->jhabis;?></td>
            <td><?php echo $cek->harga;?></td>
            <td><?php echo $cek->tot;?></td>
            <td><a href="<?= base_url('futsal/member_futsal/pesanan?idlap='.$cek->idlapangan);?>" class="btn btn-primary">edit</a>
                <a href="<?= base_url('futsal/member_futsal/hapus_pesanan?id_sewa='.$cek->id_keranjang);?>" class="btn btn-warning">Hapus</a></td>
        </tr>
        <?php
      }
      ?>
        <tr>
            <td colspan="10"></td>
            <td><a hre="#" data-toggle="modal" data-target="#upload" class="btn btn-primary">Pesan</td>
        </tr>
    </table>