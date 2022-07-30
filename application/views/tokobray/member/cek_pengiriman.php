		<div id="content">
			<div id="kontak">
				<?php

				if($keranjang){
					foreach($keranjang as $keranjang){
						?>
							<div class="form_belanja">
								<table border="1" width="100%" cellpadding="10">
									<tr align="center">
										<td>Gambar</td>
										<td>Produk</td>
										<td>Ukuran</td>
										<td>Harga Satuan</td>
										<td>Banyak Beli</td>
										<td>Total Bayar</td>
										<td>Hapus</td>
									</tr>
									<tr align="center">
										<td><img src="<?= base_url('assets/');?>tokobray/img/<?php echo $keranjang->gambar;?>" name="gambar_keranjang"></td>
										<td><?php echo $keranjang->nama_prodak;?></td>
										<td><?php echo $keranjang->ukuran;?></td>
										<td><?php echo $keranjang->harga;?></td>
										<td><?php echo $keranjang->jumbel;?></td>
										<td>Rp <?php echo $keranjang->total_bayar;?></td>
										<td><a href="<?= base_url('tokobray/member/cek_pengiriman?kd_prodak='.$keranjang->kd_prodak);?>" class="btn btn-primary">Cek</a></td>
									</tr>
								</table>
							</div>
						<?php
					}
				}else{
					?>
					<div class="form_belanja">
						<table border="1" width="100%" cellpadding="10">
							<tr align="center">
								<td>Gambar</td>
								<td>Produk</td>
								<td>Ukuran</td>
								<td>Harga Satuan</td>
								<td>Banyak Beli</td>
								<td>Total Bayar</td>
								<td>Hapus</td>
							</tr>
						</table>
					</div>
					<?php
				}
				?>
			</div>
		</div>