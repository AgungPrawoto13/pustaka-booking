<div class="container text-dark">
	<form>
		<div class="row">
			<div class="col-sm-5 ml-auto">
				<h3 class="ml-5">Pengajuan Pengadaan Barang</h3>
			</div>

			<div class="col-sm-8 mt-4">
				<div class="form-group">
					<div class="row">
						<div class="col-sm-3">
							<label>Tgl Pengajuan</label>
						</div>
						<div class="col-sm-4">
							<div class="input-group">
								<div class="input-group-prepend">
									<div class="input-group-text">
										<i class="fas fa-calendar-alt"></i>
									</div>
								</div>
								<input type="date" name="tgl_pengajuan" class="form-control">
							</div>
						</div>
					</div>
				</div>

				<div class="form-group">
					<div class="row">
						<div class="col-sm-3">
							<label>Divisi</label>
						</div>
						<div class="col-sm-4">
							<input type="text" name="divisi" class="form-control">
						</div>
					</div>
				</div>

				<div class="form-group">
					<div class="row">
						<div class="col-sm-3">
							<label>Peruntukan</label>
						</div>
						<div class="col-sm-4">
							<div class="dropdown">
								<a class="btn btn-outline-primary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Stok Gudang</a>

								<div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
									<a class="dropdown-item" href="<?= base_url('erkamirka/admin/pengajuan1');?>">Projek</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="col-sm-3 mt-4">
				<div class="row">
					<div class="col-sm-5">
						<label>Pembayaran</label>
					</div>
					<div class="col-sm-6">
						<select class="form-control btn-outline-primary" name="pembayaran">
							<option value="Tunai">Tunai</option>
							<option value="Giro">Giro</option>
							<option value="Cek">Cek</option>
							<option value="Transfer">Transfer</option>
						</select>
					</div>
				</div>
			</div>

			<div class="col-sm-12 mt-3">
				<table class="table table-striped table-bordered" cellpadding="10">
					<thead align="center">
						<tr>
							<th>Items</th>
							<th>Pengajuan</th>
							<th>Realisasi</th>
							<th>Selisih</th>
							<th>Keterangan</th>
							<th>Material Check (v)</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td><input type="text" name="item" class="form-control"></td>
							<td><input type="text" name="pengajuan" class="form-control"></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
					</tbody>
				</table>
			</div>

			<div class="col-sm-12 mt-3">
				<table class="table table-bordered table-striped" cellpadding="10">
					<thead>
						<tr>
							<th>Diajukan Oleh</th>
							<th>Diperiksa Oleh</th>
							<th>Disetujui Oleh</th>
							<th>Mengetahui</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>
								nama :
								<br>
								Tanggal :
							</td>
							<td>
								nama :
								<br>
								Tanggal :
							</td>
							<td>
								nama :
								<br>
								Tanggal :
							</td>
							<td>
								nama :
								<br>
								Tanggal :
							</td>
						</tr>
					</tbody>
				</table>
			</div>

			<div class="form-group col-sm-2 mt-3 ml-auto">
				<button class="btn btn-danger" type="reset">Batal</button>
				<button class="btn btn-success" type="submit">Simpan</button>
			</div>
		</div>
	</form>
</div>