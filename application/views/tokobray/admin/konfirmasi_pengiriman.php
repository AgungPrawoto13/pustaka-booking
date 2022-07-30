		<div id="isi">
			<div class="kotak">
				<div class="pengisian_beli">
					<div class="kanan">
						<form action="<?= base_url('tokobray/admin_gudang/selesai');?>" method="post">
							<table border="0" cellpadding="10">
								<tr>
									<td width="15%">Gambar</td>
									<td><img src="<?= base_url('assets/');?>tokobray/img/prodaklaki1.jpeg"></td>
									<td></td>
									<td width="15%">Nama Pemesan</td>
									<td width="20%">Rainhard</td>
								</tr>
								<tr>
									<td>Kode Prodak</td>
									<td>PK001BJ</td>
									<td></td>
									<td>Alamat Pemesan</td>
									<td>Jl Gunung balong</td>
								</tr>
								<tr>
									<td>Nama Prodak</td>
									<td>Prodak laki</td>
									<td></td>
									<td>Kota</td>
									<td><input type="text" name="kota" id="kirim_pesanan"></td>
								</tr>
								<tr>
									<td>Ukuran Prodak</td>
									<td>L</td>
									<td></td>
									<td>Kode Pos</td>
									<td><input type="text" name="kd_pos" id="kirim_pesanan"></td>
								</tr>
								<tr>
									<td>Kurir</td>
									<td>JNT</td>
									<td></td>
									<td>Pembayaran</td>
									<td>Ditempat</td>
								</tr>
								<tr><td colspan="3"></td>
									<td>Total Bayar</td>
									<td>Rp 150.000</td>
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