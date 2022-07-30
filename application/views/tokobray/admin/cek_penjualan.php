		<div id="isi">
			<div class="kotak">
				<table border="0" width="100%">
					<tr align="center">
						<td width="200"><b>Gambar</b></td>
						<td><b>Kode Prodak</b></td>
						<td><b>Nama Barang</b></td>
						<td><b>Pemesan</b></td>
						<td><b>Jumlah Beli</b></td>
						<td><b>Ukuran</b></td>
						<td><b>Total Bayar</b></td>
						<td></td>
					</tr>
					<tr>
						<td colspan="8"><hr name="hitam"></td>
					</tr>
					<?php
					foreach($cek as $tampilkan){
						?>
							<tr align="center">
								<td><img src="<?= base_url('assets/');?>tokobray/img/<?php echo $tampilkan->gambar;?>" width="200"></td>
								<td><?php echo $tampilkan->kd_prodak;?></td>
								<td><?php echo $tampilkan->nama_prodak;?></td>
								<td><?php echo $tampilkan->member;?></td>
								<td><?php echo $tampilkan->ukuran;?></td>
								<td><?php echo $tampilkan->jumbel;?></td>
								<td><?php echo $tampilkan->total_bayar;?></td>
								<td><a href="<?= base_url('tokobray/admin_gudang/kirim_barang?kd_prodak='.$tampilkan->kd_prodak);?>"><button name="tombol" type="button">Kirim Barang</button></a><br>
									<a href="<?= base_url('tokobray/admin_gudang/rincian_pesanan?kd_prodak='.$tampilkan->kd_prodak);?>"><button type="button">Rincian Pesanan</button></a></td>
							</tr>
						<?php
					}
					?>
				</table>
			</div>
		</div>