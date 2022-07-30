		<div id="content">
			<div id="tampilan_login">
				<div class="form1">
					<span>Lupa Kata Sandi</span>
					<div class="form_isi">
						<?= $this->session->flashdata('pesan');?>
						<form action="<?= base_url('tokobray/pengunjung/lupa_sandi');?>" method="post">
							<div class="isi2_login">
								<label>Email</label>
								<br>
								<input type="text" name="email" placeholder="Email" id="email" value="<?php echo $cek=$this->session->userdata('email');?>">
								<br>
								<?= form_error('email','<small class="text-danger">','</small>');?>
								<br>
								<label>Kata Sandi</label>
								<br>
								<input type="text" name="sandi" placeholder="Kata Sandi" disabled value="<?php echo $cek=$this->session->userdata('sandi');?>">
								<br>
							</div>
							<div class="simpan_login">
									<input type="submit" value="Cek sandi" class="btn btn-primary"><input type="reset" value="Batal" class="btn btn-primary">
								</div>
								<div class="pengait">
									<a href="<?= base_url('tokobray/pengunjung/masuk'); $this->session->unset_userdata('email'); $this->session->unset_userdata('sandi');?>">Udh inget sandinya ?</a>
								</div>
						</form>
					</div>
				</div>
			</div>
		</div>