		<div id="content">
			<div id="kontak">
				<div class="form_kontak">
					<form action="<?= base_url('tokobray/member/simpan_ubah_profile');?>" method="post">
						<div class="gambar_user">
							<img src="<?= base_url('assets/');?>tokobray/user/<?php echo $user[0]->gambar_user;?>" width="150">
							<input type="file" class="fas fa-pencil-alt" name="gambar">
							<div class="nama_user">
								<?= $this->session->userdata('nama_user');?>
							</div>
						</div>
						<div class="garis">
							<hr>
						</div>
						<div class="pengisian_beli">
							<label>Nama Depan</label>
							<br>
							<input name="nama_depan" type="text" value="<?php echo $user[0]->nama_depan;?>">
							<br>
							<label>Nama Belakang</label>
							<br>
							<input type="text" name="nama_belakang" value="<?php echo $user[0]->nama_belakang;?>">
							<br>
							<label>Email</label>
							<br>
							<input type="text" name="email_user" value="<?php echo $user[0]->email;?>">
							<br>
							<label>Alamat</label>
							<br>
							<input type="text" name="alamat" value="<?php echo $user[0]->alamat;?>">
						</div>
						<div class="pengisian_beli2">
							<label>Ganti Kata Sandi :</label>
							<br>
							<input type="password" name="password1">
							<br>
							<label>Konfirmasi Kata Sandi :</label>
							<br>
							<input type="password" name="password2">
							<br>
							<label>Jenis Kelamin</label>
							<br>
							<input type="radio" name="kelamin" value="Laki">Laki - Laki<input type="radio" name="kelamin" value="perempuan">Perempuan
						</div>
						<div class="tombol_beli">
							<button type="reset" class="btn btn-primary">Batal</button>
							<button type="submit" class="btn btn-primary">Konfirmasi</button>
						</div>
					</form>
				</div>
			</div>
		</div>