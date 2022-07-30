		<div id="isi">
			<div class="kotak">
				<div class="pengisian_beli">
					<div class="kanan">
						<form action="<?= base_url('tokobray/admin_gudang/cek_penjualan');?>" method="post">
							<table border="0" cellpadding="10">
								<tr>
									<td width="15%">Kode Prodak</td>
									<td width="15%" align="center"><?php echo $cek[0]->kd_prodak;?></td>
									<td></td>
									<td width="15%">Nama Pemesan</td>
									<td width="20%" align="center"><?php echo $cek[0]->member;?></td>
								</tr>
								<tr>
									<td>Gambar</td>
									<td><img src="<?= base_url('assets/');?>tokobray/img/<?php echo $cek[0]->gambar;?>"></td>
									<td></td>
									<td>Alamat Pemesan</td>
									<td align="center"><?php echo $cek[0]->alamat;?></td>
								</tr>
								<tr>
									<td>Nama Prodak</td>
									<td align="center"><?php echo $cek[0]->nama_prodak;?></td>
									<td></td>
									<td>Kurir</td>
									<td align="center"><?php echo $cek[0]->kurir;?></td>
								</tr>
								<tr>
									<td>Ukuran Prodak</td>
									<td align="center"><?php echo $cek[0]->ukuran;?></td>
									<td></td>
									<td>Jumlah Beli</td>
									<td align="center"><?php echo $cek[0]->jumbel;?></td>
								</tr>
								<tr>
									<td colspan="3"></td>
									<td>Total Bayar</td>
									<td align="center"><?php echo $cek[0]->total_bayar;?></td>
								</tr>
							</table>
							<br>
							<div class="tombol_simpan">
								<button type="submit" value="Buat Baru" class="btn btn-primary">Kembali</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>