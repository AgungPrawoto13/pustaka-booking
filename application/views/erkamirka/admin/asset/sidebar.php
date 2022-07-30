<?php
$email=$this->session->userdata('email');
$ket=$this->transaksi->cek_admin($email);
$keterangan=$ket->keterangan;
?>
<aside class="main-sidebar sidebar-dark-primary evelation-4" id="dropdownMenu" aria-labelledby="dropdownMenu">
	<a class="brand-link" href="<?= base_url('erkamirka/admin');?>">
		<img src="<?= base_url('assets/');?>kreasi/img/erkamirka-logo-kecil.jpeg" alt="Logo Erkamirka" class="brand-image img-circle evelation-3">
		<span class="brand-text font-weight-light">Admin</span>
	</a>

	<nav class="mt-2">
		<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
			<li class="nav-item has-treeview menu-open">
				<a class="nav-link" href="<?= base_url('erkamirka/admin');?>">
					<i class="nav-icon fas fa-tachometer-alt"></i>
					<span>Dashboard</span>
				</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#">
					<i class="nav-icon fas fa-th"></i>
					<p>
						Daftar Sales
						<i class="fas fa-angle-left right"></i>
					</p>
				</a>
				<ul class="nav nav-treeview">
					<li class="nav-item">
						<a class="nav-link" href="<?= base_url('erkamirka/sales_order?sesi=1');?>">
							<span>Sales</span>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?= base_url('erkamirka/sales_order/so?sesi=1');?>">
							<span>Sales Order</span>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?= base_url('erkamirka/sales_order/po?sesi=1');?>">
							<span>Purchase Order</span>
						</a>
					</li>
				</ul>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#">
					<i class="nav-icon fas fa-book"></i>
					<p>
						Finance
						<i class="fas fa-angle-left right"></i>
					</p>
				</a>

				<ul class="nav nav-treeview">
					<li class="nav-item">
						<a class="nav-link" href="<?= base_url('erkamirka/finance/finance?sesi=2');?>">
							<span>Form Invoice</span>
						</a>
					</li>
				</ul>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#">
					<i class="nav-icon fas fa-book"></i>
					<p>
						Operational
						<i class="fas fa-angle-left right"></i>
					</p>
				</a>

				<ul class="nav nav-treeview">
					<li class="nav-item">
						<a class="nav-link" href="<?= base_url('erkamirka/operational?sesi=3');?>">
							<span>Operational</span>
						</a>
					</li>
				</ul>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#">
					<i class="nav-icon fas fa-book"></i>
					<p>
						Produksi
						<i class="fas fa-angle-left right"></i>
					</p>
				</a>

				<ul class="nav nav-treeview">
					<li class="nav-item">
						<a class="nav-link" href="<?= base_url('erkamirka/produksi?sesi=4');?>">
							<span>Produksi</span>
						</a>
					</li>
				</ul>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="<?= base_url('erkamirka/admin/tambah_admin?sesi=5');?>">
					<i class="nav-icon fas fa-user"></i>
					<p>Tambah Admin</p>
				</a>
			</li>
		</ul>

		<a class="brand-link nav-link" href="<?= base_url('erkamirka/admin/keluar');?>">
			<i class="fas fa-sign-out-alt"></i>
			<span>Keluar</span>
		</a>
	</nav>
</aside>