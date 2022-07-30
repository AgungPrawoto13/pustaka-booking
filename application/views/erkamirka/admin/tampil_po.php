	<div class="container text-dark mt-0">
		<form>
			<div class="row">
				<div class="form-group">
					<div class="col-sm-2">
						<label>Client</label>
					</div>
					<div class="col-sm-12">
						<label>PT Maju Jaya</label>
					</div>
				</div>
				<div class="form-group col-sm-2 ml-5">
					<div class="col-sm-2">
						<label>Attn</label>
					</div>
					<div class="col-sm-12">
						<label>Bpk Reza</label>
					</div>
				</div>
				<div class="form-group col-sm-2">
					<div class="col-sm-2">
						<label>Phone</label>
					</div>
					<div class="col-sm-12">
						<label>08xxxxxx</label>
					</div>
				</div>
				<div class="form-group col-sm-2 mt-4 ml-auto">
					<div class="dropdown">
						<button class="btn btn-primary dropdown-toggle" type="button" id="#dropdownMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Purchase Order</button>

						<div class="dropdown-menu" aria-labelledby="dropdownMenu" id="dropdownMenu">
							<a class="dropdown-item" href="<?= base_url('erkamirka/admin/tampil_so');?>" type="button">Sales Order</a>
						</div>
					</div>
				</div>

				<div class="col-sm-12">
					<hr>
				</div>

				<div class="form-group col-sm-3">
					<label>Alamat</label>
					<label>Jl.Mabad Bawah 1 No. 9 Rengas</label>
				</div>

				<div class="form-group col-sm-3">
					<div class="col-sm-12">
						<label>Tanggal</label>
						<div class="input-group">
							<div class="input-group-prepend">
								<div class="input-group-text">
									<i class="far fa-calendar-alt"></i>
								</div>
							</div>
							<input type="date" name="tanggal" class="form-control">
						</div>
					</div>
					<div class="col-sm-12 mt-3">
						<label>Delivery Date</label>
						<div class="input-group">
							<div class="input-group-prepend">
								<div class="input-group-text">
									<i class="far fa-calendar-alt"></i>
								</div>
							</div>
							<input type="date" name="deliver_date" class="form-control">
						</div>
					</div>
				</div>

				<div class="form-group col-sm-2">
					<div class="col-sm-9">
						<label>P/M</label>
						<label>Produksi</label>
					</div>
					<div class="col-sm-8 mt-3">
						<label>Label</label>
						<label>None</label>
					</div>
				</div>

				<div class="form-group col-sm-2">
					<div class="col-sm-10">
						<label>P.O Number</label>
						<label>001</label>
					</div>
				</div>

				<div class="col-sm-12">
					<hr>
				</div>

				<div class="col-sm-12">
					<table border="1" cellpadding="10" class="table table-striped table-bordered">
						<thead align="center">
							<tr>
								<th width="6%">Size</th>
								<th width="23%">Description</th>
								<th width="12%">Unit</th>
								<th width="18%">Qty</th>
								<th>Unit Price</th>
								<th width="15%">Total</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td><input type="text" name="ukuran" class="form-control" value="L"></td>
								<td><input type="text" name="deskripsi" class="form-control" value="T-Shirt with Screenprint"></td>
								<td><input type="text" name="unit" class="form-control" value="Pcs"></td>
								<td><input type="number" name="qty" class="form-control" value="150"></td>
								<td><input type="text" name="unit_price" class="form-control" value="30.000"></td>
								<td><input type="text" name="total" class="form-control" value="4.500.000"></td>
							</tr>
						</tbody>
					</table>
				</div>

				<div class="col-sm-5">
					<div class="col-sm-12 text-center">
						<label>Total</label>
					</div>
					<div class="col-sm-12 text-center mt-3">
						<label>PPN 10%</label>
					</div>
					<div class="col-sm-12 text-center mt-3">
						<label>Down Payment</label>
					</div>
					<div class="col-sm-12 text-center mt-3">
						<label>Total</label>
					</div>
				</div>

				<div class="col-sm-2">
					<input type="text" name="total" class="form-control" value="300">
				</div>

				<div class="col-sm-2 ml-auto">
					<div class="col-sm-12 mt-2">
						<input type="text" name="" class="form-control" value="9.000.000">
					</div>
					<div class="col-sm-12 mt-2">
						<input type="text" name="ppn" class="form-control" value="900.000">
					</div>
					<div class="col-sm-12 mt-2">
						<input type="text" name="down_payment" class="form-control" value="9.000.000">
					</div>
					<div class="col-sm-12 mt-2">
						<input type="text" name="total" class="form-control" value="900.000">
					</div>
				</div>

				<div class="col-sm-10 mt-3">
					<table border="1"  cellpadding="10" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th>Purpose By</th>
								<th>Apparel Consultant</th>
								<th>Authorized By</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>Nama :
									<br>
									Tanggal :
								</td>
								<td>Nama :
									<br>
									Tanggal :
								</td>
								<td>Nama :
									<br>
									Tanggal :
								</td>
							</tr>
						</tbody>
					</table>
				</div>

				<div class="form-group col-sm-3">
					<a class="btn btn-primary" href="#">Cetak</a>
					<button class="btn btn-warning" type="submit">Buat Surat Jalan</button>
				</div>
			</div>
		</form>
	</div>
</div>