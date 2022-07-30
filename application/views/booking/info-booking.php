<div class="container">
	<center>
		<table>
			<?php
			foreach($useraktif as$u){
				?>
				<tr>
					<td nowrap>Terima Kasih<b><?= $u->nama;?></b></td>
				</tr>
				<tr>
					<td>Buku yang ingin anda pinjam adalah sebagai berikut : </td>
				</tr>
				<?php 
			} 
			?>
				<tr>
					<td>
						<div class="table-responsive">
							<table class="table table-bordered table-striped table-hover" id="table-datatable">
								<tr align="center">
									<th width="10%">No.</th>
									<th width="15%">Buku</th>
									<th width="20%">Penulis</th>
									<th width="15%">Penerbit</th>
									<th width="10%">Tahun</th>
									<th colspan="2">Pilihan</th>
								</tr>
								<?php
								$no =1;
								foreach($items as $i){
									?>
									<tr align="center">
										<td><?= $no;?></td>
										<td><img src="<?= base_url('assets/img/logo/'.$i['image']);?>" class="rounded" alt="No Picture" width="40%">
										</td>
										<td nowrap><?= $i['pengarang'];?></td>
										<td nowrap><?= $i['penerbit'];?></td>
										<td nowrap><?= $i['tahun_terbit'];?></td>
										<td><a href="<?= base_url('booking/hapusbooking/'.$i['id_buku']);?>" onclick="return_confirm('Yakin tidak jadi booking ? '.$i['judul_buku'])"><i class="btn btn-sm btn-outline-danger fas fw fa-trash"></i></a></td>
										<td>2</td>
									</tr>
									<?php $no++;
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
					<td><a class="btn btn-sm btn-outline-danger" onclick="information('Waktu Pengambilan Buku 1x24 jam dari Booking')" href="<?php echo base_url().'booking/exportToPdf/'.$this->session->userdata('id_user');?>"><span class="far fa-lg fa-fw fa-file-pdf"></span>Pdf</a>
					</td>
				</tr>
			<!-- }
			?> -->
		</table>
	</center>
</div>