		<div id="content">
			<div id="kontak">
				<div class="judul">
					<span>Upload bukti pembayaran</span>
				</div>

				<form action="<?= base_url('tokobray/member/selesai');?>" method="post">
					<div class="form_pembayaran">
						<input type="file">

						<div class="total_bayar">
							<button type="submit" class="btn btn-primary">Kirim</button>
						</div>
					</div>
				</form>
			</div>
		</div>