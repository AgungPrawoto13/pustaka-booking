<div class="content">
	<div class="form-login">
		<div class="gambar_login">		
			<div class="text">
				<span>Laundry</span>
				<br>
				<span>Clean Express</span>
			</div>
		</div>

		<div class="form">
			<div class="login">
				<span>Lupa Password</span>
			</div>
			<div class="formulir">
				<?= $this->session->flashdata('pesan');?>
				<form action="<?= base_url('laundry/login_admin/lupa_password');?>" method="post">
					<div class="label">
						<span class="lead">Username :</span>
						<input type="text" name="username" placeholder="Masukan username" value="<?php echo $username;?>" id="username">
						<br>
						<?= form_error('username','<small class="text-danger ukuran">','</small>');?>
					</div>
					<br>
					<div class="label">	
						<span class="lead">Hint :</span>
						<input type="text" name="hint" placeholder="Kata Keamanan" value="<?php echo $hint;?>" id="hint">
						<br>
						<?= form_error('hint','<small class="text-danger ukuran">','</small>');?>
					</div>
					<br>
					<div class="label">
						<span class="lead">Password :</span>
						<input disabled value="<?php echo $password;?>">
					</div>	
					<hr class="my-4">
					<div class="tombol">
						<button class="btn btn-primary" type="submit">Cek</button>
						<button type="reset" class="btn btn-primary">Reset</button>
					</div>	
				</form>
				<div class="tombol my-3">
					<a href="<?= base_url('laundry/login_admin');?><?php $this->session->unset_userdata('username'); $this->session->unset_userdata('password'); $this->session->unset_userdata('hint'); ?>">Udah inget passwordnya ?</a>
				</div>
			</div>
		</div>
	</div>
</div>