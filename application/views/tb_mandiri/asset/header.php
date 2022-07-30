<!DOCTYPE html>
<html>
<head>
	<title><?php echo $judul;?></title>
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/');?>bootstrap-4.5.0/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/');?>tb_mandiri/style.css?v=1.0">
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/');?>vendor/fontawesome-free/css/all.css">
	<link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top my-0">
		<a class="navbar-brand" href="#"><img src="<?= base_url('assets/');?>tb_mandiri/img/logo1.jpg" class="ml-5"></a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNav">
			<ul class="navbar-nav ml-auto mr-5 nunito">
				<li class="nav-item active">
					<a class="nav-link mr-4" href="#Beranda" data-dismiss="collapse">Beranda <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link mr-4" href="#TentangKami" data-dismiss="collapse">Tentang kami</a>
				</li>
				<li class="nav-item">
					<a class="nav-link mr-4" href="#Produk">Produk</a>
				</li>
				<li class="nav-item">
					<a class="nav-link mr-4" href="#Kontak">Kontak</a>
				</li>
				<li class="nav-item">
					<a class="nav-link mr-4" href="#" target="blank">Youtube</a>
				</li>
			</ul>
		</div>
	</nav>
</body>
</html>