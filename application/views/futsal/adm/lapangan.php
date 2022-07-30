<div class="container">
    <div class="navbar-inner" style="border:1px solid #bbb; border-radius:10px; padding:10px 20px 10px 20px; margin-top:50px; margin-left:auto; margin-right:auto;">
    	<div class="modal-header">
        	<h3>List Data Lapangan </h3>
        </div>

		<br>
		<a href="#" data-toggle="modal" data-target="#tambahlapangan" id="tambah" class="btn btn-danger">
			Tambah Data
		</a>
		<br />
		<br />
		<table width='478' border='1' class='table table-bordered table-striped'>
			<tr>
				<th rowspan=2>No</th>
				<th rowspan=2>Nama Lapangan</th>
				<th rowspan=2>Ket</th>
				<th colspan=2>Harga</th>
				<th colspan=3>Foto</th>
				<th rowspan=2 colspan=2>Aksi</th>
			</tr>
			<tr>
				<th>Siang <=17:59</th>
				<th>Malam >=18:00</th>
				<th>Foto 1</th>
				<th> Foto 2</th>
				<th>Foto 3</th>
			</tr>
			<?php
			foreach($lapangan as $cek){
				?>
					<tr>
					<td><?php echo $cek->idlapangan;?></td>
					<td><?php echo $cek->nm;?></td>
					<td><?php echo $cek->ket;?></td>
					<td><?php echo $cek->harga1;?></td>
					<td><?php echo $cek->harga2;?></td>
					<td><img src='<?= base_url('assets/');?>futsal/foto lapangan/<?php echo $cek->f1;?>' height='100' width='100'></td>
					<td><img src='<?= base_url('assets/');?>futsal/foto lapangan/<?php echo $cek->f2;?>' height='100' width='100'></td>
					<td><img src='<?= base_url('assets/');?>futsal/foto lapangan/<?php echo $cek->f3;?>' height='100' width='100'></td>								

					<td>
						<a class="btn btn-small btn-info" href="#" data-toggle="modal" data-target="#editlapangan">Edit</a>
					</td>
					<td>
						<a class='btn btn-small btn-warning' href="#" data-toggle="modal" data-target="#hapus">Hapus</a>
					</td>
				<?php
			}
			?>
		</table>      
    </div>
</div>
    	
<br><br><br><br>
