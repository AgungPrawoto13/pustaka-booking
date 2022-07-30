	<div class="container text-dark">
		<div class="row">
			<div class="col-sm-7">
				<h2>Transaksi Penjualan</h2>
			</div>
			<div class="col-4 col-sm-2 mt-2">
				<div class="dropdown">
					<button class="btn btn-primary dropdown-toggle" type="button" id="#dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Transaksi</button>
					<div class="dropdown-menu" aria-labelledby="dropdownMenuButton" id="dropdownMenuButton">
						<a class="dropdown-item" href="<?= base_url('erkamirka/sales_order/so?sesi=1');?>">Sales Order</a>
						<a class="dropdown-item" href="<?= base_url('erkamirka/sales_order/po?sesi=1');?>">Purchase Order</a>
					</div>
				</div>
			</div>
			<div class="col-8 col-sm-3 mt-2">
				<div class="input-group input-group-sm">
					<input class=" form-control" type="text" placeholder="Cari" aria-label="Search">
					<div class="input-group-append">
						<button class="btn btn-navbar" type="submit">
							<i class="fas fa-search"></i>
						</button>
					</div>
				</div>
			</div>
			<div class="col-sm-12 mt-3">
				<table border="1" cellpadding="10" class="table table-striped table-bordered">
					<thead align="center">
						<tr>
							<th>Tanggal</th>
							<th>Nama AC</th>
							<th>No. PO</th>
							<th>Buyer</th>
							<th>P/M</th>
							<th colspan="2">Tindakan</th>
						</tr>
					</thead>
					<tbody align="center">
						<tr>
							<td>12-01-2019</td>
							<td>Bram</td>
							<td>PO 001</td>
							<td>Connusa</td>
							<td>Produksi</td>
							<td><a class="btn btn-primary" type="submit" href="#">Edit</a></td>
							<td><a class="btn btn-danger" type="submit" href="#">Hapus</a></td>
						</tr>
						<tr>
							<td>12-01-2019</td>
							<td>Bram</td>
							<td>PO 001</td>
							<td>Connusa</td>
							<td>Produksi</td>
							<td><a class="btn btn-primary" type="submit" href="#">Edit</a></td>
							<td><a class="btn btn-danger" type="submit" href="#">Hapus</a></td>
						</tr>
						<tr>
							<td>12-01-2019</td>
							<td>Bram</td>
							<td>PO 001</td>
							<td>Connusa</td>
							<td>Produksi</td>
							<td><a class="btn btn-primary" type="submit" href="#">Edit</a></td>
							<td><a class="btn btn-danger" type="submit" href="#">Hapus</a></td>
						</tr>
					</tbody>
					</thead>
				</table>
			</div>
		</div>
	</div>