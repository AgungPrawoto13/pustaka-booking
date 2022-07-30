<!DOCTYPE html>
<html>
<head>
	<title>Membuat Website - HTML</title>
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/');?>css/style3.css">
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
							<a href="<?= base_url('website/C_cara-memesan');?>"><li>Cara Memesan</li></a>
							<a href="<?= base_url('website/C_metode-pembayaran');?>"><li>Metode Pembayaran</li></a>
							<a href="<?= base_url('website/C_syarat&ketentuan');?>"><li>Syarat & Ketentuan</li></a>
						</ul>
					</li>
					<a href="<?= base_url('website/C_Membuat_website/logout');?>"><li>Keluar</li></a>
				</ul>
			</div>
		</div>
		
			<div align="center" id="keranjang">
				<h2> Pesanan Dalam Keranjang </h2> 
			</div>
			<form action="<?= base_url('website/C_Prodak/update_pemesanan');?>" method="post">
			<table id="t01" align="center">
				<tr>
					<th colspan="2">Option</th>
					<th>Nama Prodak </th>
					<th>Ukuran Prodak</th>
					<th>Harga Prodak</th>
					<th>Qt</th>
					<th>Tot</th>		
			</tr>

			<?php 
			$hapus=-1;
			$item=$this->cart->contents();
			foreach($item as $barang){
				?>
 				<tr>
 					<td><a href="<?= base_url('website/C_Prodak/hapus_pesanan?id_prodak='.$barang['rowid']);?>" onclick="return confirm('Yakin hapus hapus ?')">Hapus</a></td>
 					<td><a href="<?= base_url('website/C_Prodak/update_pemesanan?id_prodak='.$barang['rowid']);?>">update</a></td>
 					<td><?php echo $barang['name'];?></td>
 					<td><?php echo $barang['id'];?></td>
 					<td><?php echo $barang['price'];?></td>
 					<td><input type="number" min="1" value="<?php echo $barang['qty'];?>" name="stock[]"></td>
 					<td><?php echo $barang['subtotal'];?></td>
 					<input type="hidden" value="<?php echo $barang['rowid'];?>" name="rowid[]">
 				</tr>
 				<?php
 			}
 			?>
 				<tr>
 					<td colspan=6" style="text-align:right; font-weight:bold">
 					<input class="saveimg" type="image" src="<?= base_url('assets/');?>css/New folder/prodak/save.png" name="update" alt="Save Button" id="kirim">
 					<input type="hidden" name="update" id="kirim"></td>
 					<td><?php echo $this->cart->total();?></td>

 				</tr>
			</table>
			</form>
<br>
<div id="lanjut">
	<a href="<?= base_url('website/C_Prodak/tambah_pesanan');?>">Lanjut Belanja</a>
</div>

<div class="pemesanan">
			<p>Isi Data Pesanan Anda dibawah ini dengan Benar !!!</p><br>
		<form action="<?= base_url('website/C_Prodak/simpan_pesanan');?>" method="post">
				Nama Penerima	<input type="text" name="nama"><br><br>
				Alamat			<input type="text" name="alamat"><br><br>
				Provinsi		<input type="text" name="provinsi"><br><br>
				Kota/Kabupaten		<input type="text" name="kota_kab"><br><br>
				Kecamatan		<input type="text" name="kecamatan"><br><br>
				Kode Pos		<input type="text" name="kode_pos"><br><br>
				Nomor Telp		<input type="text" name="no_telp"><br><br>
				Email			<input type="text" name="email"><br><br>

				<input type="submit" value="Simpan"> <input type="reset" value="Batal">
		</form>
		</div>



		<div class="marquee">
			<marquee>Info Lebih Lanjut <img src="image/logo-wa.png"> 081288738673</marquee>
		</div>
		<div class="footer">
			<p class="copy">Copyright 2019. Soccer Rooms | TOKO ONLINE TERPERCAYA .</p>
		</div>
	</div>

</body>
</html>



