<div class="jumbotron jumbotron-fluid bg-transparent mt-4 my-0" id="Beranda">
	<div class="container mt-5">
		<div class="col-md-12 text-center">
			<font class="roboto">Produk</font>
		</div>
		<?php
		foreach ($produk as $tampil){
			?>
				<div class="col-md-12 mt-5">
					<div class="row text-center">
						<div class="col-md-3">
							<a href="<?= base_url('tbmandiri/tb_mandiri/deskripsi_produk');?>">
								<img src="<?= base_url('assets/');?>tokobray/img/<?php echo $tampil->gambar;?>" class="produk">
								<br>
								<font class="roboto1"><?php echo $tampil->nama_prodak;?></font>
							</a>
						</div>
						<div class="col-md-3">
							<img src="<?= base_url('assets/');?>tokobray/img/<?php echo $tampil->gambar;?>" class="produk">
							<br>
							<font class="roboto1"><?php echo $tampil->nama_prodak;?></font>
						</div>
						<div class="col-md-3">
							<img src="<?= base_url('assets/');?>tokobray/img/<?php echo $tampil->gambar;?>" class="produk">
							<br>
							<font class="roboto1"><?php echo $tampil->nama_prodak;?></font>
						</div>
						<div class="col-md-3">
							<img src="<?= base_url('assets/');?>tokobray/img/<?php echo $tampil->gambar;?>" class="produk">
							<br>
							<font class="roboto1"><?php echo $tampil->nama_prodak;?></font>
						</div>
					</div>
				</div>
			<?php
		}
		?>
		<div class="col-md-12 text-center mt-5">
			<i class="fas fa-chevron-left mr-3"></i>
			<a href="#" class="text-dark">1</a>
			<a href="#" class="text-dark">2</a>
			<a href="#" class="text-dark">3</a>
			<a href="#" class="text-dark">4</a>
			<a href="#" class="text-dark">5</a>
			<i class="fas fa-chevron-right ml-3"></i>
		</div>
	</div>
</div>
<div class="jumbotron jumbotron-fluid my-0">
	<div class="container">
		<div class="row">
			<div class="col-md-3 text-center">
				<span class="sans-pro">DESTINATION</span>
			</div>
			<div class="col-md-3 text-center">
				<span class="sans-pro">OFFERS</span>
			</div>
			<div class="col-md-3 text-center">
				<span class="sans-pro">ABOUT US</span>
			</div>
			<div class="col-md-3 text-center">
				<span class="sans-pro">LOGIN/SIGN UP</span>
			</div>
			<div class="col-md-12">
				<hr class="lead my-4">
			</div>
			<div class="col-md-4 ml-5">
				<div class="ml-4">
					<span class="sans-pro1">ADDRESS</span>
					<br>
					<span class="nunito3">Komp. Permata  Pamulang Blok G 25 No 10Tanggerang Selatan </span>
				</div>
			</div>
			<div class="col-md-4 ml-5">
				<div class="ml-4">
					<span class="sans-pro1">TELEPHONE</span>
					<br>
					<span class="sans-pro2">+62-8777-0777-7777</span>
				</div>
			</div>
			<div class="col-md-2 ml-5">
				<div class="ml-3">
					<span class="sans-pro1">FIND US</span>
					<br>
					<i class="fas fa-birthday-cake"></i>
				</div>
			</div>
			<div class="col-md-12">
				<hr class="lead my-4">
			</div>
			<div class="col-md-12 text-center">
				<span class="propins">Copyright ©Tbmandiri 2020 Allright Reserved</span>
			</div>
		</div>
	</div>
</div>