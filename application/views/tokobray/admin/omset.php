		<div id="isi">
			<div class="kotak">
				<table border="0" width="100%">
					<tr align="center" >
						<td width="100"><b>Gambar</b></td>
						<td><b>Nama Barang</b></td>
						<td><b>Ukuran</b></td>
						<td width="120"><b>Terjual</b></td>
						<td width="180"><b>Total</b></td>
					</tr>
					<tr>
						<td colspan="6"><hr name="hitam"></td>
					</tr>
					<?php
					foreach($cek as $pesanan){
						?>
							<tr align="center">
								<td><img src="<?= base_url('assets/');?>tokobray/img/<?php echo $pesanan->gambar;?>" width="200"></td>
								<td><?php echo $pesanan->nama_prodak;?></td>
								<td><?php echo $pesanan->ukuran;?></td>
								<td><?php echo $pesanan->jumbel;?></td>
								<td><?php echo $pesanan->total_bayar;?></td>
							</tr>
						<?php
					}
					?>
					<tr>
						<td colspan="4"></td>
						<td><hr name="hitam"></td>
					</tr>
					<tr>
						<td colspan="3"></td>
						<td>Total Hari ini</td>
						<td>Rp 3.900.000</td>
					</tr>
				</table>
			</div>
		</div>