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
						<button class="btn btn-primary dropdown-toggle" type="button" id="#dropdownMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Sales Order</button>

						<div class="dropdown-menu" aria-labelledby="dropdownMenu" id="dropdownMenu">
							<a class="dropdown-item" href="<?= base_url('erkamirka/admin/tampil_po');?>" type="button">Purchase Order</a>
						</div>
					</div>
				</div>

				<div class="col-sm-12">
					<hr>
				</div>

				<div class="form-group col-sm-3">
					<label>Alamat</label>
					<label>Jl. Mabad Bawah 1 No. 9 Rengas</label>
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
					<label>P.O Number</label>
					<input type="text" name="po_number" class="form-control">
				</div>

				<div class="col-sm-12">
					<hr>
				</div>

				<div class="col-sm-12">
					<h4>Spesifikasi</h4>
				</div>

				<div class="form-group col-sm-4 mt-3">
					<div class="row">
						<div class="col-sm-5">
							<label>Produk Pesanan</label>
						</div>
						<div class="col-sm-7">
							<label>T-Shirt</label>
						</div>

						<div class="col-sm-5 mt-3">
							<label>Merk Bahan</label>
						</div>
						<div class="col-sm-7 mt-3">
							<label>Verlando</label>
						</div>

						<div class="col-sm-5 mt-3">
							<label>Tipe Bahan</label>
						</div>
						<div class="col-sm-7 mt-3">
							<label>Drill</label>
						</div>
					</div>
				</div>

				<div class="form-group col-sm-4 mt-3">
					<div class="row">
						<div class="col-sm-5">
							<label>Kode Warna</label>
						</div>
						<div class="col-sm-7">
							<label>008</label>
						</div>

						<div class="col-sm-5 mt-3">
							<label>Jenis</label>
						</div>
						<div class="col-sm-7 mt-3">
							<label>Polyflex</label>
						</div>
					</div>
				</div>

				<div class="form-group col-sm-4 mt-3">
					<div class="row">
						<div class="col-sm-3">
							<label>Note</label>
						</div>
						<div class="col-sm-7">
							<label>PVC Merah</label>
						</div>
					</div>
				</div>

				<div class="form-group col-sm-12 mt-3">
					<table class="table table-bordered table-striped">
						<thead align="center">
							<tr>
								<th width="32%">Size</th>
								<th width="32%">QTY</th>
								<th>Note</th>
							</tr>
						</thead>
						<tbody align="center">
							<tr>
								<td>M</td>
								<td>20</td>
								<td><input type="text" name="note" class="form-control-plaintext text-dark" placeholder="Ketik Catatan"></td>
							</tr>
						</tbody>
					</table>
				</div>

				<div class="form-group col-sm-11 mt-4">
					<div class="row">
						<div class="col-sm-12">
							<i class="fas fa-paperclip"></i>
							<label>Lampiran</label>
						</div>
						<div class="col-sm-7">
							<div class="small-box bg-light col-sm-6 p-5">
								Lampirkan Preview <a href="#">Disini</a>
							</div>
						</div>
					</div>
				</div>

				<div class="form-group col-sm-2 ml-auto">
					<a class="btn btn-primary" href="#">Edit</a>
					<button class="btn btn-warning" type="submit">Buat SPK</button>
				</div>
			</div>
		</form>
	</div>
</div>
