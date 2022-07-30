<div class="modal fade" id="MasukDulu" aria-labelledby="MasukDulu">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Login</h5>
				<button data-dismiss="modal" type="button" class="close" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<?= $this->session->flashdata('pesan');?>
				<form action="<?= base_url('nyoba/membuat_website');?>" method="post">
					<div class="form-group">
						<div class="row">
							<div class="col-md-2">
								<label for="email">Email</label>
							</div>
							<div class="col-md-10">
								<div class="input-group">
									<div class="input-group-prepend">
										<div class="input-group-text">
											<i class="fas fa-user"></i>
										</div>
									</div>
									<input type="text" name="email" class="form-control" placeholder="Email" id="email" value="<?= set_value('email');?>">
								</div>
							</div>
							<div class="col-md-2"></div>
							<div class="col-md-4">
								<?= form_error('email','<small class="text-danger ">','</small>');?>
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="row">
							<div class="col-md-2">
								<label for="ps">Password</label>
							</div>
							<div class="col-md-10">
								<div class="input-group">
									<div class="input-group-prepend">
										<div class="input-group-text">
											<i class="fas fa-lock"></i>
										</div>
									</div>
									<input type="password" name="password" class="form-control" placeholder="Password" id="ps">
								</div>
							</div>
							<div class="col-md-2"></div>
							<div class="col-md-4">
								<?= form_error('password','<small class="text-danger ">','</small>');?>
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<button class="btn btn-secondary" type="button" data-toggle="modal" data-target="#Daftar" data-dismiss="modal">Daftar</button>
						<button class="btn btn-primary">Login</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="Daftar" aria-labelledby="Daftar">
	<div class="modal-dialog modal-dialog-scrollable">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Daftar Member</h5>
				<button type="button" data-dismiss="modal" class="close" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form action="<?= base_url('nyoba/membuat_website/daftar');?>" method="post">
					<div class="form-group">
						<div class="row">
							<div class="col-md-4">
								<label for="nm">Nama</label>
							</div>
							<div class="col-md-8">
								<input type="text" name="nama" class="form-control" placeholder="Nama" id="nm" value="<?= set_value('nama');?>"><?= form_error('nama','<small class="text-danger">','</small>');?>
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="row">
							<div class="col-md-4">
								<label for="alamat">Alamat</label>
							</div>
							<div class="col-md-8">
								<textarea id="alamat" name="alamat" class="form-control"></textarea>
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="row">
							<div class="col-md-4">
								<label for="lahir">Tempat Lahir</label>
							</div>
							<div class="col-md-8">
								<input type="text" name="tempat_lahir" class="form-control" placeholder="Tempat Lahir" id="lahir" value="<?= set_value('tempat_lahir');?>"><?= form_error('tempat_lahir','<small class="text-danger">','</small>');?>
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="row">
							<div class="col-md-4">
								<label for="tanggal">Tanggal Lahir</label>
							</div>
							<div class="col-md-8">
								<input type="date" name="tanggal_lahir" class="form-control" placeholder="Tanggal Lahir" id="tanggal" value="<?= set_value('tanggal_lahir');?>"><?= form_error('tanggal_lahir','<small class="text-danger">','</small>');?>
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="row">
							<div class="col-md-5">
								<label for="jenis">Jenis Kelamin</label>
							</div>
							<div class="col-md-3">
								<input type="radio" name="radio1" class="form-check-input" id="radio2" checked="">
								<label>Laki - laki</label>
							</div>
							<div class="col-md-4">
								<input type="radio" name="radio1" class="form-check-input" id="radio2">
								<label>Perempuan</label>
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="row">
							<div class="col-md-4">
								<label for="Email">Email</label>
							</div>
							<div class="col-md-8">
								<input type="text" name="email1" class="form-control" placeholder="Email" id="Email" value="<?= set_value('email1');?>">
								<?= form_error('email1','<small class="text-danger">','</small>');?>
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="row">
							<div class="col-md-4">
								<label for="ps1">Password</label>
							</div>
							<div class="col-md-8">
								<input type="password" name="password1" class="form-control" placeholder="Password" id="ps1">
								<?= form_error('password1','<small class="text-danger">','</small>');?>
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="row">
							<div class="col-md-4">
								<label for="ps2">Ulangi Password</label>
							</div>
							<div class="col-md-8">
								<input type="password" name="password2" class="form-control" placeholder="Ulangi Password" id="ps2">
								<?= form_error('password2','<small class="text-danger">','</small>');?>
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<button class="btn btn-secondary" type="button" data-toggle="modal" data-target="#MasukDulu" data-dismiss="modal">Sudah jadi member ?</button>
						<button class="btn btn-primary">Daftar</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="Gunung1" aria-labelledby="Gunung1">
	<div class="modal-dialog modal-dialog-scrollable">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Gunung Sindoro</h5>
				<button type="button" class="close" data-dismiss="modal">
					<span class="aria-hidden">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<img src="<?= base_url('assets/');?>kreasi/img/gunung.jpeg" class="card-img-top" alt="...">
			</div>
			<div class="modal-footer">
				<button class="btn btn-secondary" data-dismiss="modal">Tutup</button>
			</div>
		</div>
	</div>
</div>