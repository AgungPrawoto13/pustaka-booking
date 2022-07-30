<div class="content">
	<div class="content1">
		<div class="atas">
			<i class="fas fa-folder"></i>
			<div class="transaksi">
				Data Transaksi
			</div>
		</div>

		<div class="tambah">
			<span>Edit Transaksi</span>
		</div>

		<div class="form">
			<form action="<?= base_url('laundry/admin/edit_transaksi?no=1');?>">
				<div class="isi">
					<span>Nama Pelanggan</span>
					<span name="label">Jenis Paket</span>
					<br>
					<input type="text" name="nama" value="<?php echo $cek['nama_pelanggan'];?>">
					<select name="paket">
						<option value="<?php echo $cek['jenis_paket'];?>"><?php echo $cek['jenis_paket'];?></option>
						<option value="1">1</option>
						<option value="2">2</option>
					</select>
				</div>
				<div class="isi">
					<span>Alamat</span>
					<span name="label">Jenis Laundry</span>
					<br>
					<input type="text" name="alamat" value="<?php echo $cek['alamat'];?>">
					<select name="jenis">
						<option value="<?php echo $cek['jenis_laundry'];?>"><?php echo $cek['jenis_laundry'];?></option>
						<option value="Cuci Setrika Reguler ( 2 Hari )">Cuci Setrika Reguler ( 2 Hari )</option>
						<option value="Setrika Reguler ( 2 Hari )">Setrika Reguler ( 2 Hari )</option>
						<option value="Cuci Strika Express ( 1 Hari)">Cuci Strika Express ( 1 Hari)</option>
						<option value="Setrika Express ( 1 Hari )">Setrika Express ( 1 Hari )</option>
						<option value="Cuci Strika Super Express ( 8 Jam)">Cuci Strika Super Express ( 8 Jam)</option>
						<option value="Setrika Super Express ( 8 jam )">Setrika Super Express ( 8 jam )</option>
					</select>
					<br>
				</div>
				<div class="isi">
					<span>No Hp</span>
					<span name="label">Tanggal Masuk</span>
					<br>
					<input type="text" name="no_hp" value="<?php echo $cek['no_hp'];?>">
					<input type="text" name="tgl_masuk" value="<?php echo $cek['tgl_masuk'];?>">
					<br>
				</div>
				<div class="isi">
					<span>Jenis Pakaian</span>
					<span name="label">Tanggal Diambil</span>
					<br>
					<input type="text" name="pakaian" value="<?php echo $cek['jenis_pakaian'];?>">
					<input type="text" name="tgl_diambil" value="<?php echo $cek['tgl_diambil'];?>">
					<br>
				</div>
				<div class="isi">
					<span>Berat Pakaian</span>
					<span name="label">Jenis Bayar</span>
					<br>
					<input type="text" name="berat" value="<?php echo $cek['berat_pakaian'];?>">
					<select name="jenis_bayar">
						<option value="BCA">BCA</option>
						<option value="Mandiri">Mandiri</option>
						<option value="Indomaret">Indomaret</option>
					</select>
					<br>
				</div>
				<div class="isi">
					<span>Total Bayar</span>
					<span name="label">status</span>
					<br>
					<input type="text" name="total_bayar" value="<?php echo $cek['total_bayar'];?>">
					<select name="status">
						<option value="<?php echo $cek['status'];?>"><?php echo $cek['status'];?></option>
						<option value="Sudah Bayar">Sudah Bayar</option>
					</select>
				</div>
				<div class="tombol">
					<button type="submit" class="btn btn-primary">Simpan</button>
					<button type="reset" class="btn btn-primary">Hapus</button>
				</div>
			</form>
		</div>
	</div>
</div>