		<div id="isi">
			<div class="kotak">
				<table border="0" width="100%">
					<tr align="center" >
						<td width="200"><b>Gambar</b></td>
						<td><b>Kode Prodak</b></td>
						<td><b>Nama Prodak</b></td>
						<td><b>Stok</b></td>
						<td><b>Ukuran</b></td>
						<td><b>Harga</b></td>
						<td></td>
					</tr>
					<tr>
						<td colspan="7"><hr name="hitam"></td>
					</tr>
					<?php
					foreach($prodak as $prodak){

						?>
							<tr align="center">
								<?= $this->session->flashdata('pesan');?>
								<td><img src="<?= base_url('assets/');?>tokobray/img/<?php echo $prodak->gambar;?>" width="200"></td>
								<td><?php echo $prodak->kd_prodak;?></td>
								<td><?php echo $prodak->nama_prodak;?></td>
								<td><?php echo $prodak->stok_prodak;?></td>
								<td><?php echo $prodak->ukuran_prodak;?></td>
								<td><?php echo $prodak->harga_prodak;?></td>
								<td><a href="<?= base_url('tokobray/admin_gudang/ubah_barang?id='.$prodak->id);?>" class="btn btn-primary">Ubah</a></td>
							</tr>
						<?php
					}
					?>
				</table>
			</div>
		</div>