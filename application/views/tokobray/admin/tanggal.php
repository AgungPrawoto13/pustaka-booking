		<div id="isi">
			<div class="kotak">
				<div class="tanggal_cek">
					<span name="bulan">Jan</span>
				</div>
				<div class="tanggal_cek">
					<span name="tahun">2020</span>
				</div>
				<div class="bulan">
					<span name="hari">Senin</span>
					<span name="hari">Selasa</span>
					<span name="hari">Rabu</span>
					<span name="hari">Kamis</span>
					<span name="hari">Jum'at</span>
					<span name="hari">Sabtu</span>
					<span name="hari">Minggu</span>
					<br>
					<?php
					$tanggal=31;
					for($i=1; $i<=$tanggal; $i++){
						?>
							<div class="tanggal_cek">
								<span name="bulan"><?php echo $i;?></span>
							</div>
						<?php
					}
					?>
				</div>
			</div>
		</div>