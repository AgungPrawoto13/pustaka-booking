
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/');?>bootstrap-4.5.0/css/bootstrap.css">
</head>
<body>
	<ul>
	<?php

		for($i=0; $i<=10; $i++){ 
			echo "<li>".$tampilkan[$i]['nama']."</li>";
		}
	?>
	</ul>
</body>
</html>