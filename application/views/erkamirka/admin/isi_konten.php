<div class="container mt-5">
	<div class="row">
		<div class="col-9 col-sm-8 col-md-6 col-lg-5 col-xl-4 mx-auto">
			<div class="card">
				<div class="card-body">
					<form action="<?= base_url('erkamirka/autentifikasi');?>" method="post">
						<?= $this->session->flashdata('pesan');?>
						<div class="form-group">
							<label for="email">Email</label>
							<div class="input-group">
								<div class="input-group-prepend">
									<div class="input-group-text">
										<i class="fas fa-user"></i>
									</div>
								</div>
								<input type="text" name="email" class="form-control" placeholder="Masukan Email" id="email" value="<?= set_value('email');?>">
							</div>
							<?= form_error('email','<small class="text-danger">','</small>');?>
						</div>
						<div class="form-group mt-4">
							<label for="pas">Password</label>
							<div class="input-group">
								<div class="input-group-prepend">
									<div class="input-group-text">
										<i class="fas fa-lock"></i>
									</div>
								</div>
								<input type="password" name="password" class="form-control" placeholder="Masukan Password" id="pas">								
							</div>
							<?= form_error('password','<small class="text-danger">','</small>');?>
						</div>
						<div class="row mt-4">
							<div class="col-6 col-sm-6text-center">
								<button type="submit" class="btn btn-primary btn-block ">Login</button>
							</div>
							<div class="col-6 col-sm-6text-center">
								<button type="reset" class="btn btn-danger btn-block">Reset</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

