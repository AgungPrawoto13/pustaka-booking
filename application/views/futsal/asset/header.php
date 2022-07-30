<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">
    <title><?php echo $judul;?></title>
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/');?>vendor/fontawesome-free/css/all.css">
    <link href="<?= base_url('assets/');?>futsal/asset/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url('assets/');?>futsal/style.css" rel="stylesheet">
    <link href="<?= base_url('assets/');?>futsal/datepicker.css" rel="stylesheet">
    <script src="<?= base_url('assets/');?>futsal/asset/js/jquery.js"></script>
    <script type="text/javascript">
      $(document).on("click", ".open-AddBookDialog", function () {
           var myBookId = $(this).data('id');
           var myBookId1 = $(this).data('id1');
           var myBookId2 = $(this).data('id2');
           var myBookId3 = $(this).data('id3');
           var myBookId4 = $(this).data('id4');
           var myBookId5 = $(this).data('id5');
           var myBookId6 = $(this).data('id6');
           $(".modal-body #bookId").val( myBookId );
           $(".modal-body #bookId1").val( myBookId1 );
           $(".modal-body #bookId2").val( myBookId2 );
           $(".modal-body #bookId3").val( myBookId3 );
           $(".modal-body #bookId4").val( myBookId4 );
           $(".modal-body #bookId5").val( myBookId5 );
           $(".modal-body #bookId6").val( myBookId6 );
      });
    </script>
</head>
<body>
	<div class="container">
		<img style="width:100%;" src="<?= base_url('assets/');?>futsal/image/header.jpg" />
		<nav class="navbar navbar-default">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
					  <span class="sr-only">Toggle navigation</span>
					  <span class="icon-bar"></span>
					  <span class="icon-bar"></span>
					  <span class="icon-bar"></span>
					</button>
				</div>

				<div id="navbar" class="navbar-collapse collapse">
					<ul class="nav navbar-nav">
            
						<li><a href="<?= base_url('futsal/pengunjung');?>"><i class="glyphicon glyphicon-home"></i> Home</a></li>
						<?php
						if($this->session->userdata('email')){
							?>
								<li><a href="<?= base_url('futsal/member_futsal/lapangan');?>"><i class="fas fa-newspaper"></i> Lihat Lapangan</a></li>
								<li><a href="#"><i class="fas fa-shopping-cart"></i> Pemesanan</a></li>
								<li><a href="<?= base_url('futsal/member_futsal/pembayaran');?>"><i class="fas fa-money-bill"></i> Pembayaran</a></li>
								<li><a href="#" data-toggle="modal" data-target="#upload" ><i class="fas fa-upload"></i>Upload Pembayaran</a></li>
								<li><a href="<?= base_url('futsal/member_futsal/edit_profile');?>"><i class="fas fa-user"></i><?= $this->session->userdata('nama_lengkap');?></a></li>
								<li><a href="<?= base_url('futsal/member_futsal/log_out');?>"><i class="fas fa-sign-out-alt"></i> Logout</a></li>

							<?php
						}else{
							?>
								<li><a href="<?= base_url('futsal/pengunjung/lapangan');?>"><i class="glyphicon glyphicon-list-alt"></i> Lihat Lapangan</a></li>
								<li><a href="#" data-toggle="modal" data-target="#kode2"><i class="glyphicon glyphicon-list-alt"></i> Petunjuk Pemesanan</a></li>

								<li><a href="#" data-toggle="modal" data-target="#kode"><i class="glyphicon glyphicon-list-alt"></i> Login</a></li>
							<?php
						}
						?>
					</ul>
			  	</div><!--/.nav-collapse -->
			</div><!--/.container-fluid -->
		</nav>

	<div class="post text">