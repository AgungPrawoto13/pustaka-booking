<script src="<?= base_url('assets/');?>vendor/jquery/jquery.min.js"></script>
<script src="<?= base_url('assets/');?>js/jquery/jquery-ui.min.js"></script>
<script>
	$.widget.bridge('uibutton', $.ui.button)
</script>
<script src="<?= base_url('assets/');?>js/jquery/bootstrap.bundle.min.js"></script>
<script src="<?= base_url('assets/');?>vendor/chart.js/Chart.min.js"></script>
<script src="<?= base_url('assets/');?>js/jquery/sparkline.js"></script>
<script src="<?= base_url('assets/');?>js/jquery/jquery.vmap.min.js"></script>
<script src="<?= base_url('assets/');?>js/jquery/maps/jquery.vmap.indonesia.js"></script>
<script src="<?= base_url('assets/');?>js/jquery/jquery.knob.min.js"></script>
<script src="<?= base_url('assets/');?>js/jquery/moment.min.js"></script>
<script src="<?= base_url('assets/');?>js/jquery/daterangepicker.js"></script>
<script src="<?= base_url('assets/');?>js/jquery/tempusdominus-bootstrap-4.min.js"></script>
<script src="<?= base_url('assets/');?>js/jquery/summernote-bs4.min.js"></script>
<script src="<?= base_url('assets/');?>js/jquery/jquery.overlayScrollbars.min.js"></script>
<script src="<?= base_url('assets/');?>js/jquery/adminlte.js"></script>
<script src="<?= base_url('assets/');?>js/jquery/dashboard.js"></script>
<script src="<?= base_url('assets/');?>js/jquery/demo.js"></script>
<script src="<?= base_url('assets/');?>user/js/bootstrap.js"></script>
<script src="<?= base_url('assets/');?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?= base_url('assets/');?>vendor/jquery-easing/jquery.easing.min.js"></script>
<script src="<?= base_url('assets/');?>js/sb-admin-2.min.js"></script>

<script type="text/javascript">

	$('#tambahin').on('click',function(){
		let nam=$('#tbl tbody tr:last').html();
		$('#tbl tbody').append('<tr><td><input type="text" name="ukuran" class="form-control"></td><td><input type="text" name="deskripsi" class="form-control"></td><td><input type="text" name="unit" class="form-control"></td><td><input type="number" name="qty" class="form-control"></td><td><input type="text" name="unit_price" class="form-control"></td><td><input type="text" name="total" class="form-control"></td><td><a href="3"><button type="button" class="btn btn-primary btn-sm"><i class="fas fa-minus-circle primary"></i></button></a></td></tr>');
		$('#tbl tbody tr:last input').val('');
	})


	$('#tbl').on('click','tr a', function(e){
		let yuhu=$('#tbl tbody tr').length;
		e.preventDefault();
		if(yuhu == 1 || yuhu <= 1){
			alert('waduh')
		}else{
			$(this).parents('tr').remove();
		}
	})

	window.captureEvent(Event.MOUSEMOVE);
	window.onmousemove = koordinat;
	function koordinat(e){
		status="x:"+e.pageX+"y:"+e.pageY;
	}
</script>

<script>
	$('.alert').alert().delay(3000).slideUp('slow');
</script>
<!-- <script>
	$("#menu a.tutup, #menu a.buka").click(function(e){
		e.preventDefault();
		if($(this).hasClass("buka"))
		{
			$(this).removeClass("buka");
			$(this).parent().children("ul").stop(true, true).slideUp("normal");
		} else {
			$("#menu a.tutup.buka").removeClass("buka");
			$(this).addClass("buka");
			$(".sub").filter(":visible").slideUp("normal");
			$(this).parent().children("ul").stop(true, true).slideDown("normal");
		}
	});
</script> -->
</body>
</html>