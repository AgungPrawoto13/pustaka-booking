<!DOCTYPE html>
<html>
<head>
	<title>tampil pop up</title>
	<script>
		function setInduk()
		{
			window.opener.document.getElementById("kata2").value=document.getElementById("inputan").value;
		}
	</script>
</head>
<body>
	<form name="myForm">
		<input type="text" name="inputan" id="inputan">
		<input type="button" value="Clik" onclick="setInduk()">
	</form>
</body>
</html>