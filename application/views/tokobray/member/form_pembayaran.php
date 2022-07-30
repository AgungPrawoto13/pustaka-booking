		<div id="content">
			<div id="kontak">
				<div class="judul">
					<span>Pembayaran</span>
				</div>
				<form action="<?= base_url('tokobray/member/carabayar');?>" method="post">
					<div class="form_pembayaran">
						<?= $this->session->flashdata('pesan');?>
						<div class="pengingat">
							Total Bayar : <?php echo $total_bayar;?>
						</div>
						<div class="pembayaran1">
							<label>
								<input type="radio" name="pembayaran" value="BCA">BCA
							</label>
							<br>
							<label>
								<input type="radio" name="pembayaran" value="Mandiri">Mandiri
							</label>
							<br>
							<label>
								<input type="radio" name="pembayaran" value="Indomaret">Indomaret
							</label>
						</div>

						<div class="pembayaran2">
							<label>
								<input type="radio" name="pembayaran" value="Bayar di counter">Bayar di counter
							</label>
							<br>
							<label>
								<input type="radio" name="pembayaran" value="Bayar di tempat">Bayar di tempat
							</label>
							<br>
							<label>
								<input type="radio" name="pembayaran" value="Alfamart">Alfamart
							</label>
						</div>

						<div class="total_bayar">
							<a href="<?= base_url('tokobray/member/beli?kd_prodak='.$this->session->userdata('kd_prodak'));?>" class="btn btn-primary">Kembali</a>
							<button class="btn btn-primary">Kirim</button>
						</div>
					</div>
				</form>
			</div>
		</div>