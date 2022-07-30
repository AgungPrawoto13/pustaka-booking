<div class="alert alert-<?php echo "danger"; ?>">
    <strong>Edit Profil</strong>
</div>
<form action="<?= base_url('futsal/member_futsal/edit_profile');?>" method="post" role="form">
	<div class="form-group">
		<label class="control-label" for="namalengkap">Nama Lengkap:</label>
		<input type="text" id="namalengkap" placeholder="Nama Lengkap" name="namalengkap" value='<?php echo $member[0]->nama_lengkap;?>' class="form-control input-small" />
		<?= form_error('namalengkap','<small class="text-danger">','</small>');?>
	</div>
	<div class="form-group">
		<label class="control-label" for="jeniskelamin">Jenis Kelamin:</label>
		<select name="jeniskelamin" class="form-control input-small" required >
			<option value="">Silahkan Dipilih...</option>
			<option value="Laki-Laki" <?php if($member[0]->jenis_kelamin=="Laki-Laki"){echo"selected";} ?>>Laki-Laki</option>
			<option value="Perempuan" <?php if($member[0]->jenis_kelamin=="Perempuan"){echo"selected";} ?>>Perempuan</option>
		</select>
		<?= form_error('jeniskelamin','<small class="text-danger">','</small>');?>
	</div>
	<div class="form-group">
		<label class="control-label" for="email">Email:</label>
		<input type="text" id="email" placeholder="Email" name="email" value='<?php echo $member[0]->email; ?>' class="form-control input-small" required />
		<?= form_error('email','<small class="text-danger">','</small>');?>
	</div>
	<div class="form-group">
		<label class="control-label" for="password">Password:</label>
		<input type="password" id="password" placeholder="Password" name="password" class="form-control input-small" value="<?php echo $member[0]->password;?>"><?= form_error('password','<small class="text-danger">','</small>');?>
	</div>
	
	<div class="form-group">
		<label class="control-label" for="handphone">No Hp:</label>
		<input type="text" id="handphone" placeholder="Handphone" name="handphone" value='<?php echo $member[0]->hp; ?>' class="form-control input-small" />
		<?= form_error('handphone','<small class="text-danger">','</small>');?>
	</div>
		
	<div class="form-group">
		<label class="control-label" for="handphone">Alamat:</label>
		<textarea class="form-control input-small" name='alamat'><?php echo $member[0]->alamat; ?></textarea>
		<?= form_error('alamat','<small class="text-danger">','</small>');?>
	</div>		
	<div class="form-group">
		<div style="margin-left:15px">
			<button type="submit" class="btn btn-primary" name="register" >Ubah Profil</button>
		</div>
		<br>
	</div>
</form>
