		<div id="isi">
			<div class="kotak">
				<div class="pengisian_beli">
					<div class="kanan">
						<form action="<?= base_url('tokobray/admin_gudang/kirim_barang?kd_prodak='.$cek[0]->kd_prodak);?>" method="post">
							<table border="0" cellpadding="10">
								<tr>
									<td width="15%">Gambar</td>
									<td><img src="<?= base_url('assets/');?>tokobray/img/<?php echo $cek[0]->gambar;?>"></td>
									<td></td>
									<td width="15%">Nama Pemesan</td>
									<td width="20%"><?php echo $cek[0]->member;?></td>
								</tr>
								<tr>
									<td>Kode Prodak</td>
									<td><input name="kd_prodak" disabled value="<?php echo $cek[0]->kd_prodak;?>"></td>
									<td></td>
									<td>Alamat Pemesan</td>
									<td><?php echo $cek[0]->alamat;?></td>
								</tr>
								<tr>
									<td>Nama Prodak</td>
									<td><?php echo $cek[0]->nama_prodak;?></td>
									<td></td>
									<td>Kota</td>
									<td><input type="text" name="kota" id="kota"><?= form_error('kota','<small class="text-danger">','</small>');?></td>
								</tr>
								<tr>
									<td>Ukuran Prodak</td>
									<td><?php echo $cek[0]->ukuran;?></td>
									<td></td>
									<td>Kode Pos</td>
									<td><input type="text" name="kd_pos" id="pos"><?= form_error('kd_pos','<small class="text-danger">','</small>');?></td>
								</tr>
								<tr>
									<td>Kurir</td>
									<td><?php echo $cek[0]->kurir;?></td>
									<td></td>
									<td>Pembayaran</td>
									<td><?php echo $cek[0]->pembayaran;?></td>
								</tr>
								<tr><td>Jumbel</td>
									<td><?php echo $cek[0]->jumbel;?></td>
									<td></td>
									<td>Total Bayar</td>
									<td><?php echo $cek[0]->total_bayar;?></td>
								</tr>
							</table>
							<div class="tombol_simpan">
								<button type="reset" class="btn btn-primary">Batal</button>
								<button type="submit" class="btn btn-primary">Kirim Barang</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>