		<div id="content">
			<div id="tampilan_login">
				<div class="form1">
					<span>Masuk</span>
					<div class="form_isi">
						<?= $this->session->flashdata('pesan');?>
						<form action="<?= base_url('tokobray/pengunjung/masuk');?>" method="post">
							<div class="isi2_login">
								<label>Email</label>
								<br>
								<input type="text" name="email" placeholder="Email" id="email" value="<?= set_value('email');?>">
								<br>
								<?= form_error('email','<small class="text-danger">','</small>');?>
								<br>
								<label>Kata Sandi</label>
								<br>
								<input type="password" name="sandi" placeholder="Kata Sandi" id="sandi">
								<br>
								<?= form_error('sandi','<small class="text-danger">','</small>');?>
							</div>
							<div class="simpan_login">
								<input type="submit" value="Masuk" class="btn btn-primary"><input type="reset" value="Batal" class="btn btn-primary">
							</div>
							<div class="pengait">
								<a href="<?= base_url('tokobray/pengunjung/lupa_sandi');?>">Lupa Kata Sandi ?</a>
								<br>
								<a href="<?= base_url('tokobray/pengunjung/daftar');?>">Daftar Baru</a>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>