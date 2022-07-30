		<div id="content">
			<div id="kontak">
				<div class="judul">
					<span><?php echo $bayar_via;?></span>
				</div>

				<div class="form_pembayaran">

					<?php

					if($role == 1){
						?>
						<div class="cara_bayar">
							<?php 
							echo $rekening;
							echo "<br>";
							echo $nomer;
							echo "<br>";
							echo $an;
							echo "<br>";
							echo $total;
							echo "<br><br>";
							echo $atm;
							?>
						</div>
						<div class="caranya">
							1. masukan kartu atm<br>
							2. masukan sandi<br>
							<?php echo $n3;?><br>
							4. masukan nomor rekening<br>
							5. masukan nomor 1606 sebagai kode bang mandiri<br>
							6. masukan jumlah nominal pembayaran<br>
							7. cek apakah A / N sudah sesuai<br>
							8. pilih konfirmasi<br>
							9. selesai<br>
						</div>
						<?php
					}else if($role == 2){
						?>
						<div class="cara_bayar">
							<?php 
							echo $rekening;
							echo "<br>";
							echo $nomer;
							echo "<br>";
							echo $total;
							echo "<br><br>";
							echo $atm;
							?>
						</div>
						<div class="caranya">
							1. menuju kasir untuk melakukan pembayaran<br>
							2. tampilkan no pembayaran kepada kasir<br>
							3. tunggu beberapa saat<br>
							4. pembayaran selesai<br>
						</div>
						<?php
					}else{
						?>
						<div class="cara_bayar">
							<?php 
							echo $rekening;
							echo "<br>";
							echo $nomer;
							echo "<br>";
							echo $total;
							echo "<br><br>";
							echo $atm;
							?>
						</div>
						<div class="caranya">
							1. menuju ke konter heppi terdekat<br>
							2. tampilkan no pembayaran kepada kasir<br>
							3. tunggu beberapa saat<br>
							4. pembayaran selesai<br>
						</div>
						<?php
					}
					?>
					<div class="total_bayar">
						<a href="<?= base_url('tokobray/member/bukti_pembayaran');?>" class="btn btn-primary">upload bukti pembayaran</a>
					</div>
				</div>
			</div>
		</div>