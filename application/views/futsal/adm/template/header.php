<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title><?php echo $judul;?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="shortcut icon" href="../img/favicon.png"/>
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/');?>bootstrap-4.5.0/css/bootstrap.css">
	<link href="<?= base_url('assets/');?>bootstrap-4.5.0/css/bootstrap.min.css" rel="stylesheet" media="screen">
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/');?>futsal/style.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/');?>vendor/fontawesome-free/css/all.css">

	<style>
		body{
			background-image: url(http://localhost/pustaka-booking/assets/futsal/image/body.jpg);
			background-repeat: repeat;
			background-attachment: fixed;
		}
	</style>
</head>

<body>
	<div class="container">
		<div class="navbar navbar-fixed-top">
			<div class="navbar-inner navigasi">
	            <!-- Komponen navbar -->	
				<ul class="nav pull-left">
					<li ><a href="<?= base_url('futsal/adm/admin_futsal');?>"><b class="text-error"> Home</b></a></li>
					<li><a href="<?= base_url('futsal/adm/admin_futsal/member');?>" ><b  class="text-error"> Data Member </b></a></li>
					<li><a href="<?= base_url('futsal/adm/admin_futsal/lapangan');?>"><b  class="text-error"> Data Lapangan</b></a></li>
					<li><a href="<?= base_url('futsal/adm/admin_futsal/pemesanan');?>"><b  class="text-error"> Data Pemesanan</b></a></li>
					<li><a href="<?= base_url('futsal/adm/admin_futsal/laporan');?>"><b  class="text-error"> Laporan Pendapatan</b></a></li>
					<li><a href="<?= base_url('futsal/adm/admin_futsal/konfirmasi');?>"><b  class="text-error"> Data Konfirmasi</b></a></li>
					<li><a href="<?= base_url('futsal/adm/admin_futsal/log_out');?>"><b  class="text-error"> Logout</b></a></li>
				</ul>
			</div>
		</div>
	</div>