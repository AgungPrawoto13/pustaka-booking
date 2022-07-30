<div class="content">
	<div class="form-login">
		<div class="gambar_login">
			<div class="text">
				<span>laundry</span>
				<br>
				<span>Clean Express</span>
			</div>
		</div>

		<div class="form">
			<div class="login">
				<span>Daftar Admin</span>
			</div>
			<div class="formulir">
				<?= $this->session->flashdata('pesan');?>
				<form action="<?= base_url('laundry/login_admin/daftar');?>" method="post">
					<div class="label">
						<span class="lead">Username :</span>
						<input type="text" name="username" placeholder="Masukan username" value="<?= set_value('username');?>" id="username">
						<?= form_error('username','<small class="text-danger ukuran">','</small>');?>
					</div>
					<br>
					<div class="label">
						<span class="lead">Hint :</span>
						<input type="text" name="hint" placeholder="Kata Keamanan" value="<?= set_value('hint');?>">
						<?= form_error('hint','<small class="text-danger ukuran">','</small>');?>
					</div>
					<br>
					<div class="label">
						<span class="lead">Password :</span>
						<input type="password" name="password" id="password" placeholder="Masukan Password">
						<?= form_error('password','<small class="text-danger ukuran">','</small>');?>
					</div>
					<hr class="my-4">
					<div class="tombol">
						<button type="submit" class="btn btn-primary">Daftar</button><button type="reset" class="btn btn-primary">Reset</button>
					</div>
				</form>
				<div class="tombol my-3">
					<a href="<?= base_url('laundry/login_admin');?>">Sudah jadi admin ?</a>
				</div>
			</div>
		</div>
	</div>
</div>