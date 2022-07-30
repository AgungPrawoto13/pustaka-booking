		<div id="isi">
			<div class="kotak">
				<?= $this->session->flashdata('pesan');?>
				<form action="<?= base_url('tokobray/admin_gudang/barang_baru');?>" method="post">
					<div class="prodak_baru">
						<div class="input_prodak">
							<span>Kode Prodak</span>
							<input type="text" name="kd_prodak" id="kd_prodak">
							<?= form_error('kd_prodak','<small class="text-danger">','</small>');?>
						</div>
						<br>
						<div class="input_prodak">
							<span>Nama Barang</span>
							<input type="text" name="nama_prodak" id="nama_prodak">
							<?= form_error('nama_prodak','<small class="text-danger">','</small>');?>
						</div>
						<br>
						<div class="input_prodak">
							<span>Stok</span>
							<input type="number" name="stok" id="stok">
							<?= form_error('stok','<small class="text-danger">','</small>');?>
						</div>
						<br>
						<div class="input_prodak">
							<span>Size</span>
							<input type="radio" name="ukuran" value="S">S
							<input type="radio" name="ukuran" value="S">M
							<input type="radio" name="ukuran" value="S">L
							<?= form_error('ukuran','<small class="text-danger">','</small>');?>
						</div>
						<br>
						<div class="input_prodak">
							<span>Harga</span>
							<input type="text" name="harga" id="harga">
							<?= form_error('harga','<small class="text-danger">','</small>');?>
						</div>
					</div>
					<div class="prodak_baru1">
						<div class="input_prodak">
							<span>Deskripsi</span>
							<input type="text" name="deskripsi" id="deskripsi">
							<?= form_error('deskripsi','<small class="text-danger">','</small>');?>
						</div>
						<br>
						<div class="input_prodak">
							<span>Gambar</span>
							<input type="file" name="gambar">
						</div>
						<br>
					</div>
					<div class="tombol_simpan">
						<button type="submit" value="Buat Baru" class="btn btn-primary">Buat Baru</button>
						<button type="reset" vale="batal" class="btn btn-primary">Batal</button>
					</div>
				</form>
			</div>
		</div>