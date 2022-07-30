		<div id="isi">
			<div class="kotak">
				<table border="0" width="100%">
					<tr align="center" >
						<td width="200"><b>Gambar</b></td>
						<td><b>Nama Barang</b></td>
						<td><b>Pemesan</b></td>
						<td><b>Harga</b></td>
						<td><b>Ukuran</b></td>
						<td></td>
					</tr>
					<tr>
						<td colspan="6"><hr name="hitam"></td>
					</tr>
					<tr align="center">
						<?= $this->session->flashdata('pesan');?>
						<td><img src="<?= base_url('assets/');?>tokobray/img/prodaklaki1.jpeg?>" width="200"></td>
						<td>prodaklaki1</td>
						<td>Rainhard</td>
						<td>Rp 90000</td>
						<td>L</td>
						<td><a href="#" class="btn btn-primary">Trima</a></td>
					</tr>
				</table>
			</div>
		</div>