		<div id="content">
			<div id="katalog">
				<div class="gambar_katalog">
					<?php
					$gambar=$cek[0]->gambar;
					$nama=$cek[0]->nama_prodak;
					$l=$cek[0]->id;
					$m=$cek[1]->id;
					$s=$cek[2]->id;
					$harga=$cek[0]->harga_prodak;
					$harga1=$cek[1]->harga_prodak;
					$harga2=$cek[2]->harga_prodak;

					if($ukuran == 'L'){
						?>
							<img src="<?= base_url('assets/');?>tokobray/img/<?php echo $gambar;?>">
							<div class='info_prodak'>
								<span><?php echo $nama;?></span>
								<span><?php echo $harga;?></span>
							</div>

							<div class="tombol">
								<?php
								if($this->session->userdata('email')){
									?>
									<a href="<?= base_url('tokobray/member/beli?kd_prodak='.$l);?>" class="btn btn-primary">beli</a>
									<a href="<?= base_url('tokobray/member/keranjang?kd_prodak='.$l);?>" class="btn btn-primary">masuk keranjang</a>
									<?php
								}else{
									?>
									<a href="<?= base_url('tokobray/pengunjung/masuk');?>" class="btn btn-primary">beli</a>
									<a href="<?= base_url('tokobray/pengunjung/masuk');?>" class="btn btn-primary">masuk keranjang</a>
									<?php
								}
								?>
							</div>
						<?php
					}else if($ukuran == 'M'){
						?>
							<img src="<?= base_url('assets/');?>tokobray/img/<?php echo $gambar;?>">
							<div class='info_prodak'>
								<span><?php echo $nama;?></span>
								<span><?php echo $harga1;?></span>
							</div>

							<div class="tombol">
								<?php
								if($this->session->userdata('email')){
									?>
									<a href="<?= base_url('tokobray/member/beli?kd_prodak='.$m);?>" class="btn btn-primary">beli</a>
									<a href="<?= base_url('tokobray/member/keranjang?kd_prodak='.$m);?>" class="btn btn-primary">masuk keranjang</a>
									<?php
								}else{
									?>
									<a href="<?= base_url('tokobray/pengunjung/masuk');?>" class="btn btn-primary">beli</a>
									<a href="<?= base_url('tokobray/pengunjung/masuk');?>" class="btn btn-primary">masuk keranjang</a>
									<?php
								}
								?>
							</div>
						<?php
					}else{
						?>
						<img src="<?= base_url('assets/');?>tokobray/img/<?php echo $gambar;?>">
						<div class='info_prodak'>
							<span><?php echo $nama;?></span>
							<span><?php echo $harga2;?></span>
						</div>

						<div class="tombol">
							<?php
							if($this->session->userdata('email')){
								?>
								<a href="<?= base_url('tokobray/member/beli?kd_prodak='.$s);?>" class="btn btn-primary">beli</a>
								<a href="<?= base_url('tokobray/member/keranjang?kd_prodak='.$s);?>" class="btn btn-primary">masuk keranjang</a>
								<?php
							}else{
								?>
								<a href="<?= base_url('tokobray/pengunjung/masuk');?>" class="btn btn-primary">beli</a>
								<a href="<?= base_url('tokobray/pengunjung/masuk');?>" class="btn btn-primary">masuk keranjang</a>
								<?php
							}
							?>
						</div>
						<?php
					}
					?>
						
				</div>
				<div class="aksi">
					<?php
					if($this->session->userdata('email')){
						?>
							<form action="<?= base_url('tokobray/member/katalog?prodak='.$nama);?>" method="post">
								<button type="submit" name="ukuran" value="S">S</button>
								<button type="submit" name="ukuran" value="M">M</button>
								<button type="submit" name="ukuran" value="L">L</button>
							</form>
						<?php
					}else{
						?>
							<form action="<?= base_url('tokobray/member/katalog?prodak='.$nama);?>" method="post">
								<button type="submit" name="ukuran" value="S">S</button>
								<button type="submit" name="ukuran" value="M">M</button>
								<button type="submit" name="ukuran" value="L">L</button>
							</form>
						<?php
					}
					?>
				</div>
				
			</div>
		</div>