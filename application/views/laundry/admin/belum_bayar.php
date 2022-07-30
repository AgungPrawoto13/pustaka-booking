<div class="content">
	<div class="content2">
		<div class="atas">
			<i class="fas fa-folder"></i>
			<div class="transaksi">
				Data Transaksi
			</div>
		</div>

		<div class="tambah">
			<a href="<?= base_url('laundry/admin/form_transaksi');?>" class="btn btn-success btn-sm">
				Tambah Data
			</a>
			<span>Belum Melakukan Pembayaran</span>
		</div>

		<div class="cari">
			<input type="text" name="cari">
			<button type="submit" class="btn btn-primary btn-sm">Cari</button>
		</div>

		<div class="isitransaksi">
			<table border="1" width="1500" cellpadding="10">
				<tr align="center">
					<td>No Order</td>
					<td>Nama Pelanggan</td>
					<td>Alamat</td>
					<td>No Hp</td>
					<td>Jenis Pakaian</td>
					<td>Berat Pakaian</td>
					<td>Jenis Paket</td>
					<td>Jenis Laundry</td>
					<td>Tgl Masuk</td>
					<td>Tgl Diambil</td>
					<td>Status</td>
					<td colspan="2">Action</td>
				</tr>
				<?php
				foreach ($cek as $tampil_data){ 
					$no=$tampil_data->no_order;
					?>
					<tr align="center">
						<td><?php echo $tampil_data->no_order;?></td>
						<td><?php echo $tampil_data->nama_pelanggan;?></td>
						<td><?php echo $tampil_data->alamat;?></td>
						<td><?php echo $tampil_data->no_hp;?></td>
						<td><?php echo $tampil_data->jenis_pakaian;?></td>
						<td><?php echo $tampil_data->berat_pakaian;?></td>
						<td><?php echo $tampil_data->jenis_paket;?></td>
						<td></td>
						<td><?php echo $tampil_data->tgl_masuk;?></td>
						<td><?php echo $tampil_data->tgl_diambil;?></td>
						<td><?php echo $tampil_data->status;?></td>
						<td><a href="<?= base_url('laundry/admin/edit_transaksi?key='.$no);?>">Edit</a></td>
						<td><a href="#">Hapus</a></td>
					</tr>
					<?php
				}
				?>
			</table>
		</div>
	</div>
</div>