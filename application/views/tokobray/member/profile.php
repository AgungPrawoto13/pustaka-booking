		<div id="content">
			<div id="kontak">
				<div class="prodak_baru">
					<img src="<?= base_url('assets/');?>tokobray/img/<?php echo $baru[0]->gambar;?>">
					<img src="<?= base_url('assets/');?>tokobray/img/<?php echo $baru[3]->gambar;?>">
					<img src="<?= base_url('assets/');?>tokobray/img/<?php echo $baru[6]->gambar;?>">
					<img src="<?= base_url('assets/');?>tokobray/img/<?php echo $baru[9]->gambar;?>">
				</div>
				<hr name="garis">
				<div class="form_kontak">
					<?= $this->session->flashdata('pesan');?>
					<br>
					<div class="gambar_user">
						<img src="<?= base_url('assets/');?>tokobray/user/<?php echo $user[0]->gambar_user;?>" width="150">
						<a href="<?= base_url('tokobray/member/ubah_profile');?>">
							<i class="fas fa-pencil-alt" id="pensil"></i>
						</a>
						<div class="nama_user">
							<?= $this->session->userdata('nama_user');?>
						</div>
					</div>
					<div class="aktivitas">
						<a href="<?= base_url('tokobray/member/keranjang');?>" class="btn btn-primary">
							<i class="fas fa-shopping-cart fa-3x"></i>
						</a>
						<a href="<?= base_url('tokobray/member/cek_pengiriman');?>" class="btn btn-primary">
							<i class="fas fa-truck fa-3x"></i>
						</a>
						<a href="<?= base_url('tokobray/member/penerimaan');?>" class="btn btn-primary">
							<i class="fas fa-archive fa-3x"></i>
						</a>
					</div>
				</div>
			</div>
		</div>