	<div class="container text-dark mt-0">
		<form action="<?= base_url('erkamirka/admin/transaksi');?>" method="post">
			<div class="row">
				<div class="form-group col-sm-3">
					<label>Client</label>
					<input type="text" name="client" class="form-control" placeholder="Client">
				</div>
				<div class="form-group col-sm-2">
					<label>Attn</label>
					<input type="text" name="attn" class="form-control" placeholder="Attn">
				</div>
				<div class="form-group col-sm-2">
					<label>Phone</label>
					<input type="text" name="phone" class="form-control" placeholder="Nomer Telepon">
				</div>
				<div class="form-group col-sm-2 mt-4 ml-auto">
					<div class="dropdown">
						<button class="btn btn-primary dropdown-toggle" type="button" id="#dropdownMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Purchase Order</button>

						<div class="dropdown-menu" aria-labelledby="dropdownMenu" id="dropdownMenu">
							<a class="dropdown-item" href="<?= base_url('erkamirka/sales_order/so?sesi=1');?>" type="button">Sales Order</a>
						</div>
					</div>
				</div>

				<div class="col-sm-12">
					<hr>
				</div>

				<div class="form-group col-sm-3">
					<label>Alamat</label>
					<textarea name="alamat"></textarea>
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
					<div class="col-sm-12">
						<label>P/M</label>
						<select name="pilihan" class="form-control">
							<option value="Produksi">Produksi</option>
							<option value="Mockup">Mockup</option>
						</select>
					</div>
					<div class="col-sm-12 mt-3">
						<label>Label</label>
						<select class="form-control" name="label">
							<option value="None">None</option>
							<option value="Yunipom.id">Yunipom.id</option>
							<option value="Voverall.id">Voverall.id</option>
						</select>
					</div>
				</div>

				<div class="form-group col-sm-2">
					<label>P.O Number</label>
					<input type="text" name="po_number" class="form-control">
				</div>

				<div class="col-sm-12">
					<hr>
				</div>

				<div class="col-sm-12">
					<table border="1" cellpadding="10" class="table table-striped table-bordered" id="tbl">
						<thead align="center">
							<tr>
								<th width="6%">Size</th>
								<th width="23%">Description</th>
								<th width="12%">Unit</th>
								<th width="9%">Qty</th>
								<th width="15%">Unit Price</th>
								<th colspan="2" width="20%">Total</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td><input type="text" name="ukuran" class="form-control"></td>
								<td><input type="text" name="deskripsi" class="form-control"></td>
								<td><input type="text" name="unit" class="form-control"></td>
								<td><input type="number" name="qty" class="form-control"></td>
								<td><input type="text" name="unit_price" class="form-control"></td>
								<td><input type="text" name="total" class="form-control"></td>
								<td><button type="button" class="btn btn-primary btn-sm" id="tambahin">
										<i class="fas fa-plus-circle primary"></i>
									</button></td>
							</tr>
						</tbody>
					</table>
				</div>

				<div class="col-sm-5">
					<div class="col-sm-12">
						<label>Total</label>
					</div>
					<div class="col-sm-12 mt-3">
						<label>PPN 10%</label>
					</div>
					<div class="col-sm-12 mt-3">
						<label>Down Payment</label>
					</div>
					<div class="col-sm-12 mt-3">
						<label>Total</label>
					</div>
				</div>

				<div class="col-sm-2">
					<input type="text" name="total1" class="form-control">
				</div>

				<div class="col-sm-2 ml-auto">
					<div class="col-sm-12 mt-2">
						<input type="text" name="" class="form-control">
					</div>
					<div class="col-sm-12 mt-2">
						<input type="text" name="ppn" class="form-control">
					</div>
					<div class="col-sm-12 mt-2">
						<input type="text" name="down_payment" class="form-control">
					</div>
					<div class="col-sm-12 mt-2">
						<input type="text" name="total2" class="form-control">
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
							<tr rowspan="2">
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
					<button class="btn btn-danger" type="reset">Batal</button>
					<button class="btn btn-success" type="submit">Buat</button>
				</div>
			</div>
		</form>
	</div>
</div>