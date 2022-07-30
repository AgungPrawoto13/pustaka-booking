</div>
<script src="<?= base_url('assets/');?>user/js/bootstrap.js"></script>
<script src="<?= base_url('assets/');?>vendor/jquery/jquery.min.js"></script>
<script src="<?= base_url('assets/');?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?= base_url('assets/');?>vendor/jquery-easing/jquery.easing.min.js"></script>
<script src="<?= base_url('assets/');?>js/sb-admin-2.min.js"></script>

<script>
	$('.alert').alert().delay(3000).slideUp('slow');
</script>
<script type='text/javascript'>
<!-- Publish By Xkomo-->
$("#menu a.tutup,#menu a.buka").click(function(e){
    e.preventDefault();
    if($(this).hasClass("buka"))
    {
    $(this).removeClass("buka");
    $(this).parent().children("ul").stop(true,true).slideUp("normal");
    } else {
    $("#menu a.tutup.buka").removeClass("buka");
    $(this).addClass("buka");
    $(".sub").filter(":visible").slideUp("normal");
    $(this).parent().children("ul").stop(true,true).slideDown("normal");
    }
});
</script>
</body>
</html>