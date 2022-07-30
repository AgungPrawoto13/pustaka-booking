<div class="container text-dark">
	<form>
		<div class="row">
			<div class="col-sm-10">		
				<div class="form-group col-sm-6 ml-auto">
					<div class="row">
						<div class="col-sm-5 ml-1">
							<label>Invoice Nummber</label>
						</div>
						<div class="col-sm-5">
							<input class="form-control" name="invoice_number" type="text">
						</div>
					</div>
				</div>

				<div class="form-group col-sm-6 ml-auto">
					<div class="row">
						<div class="col-sm-5 ml-1">
							<label>Date</label>
						</div>
						<div class="col-sm-5">
							<div class="input-group">
								<div class="input-group-prepend">
									<div class="input-group-text">
										<i class="far fa-calendar-alt"></i>
									</div>
								</div>
								<input class="form-control" type="date" name="tanggal">
							</div>
						</div>		
					</div>
				</div>
			</div>

			<div class="col-sm-5">
				<div class="small-box">
					<div class="row p-3">
						<div class="form-group col-sm-12 ml-5">
							<div class="row">
								<div class="col-sm-4">
									<label>To Costumer</label>
								</div>
								<div class="col-sm-5">
									<select class="btn btn-outline-primary form-control" name="untuk_customer">
										<option value="G4S">G4S</option>
									</select>
								</div>
							</div>
						</div>

						<div class="form-group col-sm-12 ml-5">
							<div class="row">
								<div class="col-sm-4">
									<label>Tlp</label>
								</div>
								<div class="col-sm-5">
									<input class="form-control" type="text" name="telp">
								</div>
							</div>
						</div>

						<div class="form-group col-sm-12 ml-5">
							<div class="row">
								<div class="col-sm-4">
									<label>Fax</label>
								</div>
								<div class="col-sm-5">
									<input class="form-control" type="text" name="fax">
								</div>
							</div>
						</div>

						<div class="form-group col-sm-12 ml-5">
							<div class="row">
								<div class="col-sm-4">
									<label>Attn</label>
								</div>
								<div class="col-sm-5">
									<input class="form-control" type="text" name="attn">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="col-sm-12 mt-3">
				<table class="table table-striped table-bordered" cellpadding="10">
					<thead align="center">
						<tr>
							<th>No</th>
							<th>Description</th>
							<th width="10%">Size</th>
							<th width="10%">Qty</th>
							<th>Unit</th>
							<th>Unit Price</th>
							<th width="15%">Total Price</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td></td>
							<td><input type="text" name="description" class="form-control"></td>
							<td><input type="text" name="description" class="form-control"></td>
							<td><input type="text" name="description" class="form-control"></td>
							<td><input type="text" name="description" class="form-control"></td>
							<td><input type="text" name="description" class="form-control"></td>
							<td></td>
						</tr>
					</tbody>
				</table>
			</div>

			<div class="col-sm-5 ml-auto">
				<table class="table table-bordered table-striped" cellpadding="10">
					<thead align="center">
						<tr>
							<th>Total</th>
							<th></th>
						</tr>
						<tr>
							<th>DP</th>
							<th><input type="text" name="dp" class="form-control"></th>
						</tr>
						<tr>
							<th>Total After DP</th>
							<th></th>
						</tr>
					</thead>
				</table>
			</div>

			<div class="col-sm-12 mt-3">
				<div class="row">
					<div class="form-group col-sm-8">
						<label>Your Faithfully,</label>
					</div>

					<div class="form-group col-sm-4">
						<div class="row">
							<div class="col-sm-6">
								<label>Please Transfer To</label>
							</div>
							<div class="col-sm-5">
								<select class="form-control btn-outline-primary" name="transfer">
									<option value="BCA OP">BCA OP</option>
									<option value="BCA PT">BCA PT</option>
									<option value="BRI PT">BRI PT</option>
									<option value="Mandiri OP">Mandiri OP</option>
									<option value="Mandiri PT">Mandiri PT</option>
								</select>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="col-sm-12 mt-5">
				<div class="row">
					<div class="form-group col-sm-2">
						<label>Yafis Syam</label>
					</div>

					<div class="form-group col-sm-2 ml-auto">
						<button class="btn btn-danger" type="reset">Batal</button>
						<button class="btn btn-success" type="submit">Simpan</button>
					</div>
				</div>
			</div>
		</div>
	</form>
</div>