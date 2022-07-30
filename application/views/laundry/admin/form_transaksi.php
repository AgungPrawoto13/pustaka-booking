<div class="content">
	<div class="content1">
		<div class="atas">
			<i class="fas fa-book-open"></i>
			<div class="transaksi">
				Transaksi Laundry
			</div>
		</div>
		<div class="bawah">
			<div class="formatas">
				<?= $this->session->flashdata('pesan');?>
				<div class="form_transaksi">
					Form Transaksi Laundry
				</div>
				<br>
				<form action="<?= base_url('laundry/admin/form_transaksi');?>" method="post">
				<div class="form">
					<div class="isi">
						<span>Nama Pelanggan</span>
						<span name="label">Jenis Paket</span>
						<br>
						<input type="text" name="nama" id="nama" value="<?= set_value('nama');?>" placeholder="Nama Pelanggan">
						<select name="paket" id="tes" placeholder="Jenis Paket">
							<option value="- PILIH -">- PILIH -</option>
							<option type="button" value="Paket 1" data-toggle="collapse" data-target="#Paket1" aria-expanded="false">Paket 1</option>
							<option type="button" value="Paket 2" data-toggle="collapse" data-target="#Paket2" aria-expanded="false">Paket 2</option>
						</select>
						<br>
						<?= form_error('nama','<small class="text-danger">','</small>');?>
					</div>
					<div class="isi">
						<span>Alamat</span>
						<span name="label">Jenis Laundry</span>
						<br>
						<input type="text" name="alamat" id="alamat" value="<?= set_value('alamat');?>" placeholder="Alamat">
						<?php
						if('id'=="Paket1"){
							?>
							<div id="Paket1">
								<select name="jenis" id="asd">
									<option value="Cuci Setrika Reguler ( 2 Hari )">Cuci Setrika Reguler ( 2 Hari )</option>
									<option value="Setrika Reguler ( 2 Hari )">Setrika Reguler ( 2 Hari )</option>
									<option value="Cuci Strika Express ( 1 Hari)">Cuci Strika Express ( 1 Hari)</option>
									<option value="Setrika Express ( 1 Hari )">Setrika Express ( 1 Hari )</option>
									<option value="Cuci Strika Super Express ( 8 Jam)">Cuci Strika Super Express ( 8 Jam)</option>
									<option value="Setrika Super Express ( 8 jam )">Setrika Super Express ( 8 jam )</option>
								</select>
							</div>
							<div id="Paket2">
								<select name="jenis" id="jenis" value="<?= set_value('jenis');?>">
									<option value="Blouse">Blouse</option>
									<option value="Gaun">Gaun</option>
									<option value="Jas">Jas</option>
									<option value="Kemeja">Kemeja</option>
									<option value="Rok">Rok</option>
									<option value="Celana Panjang">Celana Panjang</option>
								</select>
							</div>
							<?php
						}
						?>
						<br>
						<?= form_error('alamat','<small class="text-danger">','</small>');?>
					</div>
					<div class="isi">
						<span>No Hp</span>
						<span name="label">Tanggal Masuk</span>
						<br>
						<input type="text" name="no_hp" id="no_hp" value="<?= set_value('no_hp');?>" placeholder="No Hp">
						<input type="text" name="tgl_masuk" id="tgl_masuk" value="<?= set_value('tgl_masuk');?>" placeholder="Tanggal Masuk">
						<br>
						<?= form_error('no_hp','<small class="text-danger">','</small>');?>		
						<?= form_error('tgl_masuk','<small class="text-danger pesan">','</small>');?>
					</div>
					<div class="isi">
						<span>Jenis Pakaian</span>
						<span name="label">Tanggal Diambil</span>
						<br>
						<input type="text" name="pakaian" id="pakaian" value="<?= set_value('pakaian');?>" placeholder="Jenis Pakaian">
						<input type="text" name="tgl_diambil" id="tgl_diambil" value="<?= set_value('tgl_diambil');?>" placeholder="Tanggal Diambil">
						<br>
						<?= form_error('pakaian','<small class="text-danger">','</small>');?>
						<?= form_error('tgl_diambil','<small class="text-danger pesan">','</small>');?>	
					</div>
					<div class="isi">
						<span>Berat Pakaian</span>
						<br>
						<input type="text" name="berat" id="berat" value="<?= set_value('berat');?>" placeholder="Berat Pakaian">
						<br>
						<?= form_error('berat','<small class="text-danger">','</small>');?>
						<br>
					</div>
					<div class="tombol">
						<button type="submit" class="btn btn-primary">Next</button>
						<button type="reset" class="btn btn-primary">Hapus</button>
					</div>
				</div>
				</form>
			</div>
		</div>
	</div>
</div>
