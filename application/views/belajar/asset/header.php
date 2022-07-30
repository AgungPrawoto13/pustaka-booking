<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="<?= base_url('assets/');?>bootstrap-4.5.0/css/bootstrap.css">
	<link rel="stylesheet" href="<?= base_url('assets/');?>kreasi/style.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/');?>vendor/fontawesome-free/css/all.css">
	<title><?php echo $judul;?></title>
</head>
<body id="page-top">
	<!-- fungsi dari fixed-top agar supaya ketika halaman di scroll ke bawah naigasi nya juga ikut ke bawah -->
	<?= $this->session->flashdata('pesan');?>
	<nav class="navbar navbar-expand-lg bg-transparent fixed-top " id="mainNav">
		<div class="container">
			<a class="navbar-brand text-white" href="#Website">Website</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="navbar-collapse collapse" id="navbarNavDropdown">
				<!-- fungsi dari ml-auto agar tulisan navigasi nya berpindah tempat kekiri -->
				<ul class="navbar-nav ml-auto">
					<li class="nav-item active">
						<a class="nav-link js-scroll-trigger text-white" href="#">Beranda<span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link js-scroll-trigger text-white" href="#">Tentang</a>
					</li>
					<li>
						<a class="nav-link text-white" href="#" type="button" data-target="#cari" data-toggle="dropdown">
							<i class="fas fa-search"></i>
						</a>
					</li>
					<li>
						<?php
						if($this->session->userdata('email')){
							?>
								<a class="nav-link text-white" href="#">
									<i class="fas fa-shopping-cart"></i>
								</a>
							<?php
						}else{
							?>
								<a class="nav-link text-white" href="#" type="button" data-toggle="modal" data-target="#MasukDulu">
									<i class="fas fa-shopping-cart"></i>
								</a>
							<?php
						}
						?>
					</li>
					<li class="nav-item">
						<a href="#" class="nav-link text-white" type="button" data-toggle="modal" data-target="#MasukDulu">Login</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<div class="dropdown-menu" id="cari">
		<form action="#" method="post">
			<input type="text" name="cari" class="form-control fixed-top">
			<input type="submit" value="cari" class="fixed-top btn btn-primary">
		</form>
	</div>
	<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
			<li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
			<li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
		</ol>
		<div class="carousel-inner">
			<div class="carousel-caption d-none d-md-block teks">
				<h1 class="display-4"><span class="font-weight-bold">Contoh Jumbotron</span></h1>
				<p class="lead">ini adalah jumbotron, nah fungsi dari jumbotron ini adalah sebagai informasi darin website kita, jumbotron ini bisa berupa gambar atau tulisan seperti ini xixi</p>
				<hr class="my-4">
				<p class="lead">ini adalah contoh dari jumbotron ya kawan, jadi sebenarnya saya cuman iseng bikin jumbotron ini </p>
				<a class="btn font-weight-bold" href="#" role="button">informasi selengkapnya</a>
			</div>
			<div class="carousel-item active">
				<img src="<?= base_url('assets/');?>kreasi/img/Bromind-cafe.jpg" class="d-block w-100" alt="gambar 1">
			</div>
			<div class="carousel-item">
				<img src="<?= base_url('assets/');?>kreasi/img/kopi.jpg" class="d-block w-100" alt="gambar 2">
			</div>
			<div class="carousel-item">
				<img src="<?= base_url('assets/');?>kreasi/img/langit3.jpeg" class="d-block w-100" alt="gambar 3">
			</div>
		</div>
		<a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>