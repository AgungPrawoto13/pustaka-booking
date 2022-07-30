		<div id="content">
			<div id="tampilan_login">
				<div class="form1">
					<span>Daftar Baru</span>
					<div class="form_isi">
						<?= $this->session->flashdata('pesan');?>
						<form action="<?= base_url('tokobray/pengunjung/daftar');?>" method="post">
							<div class="form_daftar">
								<div class="isi1">
									<input type="text" name="nama_depan" placeholder="Nama Depan" id="nama_depan" value="<?= set_value('nama_depan');?>">
									<input type="text" name="nama_belakang" placeholder="Nama Belakang" id="nama_belakang" value="<?= set_value('nama_belakang');?>">
									<br>
									<?= form_error('nama_depan','<small class="text-danger pl-1 isi1">','</small>');?>
									<?= form_error('nama_belakang','<small class="text-danger pl-0 isi1">','</small>');?>
								</div>
								<div class="isi2">
									<input type="text" name="email" placeholder="Email" id="email" value="<?= set_value('email');?>">
									<?= form_error('email','<small class="text-danger pl-3">','</small>');?>
									<input type="password" name="sandi" placeholder="Kata Sandi" id="sandi">
									<?= form_error('sandi','<small class="text-danger pl-3">','</small>');?>
									<input type="password" name="sandi" placeholder="Kata Sandi" id="sandi">
									<?= form_error('sandi','<small class="text-danger pl-3">','</small>');?>
								</div>
								<div class="isi3">
									<input type="radio" name="kelamin" value="laki - laki">Laki - Laki
									<input type="radio" name="kelamin" value="perempuan">Perempuan
								</div>
								<div class="simpan_login">
									<input type="submit" value="Daftar" class="btn btn-primary"><input type="reset" value="Batal" class="btn btn-primary">
								</div>
								<div class="pengait">
									<a href="<?= base_url('tokobray/pengunjung/masuk');?>">Udh jadi member ?</a>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>