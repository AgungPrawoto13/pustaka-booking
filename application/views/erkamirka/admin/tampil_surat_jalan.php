<div class="container text-dark">
	<form>
		<div class="row">
			<div class="form-group col-sm-10">
				<h3>Surat Jalan</h3>
			</div>
			<div class="form-group col-sm-2">
				<div class="row">
					<div class="col-sm-3">
						<label>No</label>
					</div>
					<div class="col-sm-12">
						<label>SJ/001/1/2019</label>
					</div>
				</div>
			</div>

			<div class="form-group col-sm-2">
				<label>Project</label>
				<select class="form-control btn-outline-primary" name="projek">
					<option value="G4S">G4S</option>
				</select>
			</div>

			<div class="form-group col-sm-2">
				<label>Tgl Pengiriman</label>
				<div class="input-group">
					<div class="input-group-prepend">
						<div class="input-group-text">
							<i class="fas fa-calendar-alt"></i>
						</div>
					</div>
					<input type="date" name="pengiriman" class="form-control">
				</div>
			</div>

			<div class="form-group col-sm-2">
				<div class="col-sm-12">
					<label>No. PO</label>
				</div>
				<div class="col-sm-12">
					<label>PO 001</label>
				</div>
			</div>

			<div class="form-group col-sm-12 mt-3">
				<table class="table table-bordered table-striped" cellpadding="10">
					<thead align="center">
						<tr>
							<th>Barang</th>
							<th>Size</th>
							<th>QTY</th>
							<th>Satuan</th>
							<th>Packaging</th>
							<th>Keterangan</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td><label>Safari</label></td>
							<td><label></label></td>
							<td><label>13</label></td>
							<td><label>Stell</label></td>
							<td><label>Plastik</label></td>
							<td><label></label></td>
						</tr>
					</tbody>
				</table>
			</div>

			<div class="form-group col-sm-12 mt-3">
				<table class="table table-striped table-bordered" cellpadding="10">
					<thead>
						<tr>
							<th>Dibuat Oleh</th>
							<th>Dikirim Oleh</th>
							<th>Diterima Oleh</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>
								Nama :
								<br>
								Tanggal :
							</td>
							<td>
								Nama :
								<br>
								Tanggal :
							</td>
							<td>
								Nama :
								<br>
								Tanggal :
							</td>
						</tr>
					</tbody>
				</table>
			</div>

			<div class="form-group col-sm-2 ml-auto">
				<button class="btn btn-primary" type="submit">Cetak</button>
			</div>
		</div>
	</form>
</div>