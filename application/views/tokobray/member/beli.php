		<div id="content">
			<div id="kontak">
				<div class="form_kontak">						
					<form action="<?= base_url('tokobray/member/beli');?>" method="post">
						<?php
						foreach($cek as $beli){
							
							?>
								<div class="atur">
									<img src="<?= base_url('assets/');?>tokobray/img/<?= $this->session->userdata('gambar');?>">
								</div>
								
								<div class="pengisian_beli">
									<label>Kode Barang</label>
									<input id="otomatis" name="kd_barang" value="<?= $this->session->userdata('nama_prodak');?>" disabled>
									<br>
									<label>Prodak</label>
									<input id="otomatis" name="prodak" disabled value="<?php echo $nama_prodak;?>">
									<br>
									<label>Harga</label>
									<input id="otomatis" name="harga_prodak" disabled value="<?php echo $harga_prodak;?>">
									<br>
									<label>Kurir</label>
									<select name="pengantaran" id="otomatis">
										<option value="JNT">JNT</option>
										<option value="SICEPAT">SICEPAT</option>
										<option value="JNE">JNE</option>
									</select>
									<br>
									<label>Ukuran</label>
									<input id="otomatis" type="submit" name="ukuran" disabled value="<?php echo $ukuran_prodak;?>">
								</div>
								<div class="pengisian_beli1">
									<label>Nama</label>
									<input id="otomatis" name="member" value="<?= $this->session->userdata('nama_user');?>">
									<br>
									<?= form_error('member','<small class="text-danger">','</small>');?>
									<br>
									<label>Alamat</label>
									<textarea type="text" name="alamat" value="<?= $this->session->userdata('alamat');?>"></textarea>
									<br>
									<?= form_error('alamat','<small class="text-danger">','</small>');?>	
									<br>
									<label>Banyak Beli</label>
									<input id="otomatis" type="number" name="jumbel" value="<?= $this->session->userdata('jumbel');?>">
									<br>
									<?= form_error('jumbel','<small class="text-danger">','</small>');?>
								</div>
								<br>
								<div class="garis">
									<hr>
								</div>
							<?php
						}
						?>
						<div class="tombol_beli">
							<input type="reset" class="btn btn-primary" value="batal Beli">
							<input type="submit" class="btn btn-primary" value="Pembayaran">
						</div>
					</form>
				</div>
			</div>
		</div>