		<div id="isi">
			<div class="kotak">
				<table border="0" width="100%">
					<tr align="center" >
						<td width="200"><b>Gambar</b></td>
						<td><b>Kode Prodak</b></td>
						<td><b>Nama Prodak</b></td>
						<td><b>Ukuran</b></td>
						<td><b>Stok</b></td>
						<td><b>Harga</b></td>
						<td></td>
					</tr>
					<tr>
						<td colspan="6"><hr name="hitam"></td>
					</tr>
					<?php
					foreach($prodak as $tampil){
						?>
							<tr align="center">
								<td><img src="<?= base_url('assets/');?>tokobray/img/<?php echo $tampil->gambar;?>" width="200"></td>
								<td><?php echo $tampil->kd_prodak;?>
								<td><?php echo $tampil->nama_prodak;?></td>
								<td><?php echo $tampil->ukuran_prodak;?></td>
								<td><?php echo $tampil->stok_prodak;?></td>
								<td><?php echo $tampil->harga_prodak;?></td>
							</tr>
						<?php
					}
					?>
				</table>
					<!-- <button type="button">Kirim Barang</button><br>
					<button type="button">Rincian Pesanan -->
			</div>
		</div>