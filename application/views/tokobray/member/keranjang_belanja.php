		<div id="content">
			<div id="kontak">
				<div class="form_belanja">
					<?= $this->session->flashdata('pesan');?>
					<?php
					if($prodak){
						foreach($prodak as $keranjang){
							
							?>
							<form action="<?= base_url('tokobray/member/perbarui_keranjang?kd_prodak='.$keranjang->id_prodak);?>" method="post">
								<table border="1" width="100%" cellpadding="10">
									<tr align="center">
										<td>Gambar</td>
										<td>Produk</td>
										<td>Ukuran</td>
										<td>Harga Satuan</td>
										<td>Banyak Beli</td>
										<td>Total Bayar</td>
										<td>Update</td>
										<td>Hapus</td>
									</tr>
									<tr align="center">
										<td><img src="<?= base_url('assets/');?>tokobray/img/<?php echo $keranjang->gambar;?>" name="gambar_keranjang"></td>
										<td><?php echo $keranjang->nama_prodak;?></td>
										<td><?php echo $keranjang->ukuran_prodak;?></td>
										<td><?php echo $keranjang->harga_prodak;?></td>
										<td><input type="number" name="jumbel" value="<?php echo $keranjang->jumbel;?>"></td>
										<td>Rp <?php echo $keranjang->total_bayar;?></td>
										<td><button type="submit" class="btn btn-primary">Perbarui</button></td>
										<td><a href="<?= base_url('tokobray/member/hapus_keranjang?kd_prodak='.$keranjang->kd_prodak);?>" class="btn btn-primary">Hapus</a></td>
									</tr>									
								</table>
							</form>
							<br>
							<?php
						}
						?>

							<div class="tombol_keranjang">
								<a href="<?= base_url('tokobray/pengunjung/pria');?>" class="btn btn-primary">Belanja Lagi</a>
								<a href="<?= base_url('tokobray/member/beli');?>" class="btn btn-primary">Buat Pesanan</a>
							</div>
						<?php
					}else{
						?>
						<table border="1" width="100%" cellpadding="10">
							<tr align="center">
								<td>Gambar</td>
								<td>Produk</td>
								<td>Ukuran</td>
								<td>Harga Satuan</td>
								<td>Banyak Beli</td>
								<td>Total Bayar</td>
								<td>Update</td>
								<td>Hapus</td>
							</tr>
						</table>
						<br>
						<div class="tombol_keranjang">
							<a href="<?= base_url('tokobray/pengunjung/pria');?>" class="btn btn-primary">Belanja Lagi</a>
						</div>
						<?php
					}
					?>
				</div>
			</div>
		</div>