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
							<input type="text" name="spk" class="form-control" value="001">
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
									<input type="checkbox" name="in_house">
								</div>
								<div class="col-sm-1">
									<label>In_House</label>
								</div>
							</div>
						</div>

						<div class="form-group col-sm-3">
							<div class="row">
								<div class="col-sm-2">
									<input type="checkbox" name="vendor">
								</div>
								<div class="col-sm-1">
									<label>Vendor</label>
								</div>
							</div>
						</div>

						<div class="form-group col-sm-3">
							<div class="row">
								<div class="col-sm-2">
									<input type="checkbox" name="cmt">
								</div>
								<div class="col-sm-1">
									<label>CMT</label>
								</div>
							</div>
						</div>

						<div class="form-group col-sm-3">
							<div class="row">
								<div class="col-sm-2">
									<input type="checkbox" name="fob">
								</div>
								<div class="col-sm-1">
									<label>FOB</label>
								</div>
							</div>
						</div>

						<div class="form-group col-sm-10">
							<label>To</label>
							<div class="row">
								<div class="col-sm-3">
									<label>Attn</label>
								</div>
								<div class="col-sm-9">
									<label>Bpk Budi</label>
								</div>
							</div>
						</div>

						<div class="form-group col-sm-10">
							<div class="row">
								<div class="col-sm-3">
									<label>No CP</label>
								</div>
								<div class="col-sm-9">
									<label>08xxxx</label>
								</div>
							</div>
						</div>

						<div class="form-group col-sm-10">
							<div class="row">
								<div class="col-sm-3">
									<label>Email</label>
								</div>
								<div class="col-sm-9">
									<label>budi@gmail.com</label>
								</div>
								<div class="col-sm-3"></div>
								<div class="col-sm-9 mt-2">
									<label>SEWING PRODUCTION</label>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="col-sm-5">
				<div class="small-box p-3">
					<div class="row">
						<div class="form-group col-sm-3">
							<div class="row">
								<div class="col-sm-1">
									<input type="checkbox" name="garmen">
								</div>
								<div class="col-sm-1">
									<label>Garmen</label>
								</div>
							</div>
						</div>

						<div class="form-group col-sm-6">
							<div class="row">
								<div class="col-sm-1">
									<input type="checkbox" name="seragam_kerja">
								</div>
								<div class="col-sm-10">
									<label>Seragam Kerja</label>
								</div>

								<div class="col-sm-1">
									<input type="checkbox" name="seragam_tambang">
								</div>
								<div class="col-sm-10">
									<label>Seragam Tambang</label>
								</div>

								<div class="col-sm-1">
									<input type="checkbox" name="coverall">
								</div>
								<div class="col-sm-10">
									<label>Coverall / wearpack</label>
								</div>

								<div class="col-sm-1">
									<input type="checkbox" name="seragam_security">
								</div>
								<div class="col-sm-10">
									<label>Seragam Security</label>
								</div>

								<div class="col-sm-1">
									<input type="checkbox" name="other">
								</div>
								<div class="col-sm-3">
									<label>Other</label>
								</div>
							</div>
						</div>

						<div class="col-sm-3">
							<div class="row">
								<div class="col-sm-1">
									<input type="checkbox" name="t-shirt">
								</div>
								<div class="col-sm-9">
									<label>T-Shirt</label>
								</div>

								<div class="col-sm-1">
									<input type="checkbox" name="polo">
								</div>
								<div class="col-sm-8">
									<label>Polo</label>
								</div>

								<div class="col-sm-1">
									<input type="checkbox" name="safari">
								</div>
								<div class="col-sm-9">
									<label>Safari</label>
								</div>

								<div class="col-sm-1">
									<input type="checkbox" name="denim">
								</div>
								<div class="col-sm-9">
									<label>Denim</label>
								</div>

								<div class="col-sm-12">
									<label>Appron</label>
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
					<label>IDR</label>
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
							<td>1</td>
							<td></td>
							<td>M</td>
							<td>50</td>
							<td>Pcs</td>
							<td>50</td>
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