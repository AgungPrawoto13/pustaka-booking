<form class="form-horizontal" method="post" action="<?= base_url('futsal/autentifikasi/login_admin');?>">
	<div class="modal-body text-center">
		<div class="input-prepend">
			<?= $this->session->flashdata('pesan');?>
			<span class="add-on">
				<i class="fas fa-user"></i>
			</span>
			<input type="text" id="username" class="required input-large" name="username" placeholder="Username.." value="<?= set_value('username');?>">
			<br>
			<?= form_error('username','<small class="text-danger">','</small>');?>
		</div>
        <div class="row">
			&nbsp;
		</div>
		<div class="input-prepend">
			<span class="add-on">
				<i class="fas fa-lock"></i>
			</span>
			<input type="password" id="password" class="input-large" name="password" placeholder="Password..">
			<br>
			<?= form_error('password','<small class="text-danger">','</small>');?>
		</div>
        <div class="row">
			&nbsp;
		</div>
		<div>
			<button class="btn btn-small btn-info" type="submit" name="login" id="login">Login</button>
		</div>                       
	</div>
</form>