<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="<?= base_url('assets/');?>bootstrap-4.5.0/css/bootstrap.css" >
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/');?>tokobray/style_pengunjung.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/');?>vendor/fontawesome-free/css/all.css">
	<title>Toko Bray | <?php echo $judul;?></title>
</head>
<body>
	<div id="wrapper">
		<div id="header">
			<img src="<?= base_url('assets/');?>tokobray/img/localkecil.jpeg">
			<ul class="navigasi">
				<li>
					<a href="<?= base_url('tokobray/pengunjung');?>">
						Beranda
					</a>
				</li>
				<li>
					<a href="<?= base_url('tokobray/pengunjung/tentang');?>">
						Tentang
					</a>
				</li>
				<li>
					<a href="<?= base_url('tokobray/pengunjung/pria');?>">
						Pria
					</a>
				</li>
				<li>
					<a href="<?= base_url('tokobray/pengunjung/wanita');?>">
						Wanita
					</a>
				</li>
				<li>
					<a href="<?= base_url('tokobray/pengunjung/kontak');?>">
						Kontak
					</a>
				</li>
				<li>
					<a href="#" class="btn btn-transparent btn-sm" data-toggle="collapse" data-target="#cari">
						<i class="fas fa-search"></i>
					</a>
				</li>
				<li>
					<?php
					if($this->session->userdata('email')){
						?>
							<a href="<?= base_url('tokobray/member/keranjang');?>">
								<i class="fas fa-shopping-cart"><?= $this->session->userdata('total');?></i>
							</a>
						<?php
					}else{
						?>
							<a href="<?= base_url('tokobray/pengunjung/masuk');?>">
								<i class="fas fa-shopping-cart"><?= $this->session->userdata('total');?></i>
							</a>
						<?php
					}
					?>
				</li>
				<li>
					<?php
					if($this->session->userdata('email')){
						$nama=$this->session->userdata('nama_user');
						?>
						<a href="<?= base_url('tokobray/member/profile');?>">
							<?php echo $nama;?>
						</a>
						<?php
					}else{
						?>
						<a href="<?= base_url('tokobray/pengunjung/masuk');?>">
							Masuk
						</a>
						<?php
					}
					?>
				</li>
				<li>
					<?php
					if($this->session->userdata('email')){
						?>
						<a href="<?= base_url('tokobray/member/keluar');?>">
							Keluar
						</a>
						<?php
					}else{
						?>
						<a href="<?= base_url('tokobray/pengunjung/daftar');?>">
							Daftar
						</a>
						<?php
					}
					?>
				</li>
			</ul>
			<div class="dropdown-menu" id="cari">
				<form action="<?= base_url('tokobray/pengunjung/daftar');?>" method="post">
					<input type="text" name="cari">
					<button type="submit" class="btn btn-primary btn-sm">Cari</button>
				</form>
			</div>
		</div>
		


