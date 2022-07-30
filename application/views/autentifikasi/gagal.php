<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Gagal Aktofasi Akun</title>

	<!-- custom fonts for this template -->
	<link href="<?= base_url('assets/');?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.comcss?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

	<!-- custom styles for this template -->
	<link href="<?= base_url('assets/');?>css/sb-admin-2.min.css" rell="stylesheet">
</head>

<body id="page-top">

	<!-- page wrapper -->
	<div id="wrapper">

		<!-- content wrapper -->
		<div id="content-wrapper" class="d-flex flex-column">

			<!-- main content -->
			<div id="content">

				<!-- begin page content -->
				<div class="container-fluid mt-5">

					<!-- 404 error text -->
					<div class="text-center">
						<?= $this->session->flashdata('pesan');?>
						<a href="<?= base_url('autentifikasi');?>" class="btn btn-secondar y">&larr; Close</a>
					</div>

				</div>
				<!-- contai n er-fluid -->

			</div>
			<!-- end of main content -->

		</div>
		<!-- end of content wrapper -->

	</div>
	<!-- end of page wrap per -->

	<!-- scroll to top button -->
	<a class="scroll-to-top rounded" href="#page-top"><i class="fas fa-angle-up"></i></a>

	<!-- bootstrap core javascript -->
	<script src="<?= base_url('assets/');?>vendor/jquery/jquery.min.js"></script>
	<script src="<?= base_url('assets/');?>vendor/bootstrap/js/bootstrap.bundle.min.j s"></script>

	<!-- core plugin javascript -->
	<script src="<?= base_url('assets/');?>js/sb-admin-2.min.js"></script>
	<script>
		$('.alert-message').alert().delay(3500).slideUp('slow');
	</script>
</body>
</html>
