		<div id="content">
			<div id="kontak">
				<div class="form_kontak">	
					<form action="#" method="post">	
						<div class="pengisian_beli">
							<label>Gambar</label>
							<img src="<?= base_url('assets/');?>tokobray/img/<?php echo $cek[0]->gambar;?>">
							<br>
							<label>Nama Pemesan</label>
							<input disabled value="<?= $this->session->userdata('nama_user');?>">
							<br>
							<label>Kode Barang</label>
							<input disabled value="<?php echo $cek[0]->kd_prodak;?>" disabled>
							<br>
							<label>Prodak</label>
							<input disabled value="<?php echo $cek[0]->nama_prodak;?>">
							<br>
							<label>Harga</label>
							<input disabled value="Rp <?php echo $cek[0]->harga;?>">
							<br>
							<label>ukuran</label>
							<input disabled value="<?php echo $cek[0]->ukuran;?>">
							<br>
							<label>Alamat</label>
							<input disabled value="<?php echo $cek[0]->alamat;?>">
						</div>
						<div class="pengisian_beli1">
							<label>Kurir</label>
							<input disabled value="<?php echo $cek[0]->kurir;?>">	
							<br>
							<label>Banyak Beli</label>
							<input disabled value="<?php echo $cek[0]->jumbel;?>">
							<br>
							<label>Sebelumnya</label>
							<input disabled value="-">
							<br>
							<label>Waktu</label>
							<input disabled value="-">
							<br>
							<label>Berikutnya</label>
							<input disabled value="-">
							<br>
							<label>Waktu</label>
							<input disabled value="-">
						</div>
						<br>
						<div class="garis">
							<hr>
						</div>
						<div class="tombol_beli">
							<a href="<?= base_url('tokobray/member/profile');?>" class="btn btn-primary">Kembali</a>
						</div>
					</form>
				</div>
			</div>
		</div>