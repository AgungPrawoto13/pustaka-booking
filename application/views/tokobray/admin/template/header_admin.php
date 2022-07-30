<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/');?>bootstrap-4.5.0/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/');?>tokobray/style_admin.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/');?>vendor/fontawesome-free/css/all.css">
	<title>Toko Bray | <?php echo $judul;?></title>
</head>
<body>
	<div id="wrapper">
		<div id="content">
			<div id="header">
				<img src="<?= base_url('assets/');?>tokobray/img/localbesar.jpeg">
				<i class="fas fa-bell fa-2x"></i>
			</div>
			<div id="sidebar">
				<div class="gambar_admin">
					<img src="<?= base_url('assets/');?>tokobray/img/admin.jpeg">
					<span>Admin</span>
				</div>
				<div class="tombol">
					<hr name="hitam">
					<a href="<?= base_url('tokobray/admin_kepala');?>"><span>Beranda</span></a>
					<a href="<?= base_url('tokobray/admin_kepala/stok_barang');?>"><span>Cek stok barang</span></a>
					<a href="<?= base_url('tokobray/admin_kepala/cek_penjualan');?>"><span>Cek penjualan</span></a>
					<a href="<?= base_url('tokobray/admin_kepala/riwayat_jual');?>"><span>Riwayat penjualan</span></a>
					<a href="<?= base_url('tokobray/admin_kepala/omset_bulanan');?>"><span>Omset penjualan</span></a>
					<a href="<?= base_url('tokobray/admin_kepala/#');?>"><span>Lihat web</span></a>
					<a href="<?= base_url('tokobray/admin_kepala/akun_admin');?>"><span>Akun admin</span></a>
					<a href="<?= base_url('tokobray/admin_kepala/akun_member');?>"><span>Akun member</span></a>
					<a href="<?= base_url('tokobray/admin_kepala/pengaturan');?>"><span>Pengaturan akun</span></a>
					<a href="<?= base_url('tokobray/admin_kepala/chat');?>"><span>Layanan chat</span></a>
					<hr name="hitam">
					<a href="<?= base_url('tokobray/admin_kepala/keluar');?>"><span>Keluar</span></a>
				</div>
			</div>
		

