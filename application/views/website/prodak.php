<!doctype html>
<html>
	<head>
		<title>Membuat Website - HTML</title>
	<link href="<?= base_url('assets/');?>css/style3.css" type="text/css" rel="stylesheet">

  	</head>
	<body>
	<div class="container">
		<div class="header">
			<i><h1 class="judul">Soccer Rooms
				<form class="search-form">
					<input type="text" placeholder="Google Search">
					<button>Search</button>
				</form>
				</h1></i>
			<div class="nav">
				<ul class="menu">
					<a href="<?= base_url('website/C_Home');?>"><li>Home</li></a>
					<li>Jersey
						<ul class="subMenu">
							<a href="<?= base_url('website/C_Prodak');?>"><li> Barcelona</li></a>
							<a href="<?= base_url('website/C_Prodak/real_madrid');?>"><li>Real Madrid</li></a>
							<a href="<?= base_url('website/C_Prodak/bayern_munich');?>"><li>Bayern Munich</li></a>
							<a href="<?= base_url('website/C_Prodak/manchester_united');?>"><li>Manchester United</li></a>
							<a href="<?= base_url('website/C_Prodak/manchester_city');?>"><li>Manchester City</li></a>
							<a href="<?= base_url('website/C_Prodak/liverpool');?>"><li>Liverpool</li></a>
						</ul>
					</li>
					
					<li>Sepatu Futsal
						<ul class="subMenu">
							<a href="<?= base_url('website/C_Prodak/sepatu_nike');?>"><li>Nike</li></a>
							<a href="<?= base_url('website/C_Prodak/sepatu_adidas');?>"><li>Adidas</li></a>
							<a href="<?= base_url('website/C_Prodak/sepatu_puma');?>"><li>Puma</li></a>
						
						</ul>
					</li>
		
					<li>pemesanan
						<ul class="subMenu">
							<a href="<?= base_url('website/C_cara-memesan');?>"><li>Cara Memesan</li></a>
							<a href="<?= base_url('website/C_metode-pembayaran');?>"><li>Metode Pembayaran</li></a>
							<a href="<?= base_url('website/C_syarat&ketentuan');?>"><li>Syarat & Ketentuan</li></a>
						</ul>
					</li>
				<a href="<?= base_url('website/C_Membuat_website/logout');?>"><li>keluar</li></a>
				</ul>
			</div>
		</div>
		<br>
		<br>
		<div class="kotak">
	   		<?php 
	   		foreach($barang as $barang){
	   			?>
					<form action="<?= base_url('website/C_Prodak/pemesanan');?>" method="post">
					<div class="subKotak">
						<div class="gambar-prodak"><img src="<?= base_url('assets/css/New folder/prodak/'.$barang->images) ?>"></div>
						<div class="nama-prodak">Nama Prodak : <?php echo $barang->nama_prodak;?></div>
						<div class="ukuran-prodak">Ukuran Prodak : <?php echo $barang->ukuran_prodak;?></div>
						<div class="harga-prodak">Harga Prodak : <?php echo $barang->harga_prodak;?></div>
						<div class="ukuran-prodak"><input type="hidden" value="<?php echo $barang->id_prodak;?>" name="id"></div>
						<div><input type="submit" value="pesan sekarang" class="btnpesan"></div>
					</div>
				</form>
	   			<?php
	   		}
	   		?>
		</div>
		<br>
		<br>
		
		<div class="marquee">
			<marquee>Info Lebih Lanjut <img src="<?= base_url('assets/');?>css/New folder/images/66.png"> 081288738673</marquee>
		</div>
		<div class="footer">
			<p class="copy">Copyright 2019. Soccer Rooms | TOKO ONLINE TERPERCAYA </p>
			
		</div>
	</div>

</body>	
</html>