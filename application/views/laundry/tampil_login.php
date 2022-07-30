<div class="content">
	<div class="form-login">
		<div class="gambar_login">
			<div class="text">
				<span>Laundry</span>
				<br>
				<span>Clean Express</span>
			</div>
		</div>
		<!-- <i class="far fa-hand-point-down fa-4x"></i> -->

		<div class="form">
			<div class="login">
				<span>Login Admin</span>
			</div>
			<div class="formulir">
				<?= $this->session->flashdata('pesan');?>
				<form action="<?= base_url('laundry/login_admin');?>" method="post">
					<div class="label">
						<span class="lead">Username :</span>
						<input type="text" name="username" id="username" value="<?= set_value('username');?>">
						<br>
						<?= form_error('username','<small class="text-danger ukuran">','</small>');?>
					</div>
					<br>
					<div class="label">
						<span class="lead">Password :</span>
						<input type="password" name="password" id="password">
						<br>
						<?= form_error('password','<small class="text-danger ukuran">','</small>');?>
					</div>
					<hr class="my-4">
					<div class="tombol">
						<button type="submit" class="btn btn-primary">Masuk</button>
						<a href="<?= base_url('laundry/login_admin/daftar');?>" class="btn btn-primary">Daftar</a>
					</div>
				</form>
				<div class="tombol my-3">
					<a href="<?= base_url('laundry/login_admin/lupa_password');?>">Lupa Password ?</a>
				</div>
			</div>
		</div>
	</div>
</div>