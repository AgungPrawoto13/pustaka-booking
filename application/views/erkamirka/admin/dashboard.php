<div class="container-fluid">
	<div class="row mb-2">
		<div class="col-sm-12">
			<?= $this->session->flashdata('pesan');?>
		</div>
		
		<div class="col-sm-6 mt-3">
			<h1 class="m-0 text-dark">Dashboard</h1>
		</div>
		<div class="col-sm-6 mt-3">
			<ol class="breadcrumb float-sm-right">
				<li class="breadcrumb-item"><a href="<?= base_url('erkamirka/admin');?>">Home</a></li>
				<li class="breadcrumb-item">Dashboard v1</li>
			</ol>
		</div>
	</div>
</div>

<section class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-12 col-sm-6">
				<div class="small-box bg-info">
					<div class="inner text-center">
						<i class="fas fa-book fa-2x mt-3"></i>
						<h3 class="ml-2">Sales</h3>
					</div>
					<a class="small-box-footer" href="<?= base_url('erkamirka/sales_order?sesi=1');?>">
						More info
						<i class="fas fa-arrow-circle-right"></i>
					</a>
				</div>
			</div>

			<div class="col-12 col-sm-6">
				<div class="small-box bg-primary text-center">
					<div class="inner">
						<i class="fas fa-book fa-2x mt-3"></i>
						<h3>Finance</h3>
					</div>
					<a class="small-box-footer" href="<?= base_url('erkamirka/finance?sesi=2');?>">
						More info
						<i class="fas fa-arrow-circle-right"></i>
					</a>
				</div>
			</div>

			<div class="col-12 col-sm-6">
				<div class="small-box bg-danger text-center">
					<div class="inner">
						<i class="fas fa-book fa-2x mt-3"></i>
						<h3>Operational</h3>
					</div>
					<a class="small-box-footer" href="<?= base_url('erkamirka/operational?sesi=3');?>">
						More info
						<i class="fas fa-arrow-circle-right"></i>
					</a>
				</div>
			</div>

			<div class="col-12 col-sm-6">
				<div class="small-box bg-success text-center">
					<div class="inner">
						<i class="fas fa-book fa-2x mt-3"></i>
						<h3>Produksi</h3>
					</div>
					<a class="small-box-footer" href="<?= base_url('erkamirka/produksi?sesi=4');?>">
						More info
						<i class="fas fa-arrow-circle-right"></i>
					</a>
				</div>
			</div>
		</div>
	</div>
</section>
