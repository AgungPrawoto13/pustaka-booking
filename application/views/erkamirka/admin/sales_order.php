	<div class="container text-dark mt-0">
		<form action="<?= base_url('erkamirka/sales_order/so?sesi=1');?>" method="post">
			<div class="row">
				<div class="form-group col-sm-12">
					<?= $this->session->flashdata('pesan');?>
				</div>
				<div class="form-group col-sm-3">
					<label>Client</label>
					<input type="text" name="client" class="form-control" placeholder="Client" value="<?= set_value('client');?>"><?= form_error('client','<small class="text-danger">','</small>');?>
				</div>
				<div class="form-group col-sm-2">
					<label>Attn</label>
					<input type="text" name="attn" class="form-control" placeholder="Attn" value="<?= set_value('attn');?>"><?= form_error('attn','<small class="text-danger">','</small>');?>
				</div>
				<div class="form-group col-sm-2">
					<label>Phone</label>
					<input type="text" name="phone" class="form-control" placeholder="Nomer Telepon" value="<?= set_value('phone');?>"><?= form_error('phone','<small class="text-danger">','</small>');?>
				</div>
				<div class="form-group col-sm-2 mt-4 ml-auto">
					<div class="dropdown">
						<button class="btn btn-primary dropdown-toggle" type="button" id="#dropdownMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Sales Order</button>

						<div class="dropdown-menu" aria-labelledby="dropdownMenu" id="dropdownMenu">
							<a class="dropdown-item" href="<?= base_url('erkamirka/sales_order/po?sesi=1');?>" type="button">Purchase Order</a>
						</div>
					</div>
				</div>

				<div class="col-sm-12">
					<hr>
				</div>

				<div class="form-group col-sm-3">
					<label>Alamat</label>
					<textarea name="alamat" placeholder="Alamat" value="<?= set_value('alamat');?>"></textarea>
					<?= form_error('alamat','<small class="text-danger">','</small>');?>
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
							<input type="date" name="tanggal" class="form-control" value="<?= set_value('tanggal');?>">
						</div>
						<?= form_error('tanggal','<small class="text-danger">','</small>');?>
					</div>
					<div class="col-sm-12 mt-3">
						<label>Delivery Date</label>
						<div class="input-group">
							<div class="input-group-prepend">
								<div class="input-group-text">
									<i class="far fa-calendar-alt"></i>
								</div>
							</div>
							<input type="date" name="deliver_date" class="form-control" value="<?= set_value('deliver_date');?>">
						</div>
						<?= form_error('deliver_date','<small class="text-danger">','</small>');?>
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
					<input type="text" name="po_number" class="form-control" value="<?= set_value('po_number');?>"><?= form_error('po_number','<small class="text-danger">','</small>');?>
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
							<input type="text" name="produk_pesanan" class="form-control" value="<?= set_value('produk_pesanan');?>"><?= form_error('produk_pesanan','<small class="text-danger">','</small>');?>
						</div>

						<div class="col-sm-5 mt-3">
							<label>Merk Bahan</label>
						</div>
						<div class="col-sm-7 mt-3">
							<input type="text" name="merk_bahan" class="form-control" value="<?= set_value('merk_bahan');?>"><?= form_error('merk_bahan','<small class="text-danger">','</small>');?>
						</div>

						<div class="col-sm-5 mt-3">
							<label>Tipe Bahan</label>
						</div>
						<div class="col-sm-7 mt-3">
							<input type="text" name="tipe_bahan" class="form-control" value="<?= set_value('tipe_bahan');?>"><?= form_error('tipe_bahan','<small class="text-danger">','</small>');?>
						</div>
					</div>
				</div>

				<div class="form-group col-sm-4 mt-3">
					<div class="row">
						<div class="col-sm-5">
							<label>Kode Warna</label>
						</div>
						<div class="col-sm-7">
							<input type="text" name="kode_warna" class="form-control" value="<?= set_value('kode_warna');?>"><?= form_error('kode_warna','<small class="text-danger">','</small>');?>
						</div>

						<div class="col-sm-5 mt-3">
							<label>Detailing</label>
						</div>
						<div class="col-sm-7 mt-3">
							<select class="btn btn-outline-primary btn-block" name="detail">
								<option value="Polyflex">Polyflex</option>
								<option value="Sablon">Sablon</option>
								<option value="Bordir">Bordir</option>
							</select>
						</div>
					</div>
				</div>

				<div class="form-group col-sm-4 mt-3">
					<div class="row">
						<div class="col-sm-3">
							<label>Note</label>
						</div>
						<div class="col-sm-7">
							<input type="text" name="note" class="form-control">
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
								<td><input type="text" name="note1" class="form-control-plaintext text-dark" placeholder="Ketik Catatan"></td>
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
					<button type="reset" class="btn btn-danger">Batal</button>
					<button class="btn btn-success" type="submit">Buat</button>
				</div>
			</div>
		</form>
	</div>
</div>
