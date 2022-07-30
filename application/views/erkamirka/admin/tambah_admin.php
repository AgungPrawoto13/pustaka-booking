<div class="container text-dark">
	<form action="<?= base_url('erkamirka/admin/tambah_admin');?>" method="post">
		<div class="row">
			<div class="col-sm-12 text-center">
				<i class="fas fa-user-circle fa-3x"></i>
				<h3>Tambah Admin</h3>
			</div>
			<div class="col-sm-12">
				<hr>	
			</div>
			<div class="col-sm-10 ml-auto mt-3">
				<div class="form-group">
					<div class="row">
						<div class="col-sm-3">
							<label>Username</label>
						</div>
						<div class="col-sm-6">
							<input type="text" name="username" class="form-control" placeholder="Username" value="<?= set_value('username');?>"><?= form_error('username','<small class="text-danger">','</small>');?>
						</div>
					</div>
				</div>
				<div class="form-group">
					<div class="row">
						<div class="col-sm-3">
							<label>Email</label>
						</div>
						<div class="col-sm-6">
							<input type="text" name="email" class="form-control" placeholder="Email" value="<?= set_value('email');?>"><?= form_error('email','<small class="text-danger">','</small>');?>
						</div>
					</div>
				</div>
				<div class="form-group">
					<div class="row">
						<div class="col-sm-3">
							<label>Divisi</label>
						</div>
						<div class="col-sm-6">
							<select class="form-control btn-outline-primary" name="divisi">
								<option value="1">Sales</option>
								<option value="2">Finance</option>
								<option value="3">Produksi</option>
								<option value="4">Operational</option>
							</select>
						</div>
					</div>
				</div>
				<div class="form-group">
					<div class="row">
						<div class="col-sm-3">
							<label>Password</label>
						</div>
						<div class="col-sm-6">
							<div class="input-group">
								<input type="password" name="password1" class="form-control" placeholder="Password">
								<div class="input-group-append">
									<div class="input-group-text">
										<i class="fas fa-eye"></i>
									</div>
								</div>
							</div><?= form_error('password1','<small class="text-danger">','</small>');?>
						</div>
					</div>
				</div>
				<div class="form-group">
					<div class="row">
						<div class="col-sm-3">
							<label>Ulangi Password</label>
						</div>
						<div class="col-sm-6">
							<input type="password" name="password2" class="form-control" placeholder="Ulangi Password"><?= form_error('password2','<small class="text-danger">','</small>');?>
						</div>
					</div>
				</div>
				<div class="form-group ml-5">
					<div class="row">
						<div class="col-sm-4">
							<button class="btn btn-danger btn-block" type="reset">Batal</button>
						</div>
						<div class="col-sm-4">
							<button class="btn btn-primary btn-block" type="submit">Simpan</button>
						</div>
					</div>
				</div>
			</div>
		</div>
</div>