<table border=1>
	<?php
	foreach($useraktif as $u){
		?>
		<tr>
			<th>Nama Anggota : <?php echo $u->nama;?></th>
		</tr>
		<tr>
			<th>Buku Yang Dibooking :</th>
		</tr>
		<?php
	} 
	?>
	<tr>
		<td>
			<div class="table-responsive">
				<table border=1>
					<tr>
						<th>No.</th>
						<th>Buku</th>
						<th>Penulis</th>
						<th>Penerbit</th>
						<th>Tahun</th>
					</tr>
					<?php
					$no=1;
					foreach($items as $i){
						?>
						<tr>
							<td><?php echo $no;?></td>
							<td><?php echo $i['judul_buku'];?></td>
							<td><?php echo $i['pengarang'];?></td>
							<td><?php echo $i['penerbit'];?></td>
							<td><?php echo $i['tahun_terbit'];?></td>
						</tr>
						<?php
						$no++;
					}
					?>
				</table>
			</div>
		</td>
	</tr>
	<tr>
		<td>
			<hr>
		</td>
	</tr>
	<tr>
		<td align="center">
			<?= md5(date('d M Y H:i:s'));?>
		</td>
	</tr>
</table>