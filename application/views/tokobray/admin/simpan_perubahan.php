		<div id="isi">
			<div class="kotak">
				<div class="pengisian_beli">
					<div class="kanan">
						<form action="<?= base_url('tokobray/admin_gudang/simpan_perubahan');?>" method="post">
							<table border="0" cellpadding="10">
								<tr>
									<td width="15%">Kode Prodak</td>
									<td width="15%"><input type="text" name="kd_prodak" value="<?php echo $cek[0]->kd_prodak;?>" id="kd_prodak"><?= form_error('kd_prodak','<small class="text-danger">','</small>');?></td>
									<td></td>
									<td width="15%">Harga</td>
									<td width="20%"><input type="text" name="harga" value="<?php echo $cek[0]->harga_prodak;?>" id="harga"><?= form_error('harga','<small class="text-danger">','</small>');?></td>
								</tr>
								<tr>
									<td>Nama Prodak</td>
									<td><input type="text" name="nama_prodak" value="<?php echo $cek[0]->nama_prodak;?>" id="nama_prodak"><?= form_error('nama_prodak','<small class="text-danger">','</small>');?></td>
									<td></td>
									<td>Ukuran</td>
									<td><input type="radio" name="ukuran" value="S" id="ukuran">S
										<input type="radio" name="ukuran" value="M" id="ukuran">M
										<input type="radio" name="ukuran" value="L" id="ukuran">L
										<?= form_error('ukuran','<small class="text-danger">','</small>');?></td>
								</tr>
								<tr>
									<td>Stok</td>
									<td><input type="number" name="stok" value="<?php echo $cek[0]->stok_prodak;?>" id="stok"><?= form_error('stok','<small class="text-danger">','</small>');?></td>
									<td></td>
									<td>Gambar</td>
									<td><img src="<?= base_url('assets/');?>tokobray/img/<?php echo $cek[0]->gambar;?>"><br>
										<input type="file" name="gambar" value="<?php echo $cek[0]->gambar;?>"></td>
								</tr>
							</table>
							<div class="tombol_simpan">
								<button type="submit" class="btn btn-primary">Simpan</button>
								<button type="reset" class="btn btn-primary">Batal</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>