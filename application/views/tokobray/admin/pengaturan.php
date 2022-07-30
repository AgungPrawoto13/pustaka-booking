		<div id="isi">
			<div class="kotak">
				<div class="atur_gambar">
					<img src="<?= base_url('assets/');?>tokobray/img/admin.jpeg">
					<i class="fas fa-pencil-alt fa-2x"></i>
					<br>
					<span name="pengaturan">Admin</span>
				</div>

				<form action="<?= base_url('tokobray/admin_gudang/pengaturan');?>" method="post">
					<div class="tempat_isi">
						<div class="inpyut">
							<label>Nama</label>
							<input id="gaya" type="text" name="nama" id="nama">
							<?= form_error('nama','<small class="text-danger">','</small>');?>
						</div>
						<br>
						<div class="inpyut">
							<label>Profesi</label>
							<input id="gaya" type="text" name="profesi" id="profesi">
							<?= form_error('profesi','<small class="text-danger">','</small>');?>
						</div>
						<br>
						<div class="inpyut">
							<label>Usia</label>
							<input id="gaya" type="text" name="usia" id="usia">
							<?= form_error('usia','<small class="text-danger">','</small>');?>
						</div>
						<br>
						<div class="inpyut">
							<label>Email</label>
							<input id="gaya" type="text" name="email" id="email">
							<?= form_error('email','<small class="text-danger">','</small>');?>
						</div>
						<br>
						<div class="inpyut">
							<label>Ganti Kata Sandi</label>
							<input id="gaya" type="text" name="sandi1" id="sandi1">
							<?= form_error('sandi1','<small class="text-danger">','</small>');?>
						</div>
						<br>
						<div class="inpyut">
							<label>Ulangi Kata Sandi</label>
							<input id="gaya" type="text" name="sandi2" id="sandi2">
							<?= form_error('sandi2','<small class="text-danger">','</small>');?>
						</div>
						<br>
						<div class="inpyut">
							<label>Jenis Kelamin</label>
							<input type="radio" name="kelamin" value="laki">Laki - Laki
							<input type="radio" name="kelamin" value="perempuan">Perempuan
							<?= form_error('kelamin','<small class="text-danger">','</small>');?>
						</div>
					</div>
					<br>
					<div class="tombol_simpan">
						<button type="reset" class="btn btn-primary">Batal</button>
						<button type="submit" class="btn btn-primary">Konfirmasi</button>
					</div>
				</form>
				<div class="atur"></div>
			</div>
		</div>