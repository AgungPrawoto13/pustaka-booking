<!DOCTYPE html>
<html>
<head>
	<title>Halaman Masuk</title>
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/');?>css/style3.css">
</head>
<body>
	<div class="container">
		<div class="header cf">
			<i><h1 class="judul">Soccer Rooms
				<form class="search-form">
					<input type="text" placeholder="Search Soccer Rooms">
					<button>Search</button>
				</form>
				</h1></i>
			<div class="nav">
				<ul class="menu">
					<a href="<?= base_url('website/C_Membuat_website');?>"><li>Home</li></a>
					<li>Jersey
						<ul class="subMenu">
							<a href="#"><li> Barcelona</li></a>
							<a href="#"><li>Real Madrid</li></a>
							<a href="#"><li>Bayern Munich</li></a>
							<a href="#"><li>Manchester United</li></a>
							<a href="#"><li>Manchester City</li></a>
							<a href="#"><li>Liverpool</li></a>
						</ul>
					</li>
					
					<li>Sepatu Futsal
						<ul class="subMenu">
							<a href="#"><li>Nike</li></a>
							<a href="#"><li>Adidas</li></a>
							<a href="#"><li>Puma</li></a>
						
						</ul>
					</li>
					<li>Pemesanan
						<ul class="subMenu">
							<a href="#"><li>Cara Memesan</li></a>
							<a href="#"><li>Metode Pembayaran</li></a>
							<a href="#"><li>Syarat & Ketentuan</li></a>
						</ul>
					</li>
					<a href="#"><li>Masuk</li></a>
				</ul>
			</div>
		</div>
	<div class="kotak-masuk">
		<div class="judul-masuk">
			Silahkan Login
		</div>

		<div class="masuk">
			<?= $this->session->flashdata('pesan');?>
			<form action="<?= base_url('website/C_Membuat_website/tampil_login');?>" method="POST">
				<input type="text" name="username" placeholder="Masukan Username" value="<?= set_value('username');?>"> <?= form_error('username','<small class="text-danger pl-3">','</small>');?>
				<input type="password" name="password" placeholder="Masukan Password" value="<?= set_value('password');?>"><?= form_error('password','<small class="text-danger pl-3">','</small>');?>
				<input type="submit" name="masuk" value="Masuk">
			</form>
			 
		</div><br><br><br><br>


				<div class="masuk-sosmed">
			 		Belum Akun ?<a href="halaman-daftar.php">Daftar-> </a><br><br>
					<p>Daftar Dengan :</p>
					<a href="https://www.facebook.com/ninik.su?_rdc=1&_rdr"><img src="<?= base_url('assets/');?>css/New folder/images/facebook-logo.jpg"></a>
					<a href="https://www.instagram.com/niniksulis16/"><img src="<?= base_url('assets/');?>css/New folder/images/instagram-logo.jpg"></a>
				</div>
	</div>
	<div class="marquee">
			<marquee>Info Lebih Lanjut <img src="<?= base_url('assets/');?>css/New folder/images/66.png"> 081288738673</marquee>
		</div>
		<div class="footer">
			<p>class="copy">Copyright 2019. Soccer Rooms | TOKO ONLINE TERPERCAYA</p>
		</div>
	</div>

</body>
</html>