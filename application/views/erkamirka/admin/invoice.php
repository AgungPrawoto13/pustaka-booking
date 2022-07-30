<div class="container text-dark">
	<div class="row">
		<div class="col-sm-8">
			<h3>Invoice Penjualan</h3>
		</div>
		<div class="col-sm-4 ml-auto">
			<div class="col-sm-10">
				<form>
					<div class="input-group col-sm-10 ml-5">
						<input class="form-control" type="text" placeholder="Cari">
						<div class="input-group-append">
							<button class="btn btn-navbar" type="submit">
								<i class="fas fa-search"></i>
							</button>
						</div>
					</div>
					<div class="col-sm-8 ml-5 mt-2">
						<a class="btn btn-success btn-block" href="<?= base_url('erkamirka/finance/buat_invoice?sesi=2');?>">Buat Invoice</a>
					</div>
				</form>
			</div>
		</div>

		<div class="col-sm-12 mt-5">
			<table class="table table-bordered table-striped" cellpadding="10">
				<thead align="center">
					<tr>
						<th>No Transaksi</th>
						<th>Pelanggan</th>
						<th>Tgl Jatuh Tempo</th>
						<th>Status</th>
						<th>Tindakan</th>
					</tr>
				</thead>
				<tbody align="center">
					<tr>
						<td>INV/ERKM</td>
						<td>Connusa</td>
						<td>31-02-2020</td>
						<td>Lunas</td>
						<td><a href="#" class="btn btn-primary">Cetak</a></td>
					</tr>
					<tr>
						<td>INV/ERKM</td>
						<td>Connusa</td>
						<td>31-02-2020</td>
						<td>Belum Ditagih</td>
						<td><a href="#" class="btn btn-success">Terima Pembayaran</a></td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</div>