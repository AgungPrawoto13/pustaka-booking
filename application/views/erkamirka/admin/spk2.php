<div class="container text-dark mt-0">
	<form>
		<div class="row">
			<div class="col-sm-12 text-center">
				<h4>Surat Perintah Kerja</h4>
				<hr class="col-sm-3">
				<div class="form-group col-sm-8 ml-auto">
					<div class="row ml-auto">
						<div class="col-sm-2">
							<label>SPK No</label>
						</div>
						<div class="col-sm-3">
							<input type="text" name="spk" class="form-control">
						</div>
					</div>
				</div>
			</div>

			<div class="col-sm-5">
				<div class="small-box p-3">
					<div class="row">
						<div class="form-group col-sm-3">
							<div class="row">
								<div class="col-sm-2">
									<input type="checkbox" name="in_house" value="In House">
								</div>
								<div class="col-sm-2">
									<label>In_House</label>
								</div>
							</div>
						</div>

						<div class="form-group col-sm-3 ml-2">
							<div class="row">
								<div class="col-sm-2">
									<input type="checkbox" name="vendor" value="Vendor">
								</div>
								<div class="col-sm-1">
									<label>Vendor</label>
								</div>
							</div>
						</div>

						<div class="form-group col-sm-2">
							<div class="row">
								<div class="col-sm-2">
									<input type="checkbox" name="cmt" value="CMT">
								</div>
								<div class="col-sm-1">
									<label>CMT</label>
								</div>
							</div>
						</div>

						<div class="form-group col-sm-2 ml-2">
							<div class="row">
								<div class="col-sm-2">
									<input type="checkbox" name="fob" value="FOB">
								</div>
								<div class="col-sm-1">
									<label>FOB</label>
								</div>
							</div>
						</div>

						<div class="form-group col-sm-12">
							<label>To</label>
						</div>

						<div class="form-group col-sm-10">
							<div class="row">
								<div class="col-sm-3">
									<label>Attn</label>
								</div>
								<div class="col-sm-9">
									<input class="form-control" type="text" name="attn">
								</div>
							</div>
						</div>

						<div class="form-group col-sm-10">
							<div class="row">
								<div class="col-sm-3">
									<label>No CP</label>
								</div>
								<div class="col-sm-9">
									<input type="text" name="no_cp" class="form-control">
								</div>
							</div>
						</div>

						<div class="form-group col-sm-10">
							<div class="row">
								<div class="col-sm-3">
									<label>Email</label>
								</div>
								<div class="col-sm-9">
									<input type="text" name="email" class="form-control">
								</div>
							</div>
						</div>

						<div class="form-group col-sm-10 ml-auto">
							<select class="form-control col-sm-9 btn-outline-primary ml-3" name="produksi">
								<option value="PRINTING PRODUCTION">PRINTING PRODUCTION</option>
								<option value="SEWING PRODUCTION">SEWING PRODUCTION</option>
							</select>
						</div>
					</div>
				</div>
			</div>

			<div class="col-sm-5">
				<div class="small-box p-3">
					<div class="row">
						<div class="form-group col-sm-4">
							<div class="row">
								<div class="col-sm-1">
									<input type="checkbox" name="printing" value="Printing">
								</div>
								<div class="col-sm-9">
									<label>Printing</label>
								</div>

								<div class="col-sm-1">
									<input type="checkbox" name="embroidery" value="Embroidery">
								</div>
								<div class="col-sm-9">
									<label>Embroidery</label>
								</div>

								<div class="col-sm-1">
									<input type="checkbox" name="Sublime" value="Sublime">
								</div>
								<div class="col-sm-9">
									<label>Sublime</label>
								</div>
							</div>
						</div>

						<div class="form-group col-sm-4">
							<div class="row">
								<div class="col-sm-1">
									<input type="checkbox" name="polyflex" value="Polyflex">
								</div>
								<div class="col-sm-9">
									<label>Polyflex</label>
								</div>

								<div class="col-sm-1">
									<input type="checkbox" name="sablon" value="Sablon">
								</div>
								<div class="col-sm-9">
									<label>Sablon</label>
								</div>

								<div class="col-sm-1">
									<input type="checkbox" name="emblem" value="Emblem">
								</div>
								<div class="col-sm-9">
									<label>Emblem</label>
								</div>

								<div class="col-sm-1">
									<input type="checkbox" name="langsung" value="Langsung">
								</div>
								<div class="col-sm-9">
									<label>Langsung</label>
								</div>
							</div>
						</div>

						<div class="col-sm-4">
							<div class="row">
								<div class="col-sm-12">
									<input type="text" name="" class="form-control">
								</div>
								<div class="col-sm-12 mt-2">
									<input type="text" name="" class="form-control">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="col-sm-2">
				<div class="col-sm-12 my-0">
					<label>Date</label>
					<i class="fas fa-calendar-alt ml-2"></i>
				</div>
				<div class="col-sm-12">
					<input type="date" name="tanggal" class="form-control">
				</div>

				<div class="col-sm-12 mt-2">
					<label>Currency</label>
				</div>
				<div class="col-sm-12">
					<select class="form-control btn-outline-primary" name="bayar">
						<option value="IDR">IDR</option>
					</select>
				</div>

				<div class="col-sm-12 mt-2">
					<label>Delivery Date</label>
					<i class="fas fa-calendar-alt ml-2"></i>
				</div>
				<div class="col-sm-12">
					<input type="date" name="delivery" class="form-control">
				</div>
			</div>

			<div class="col-sm-12">
				<label>Please Supply the following items </label>
			</div>

			<div class="col-sm-12 mt-3">
				<table class="table table-bordered table-striped" cellpadding="10">
					<thead align="center">
						<tr>
							<th>No</th>
							<th>Description Of Good</th>
							<th>Size</th>
							<th>Qty</th>
							<th>Unit</th>
							<th>Total Qty</th>
						</tr>
					</thead>
					<tbody align="center">
						<tr>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
					</tbody>
				</table>
			</div>

			<div class="col-sm-12 mt-3">
				<label>Notes : PERHATIKAN TINGKAT KERAPIHAN JAHITAN DAN NODA PADA BAHAN</label>
			</div>

			<div class="col-sm-12 mt-3">
				<table class="table table-bordered table-striped" cellpadding="10">
					<thead>
						<tr>
							<th>Dibuat Oleh</th>
							<th>Menyetujui</th>
							<th>Mengetahui</th>
							<th>Diterima</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
					</tbody>
				</table>
			</div>

			<div class="form-group col-sm-2 ml-auto">
				<button class="btn btn-danger" type="reset">Batal</button>
				<button class="btn btn-success" type="submit">Simpan</button>
			</div>
		</div>
	</form>
</div>