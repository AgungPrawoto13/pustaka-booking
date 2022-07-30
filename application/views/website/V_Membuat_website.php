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
		
					<li>Pemesanan
						<ul class="subMenu">
							<a href="<?= base_url('website/C_Cara-memesan');?>"><li>Cara Memesan</li></a>
							<a href="<?= base_url('website/C_Metode-pembayaran');?>"><li>Metode Pembayaran</li></a>
							<a href="<?= base_url('website/C_Syarat&ketentuan');?>"><li>Syarat & Ketentuan</li></a>
						</ul>
					</li>
				<a href="<?= base_url('website/C_Membuat_website/logout');?>"><li>Keluar</li></a>
			</ul>
			</div>
		</div>
			<div class="recommended"><!--pembuka-->
			<img src="<?= base_url('assets/');?>css/New folder/images/44.jpg">
			
		</div><!--end pembuka-->	
		<div class="pemula"><!--pemula-->
			<div class="widget">
				<div class="TokoTerbaik"><!--TokoTerbaik-->
					<h4>Toko Jersey Online Terbaik</h4>
					<p>Soccer Rooms Indonesia menjual Jersey dan sepatu futsal dan menyediakan layanan pengiriman dengan harga terjangkau dalam mata uang IDR. Soccer Rooms adalah Toko Online Terbaik Indonesia - terdiri dari Soccer Rooms Jakarta, Soccer Rooms Bandung, Soccer Rooms Surabaya, Soccer Rooms Medan dan seluruh Indonesia - yang menawarkan jasa pengiriman di hari yang sama dan pada hari berikutnya ke Indonesia dan negara manapun di seluruh dunia. Soccer Rooms datang sebagai akibat dari tidak adanya merek tunggal yang kuat di Indonesia. Pengguna online merasa perlu untuk menemukan situs Toko Jersey dan sepatu yang terbaik di kota-kota besar Indonesia dengan kualitas, pengiriman 24 jam terpercaya yang dapat diandalkan untuk mengirim jersey dan sepatu futsal.</p>
				</div><!--akhir TokoTerbaik-->
				<div class="JenisBahan"><!--JenisBahan-->
					<h3>Jenis Bahan Jersey</h3>
					<p>Memilih bahan jersey untuk pembuatan kaos seragam olahraga tentu tidak boleh asal pilih. Karena bisa bisa kaos yang di hasillkan dari bahan yang tidak sesuai dengan kondisi iklim justru akan membuat aktifitas olahraga anda akan sedikit terganggu kenyamanannya.</p>
					<h4>Ada 3 Bahan Jersey</h4>
					<p>1. Bahan Drifit</p>
					<p>Bahan Drifit adalah merupakan bahan kaos jersey yang terbuat dari serat kain polyester, nilon dan campuran katun. Bahan ini mempunyai kelebihan tersendiri, ringan, adem dan juga kini sangat di gemari oleh mereka yang maniak olahraga.</p>
					<p>Ada dua jenis bahan drifit yang di gunakan untuk membuat kaos jersey dan itu memiliki kualitas berbeda.</p>
					<p>Drifit Grade Ori</p>
					<p>Bahan Drifit Grade ori adalah bahan jersey yang biasa dipakai oleh jenis jenis kaos jersey import yang sekarang banyak beredar dan tentunya paling banyak disukai oleh konsumen. Bertekstur halus, elastis, agak mengkilat tetapi adem kalau dipakai. Terlihat bagus kalau pada bagian nomor dan nama club atau nama pemain menggunakan sablon polyflex.</p>
					<p>Drifit Lokal</p>
					<p>Bahan Drifit Lokal adalah bahan jersey yang bisa di pakai sebagai cara alternatif untuk menggantikan pilihan lain dari drifit grade ori. Spesifikasi bahan relatif sama, namun sedikit berbeda pada tekstur karena terdapat lubang pori-pori sehingga sirkulasi keringat cepat menguap. Bahan jersey jenis drifit lokal ini relatif populer karena masih trend selama belasan tahun dan harganya yang ekonomis.</p>
					<p>2. Bahan Serena</p>
					<p>Bahan Serena adalah bahan jersey yang memiliki tekstur rata halus dan lembut, jenis bahan serena yang di gunakan untuk pembuatan kaos jersey pun ada banyak sekali kini model dan jenisnya. Karena Teksturnya yang halus dan lembut sehingga bahan serena ini akan sangat cocok sekali jika untuk di buat kaos jersey model fit body</p>	
					<p>3. Bahan Paragon</p>
					<p>Bahan paragon adalah salah satu nama dan jenis bahan jersey yang merupakan bahan  paling banyak di gunakan untuk pembuatan jersey basket. Bahan paragon berbeda dengan dua jenis bahan di atas karena dia tidak elastis dan cenderung sedikit lebih hangat. Sehingga jika akan membuat kaso jersey yang fit body tidak di rekomendasikan </p>
				</div><!--akhir JenisBahan-->
				
			</div>
			<div class="TentangKami"><!--TentangKami-->
				<h2>Tentang Kami</h2>
				<p>Soccer Rooms muncul sebagai akibat dari tidak adanya merek jersey yang terbaik di Jakarta. Pengguna online merasa kesulitan untuk menemukan situs toko online dengan pengiriman 24 jam tepercaya. Meskipun ada banyak toko jersey dan sepatu lokal berbakat, sebagian besar tidak ingin menghabiskan jutaan untuk infrastruktur untuk membangun situs yang stabil dan aman yang memungkinkan dan mengelola transaksi E-commerce. Kami Soccer Rooms, toko jersey dan sepatu online murah di Jakarta menyediakan beragam jenis jersey dan sepatu futsal. Seluruh jersey dan sepatu futsalyang kami sediakan, di jamin dengan harga yang murah serta berkualitas.
				</p><br>
			
			</div><!--Akhir TentangKami-->	
				<div class="sosmed"><!--Sosmed-->
					<p>Contact & Follow Us :</p><br>
					<a href="https://www.facebook.com"><img src="<?= base_url('assets/');?>css/New folder/images/facebook-logo.jpg"></a>
					<a href="https://twitter.com"><img src="<?= base_url('assets/');?>css/New folder/images/55.png"></a>
					<a href="https://www.instagram.com/mr_doer11/"><img src="<?= base_url('assets/');?>css/New folder/images/instagram-logo.jpg"></a>
					
				</div><!--Akhir Sosmed-->
		</div><!--akhir pemula-->
		<div class="marquee">
			<marquee>Info Lebih Lanjut  <img src="<?= base_url('assets/');?>css/New folder/images/90.jpg">  081288738673</marquee>
		</div>
		<div class="footer">
			<p class="copy">Copyright 2019. Soccer Rooms | TOKO ONLINE TERPERCAYA </p>
			
		</div>
		</div>
		

</body>	
</html>