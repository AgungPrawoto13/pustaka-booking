<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/');?>bootstrap-4.5.0/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/');?>icon web/css/all.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/');?>laundry/admin/style_admin.css">
	<title>Laundry | <?php echo $judul; ?></title>
</head>
<body>
	<div id="wrapper">
		<div class="header">
			<div class="text1">
				<b>APLIKASI LAUNDRY</b>
				<span class="fas fa-align-justify"></span>
			</div>
			<div class="text2">
				<b>Selamat Datang <?php echo $user;?></b>
			</div>
			<i class="fas fa-user-circle fa-2x"></i>
		</div>

		<div id="sidebar">
			<ul id="menu">
				<li>
					<a href="<?= base_url('laundry/admin');?>" class="btn btn-transparent">
						<i class="fas fa-user-circle fa-3x">
						</i>
						<b><?php echo $user;?></b>
						<br>
						<span class="text1">Admin</span>
					</a>
				</li>

				<hr>

				<li>
					<a href="<?= base_url('laundry/admin');?>" class="btn btn-transparent">
						<i class="fas fa-home fa-2x"></i>
						<b>Home</b>
					</a>
				</li>
				<li>
					<a href="#" class="btn btn-transparent tutup">
						<i class="fas fa-book-open fa-2x"></i>
						<b>Transaksi Laundry</b>
					</a>
					<ul class="sub">
						<li>
							<a href="<?= base_url('laundry/admin/form_transaksi');?>" class="btn btn-transparent">
								<h5>Form Transaksi Laundry</h5>
							</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="#" class="btn btn-transparent tutup">
						<i class="fas fa-folder fa-2x"></i>
						<b>Data Transaksi</b>
					</a>
					<ul class="sub">
						<li>
							<a href="<?= base_url('laundry/admin/transaksi');?>" class="btn btn-transparent">
								<h5>Cek Transaksi</h5>
							</a>
						</li>
						<li>
							<a href="#" class="btn btn-transparent">
								<h5>Sudah Bayar</h5>
							</a>
						</li>
						<li>
							<a href="<?= base_url('laundry/admin/belum_bayar');?>" class="btn btn-transparent">
								<h5>Belum Bayar</h5>
							</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="#" class="btn btn-transparent tutup">
						<i class="fas fa-folder-open fa-2x"></i>
						<b>Data Pakaian</b>
					</a>
					<ul class="sub">
						<li>
							<a href="<?= base_url('laundry/admin');?>" class="btn btn-transparent">
								<h5>Dalam Proses Laundry</h5>
							</a>
						</li>
						<li>
							<a href="<?= base_url('laundry/admin');?>" class="btn btn-transparent">
								<h5>Selesai Laundry</h5>
							</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="#" class="btn btn-transparent tutup">
						<i class="far fa-folder-open fa-2x"></i>
						<b>Data Pelanggan</b>
					</a>
					<ul class="sub">
						<li>
							<a href="<?= base_url('laundry/admin');?>" class="btn btn-transparent">
								<h5>Daftar Pelanggan</h5>
							</a>
						</li>
					</ul>
				</li>

				<hr>

				<li>
					<a href="<?= base_url('laundry/admin/keluar');?>" class="btn btn-transparent">
						<i class="fas fa-sign-out-alt fa-2x"></i>
						<b>Keluar</b>
					</a>
				</li>
			</ul>
		</div>
	</div>

	<div class="judul">
		<span><b>Aplikasi Laundry Clean Express</b></span>
	</div>