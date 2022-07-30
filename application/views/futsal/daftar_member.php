<form action="<?= base_url('futsal/autentifikasi');?>" method="post">

	<div class="form-group">
		<label class="control-label" for="namalengkap">Nama Lengkap:</label>
		<input type="text" id="namalengkap" placeholder="Nama Lengkap" name="namalengkap" class="form-control input-small" value="<?= set_value('namalengkap');?>"><?= form_error('namalengkap','<small class="text-danger">','</small>');?>
	</div>

	<div class="form-group">
		<label class="control-label" for="jeniskelamin">Jenis Kelamin:</label>
			<select name="jeniskelamin" class="form-control input-small" id="jeniskelamin" required value="<?= set_value('jeniskelamin');?>">
				<option value="">Silahkan Dipilih...</option>
				<option value="Laki-Laki">Laki-Laki</option>
				<option value="Perempuan">Perempuan</option>
			</select>
	</div>

	<div class="form-group">
		<label class="control-label" for="email">Email:</label>
		<input type="text" id="email" placeholder="Email" name="email" class="form-control input-small" value="<?= set_value('email');?>"><?= form_error('email','<small class="text-danger">','</small>');?>
	</div>
	
	<div class="form-group">
		<label class="control-label" for="handphone">No Hp:</label>
		<input type="text" id="handphone" placeholder="Handphone" name="handphone" class="form-control input-small" value="<?= set_value('handphone');?>"><?= form_error('handphone','<small class="text-danger">','</small>');?>
	</div>
	
	<div class="form-group">
		<label class="control-label" for="handphone">Alamat:</label>
		<textarea class="form-control input-small" name='alamat' id="alamat" value="<?= set_value('alamat');?>"></textarea><?= form_error('alamat','<small class="text-danger">','</small>');?>
	</div>	

	<div class="form-group">
		<label class="control-label" for="password">Password:</label>
		<input type="password" id="password" placeholder="Password" name="password" class="form-control input-small"><?=form_error('password','<small class="text-danger">','</small>');?>
	</div>		
					
	<div class="form-group">
		<div style="margin-left:15px">
			<button type="submit" class="btn btn-primary" name="register" >Daftar</button>
		</div>
		<br>
	</div>
</form>
