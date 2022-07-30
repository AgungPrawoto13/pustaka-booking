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
							<label>Purchasing</label>
						</div>
					</div>
				</div>

				<div class="form-group">
					<div class="row">
						<div class="col-sm-3">
							<label>Peruntukan</label>
						</div>
						<div class="col-sm-2">
							<label>Project</label>
						</div>
						<div class="col-sm-4">
							<label>G4S</label>
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
						<label>Transfer</label>
					</div>
				</div>
			</div>

			<div class="col-sm-12 mt-3">
				<table class="table table-striped table-bordered" cellpadding="10">
					<thead align="center">
						<tr>
							<th>Keterangan</th>
							<th width="10%">Qty</th>
							<th>Satuan</th>
							<th>Pengajuan</th>
							<th>Realisasi</th>
							<th>Selisih</th>
							<th>Material Check (v)</th>
						</tr>
					</thead>
					<tbody align="center">
						<tr>
							<td>Benang Nay</td>
							<td><input type="number" name="qty" class="form-control"></td>
							<td>Lusin</td>
							<td>100.000</td>
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
				<button class="btn btn-primary" type="submit">Cetak</button>
			</div>
		</div>
	</form>
</div>