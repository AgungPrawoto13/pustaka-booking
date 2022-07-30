		<div id="isi">
			<div class="kotak">
				<table border="0" width="100%">
					<tr align="center" >
						<td width="200"><b>Gambar</b></td>
						<td><b>kode prodak</b></td>
						<td><b>Nama Barang</b></td>
						<td><b>Pemesan</b></td>
						<td><b>Alamat</b></td>
						<td><b>Kota</b></td>
						<td><b>Kode Pos</b></td>
						<td><b>Kurir</b></td>
						<td><b>Jumbel</b></td>
						<td><b>Ukuran</b></td>
						<td><b>Pembayaran</b></td>
						<td><b>Total Bayar</b></td>
						<td></td>
					</tr>
					<tr>
						<td colspan="13"><hr name="hitam"></td>
					</tr>
					<?php
					foreach($cek as $prodak){
						?>
							<tr align="center">
								<?= $this->session->flashdata('pesan');?>
								<td><img src="<?= base_url('assets/');?>tokobray/img/prodaklaki1.jpeg?>" width="200"></td>
								<td><?php echo $prodak->kd_prodak;?></td>
								<td><?php echo $prodak->nama_prodak;?></td>
								<td><?php echo $prodak->member;?></td>
								<td><?php echo $prodak->alamat;?></td>
								<td><?php echo $prodak->kota;?></td>
								<td><?php echo $prodak->kd_pos;?></td>
								<td><?php echo $prodak->kurir;?></td>
								<td><?php echo $prodak->jumbel;?></td>
								<td><?php echo $prodak->ukuran;?></td>
								<td><?php echo $prodak->pembayaran;?></td>
								<td><?php echo $prodak->total_bayar;?></td>
							</tr>
						<?php
					}
					?>
				</table>
			</div>
		</div>