<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div id="container">
		<div class="isi-container">
			<table border="1" align="center" cellpadding="5" cellspacing="0">
				<tr>
					<td colspan="3" align="center"><h3>Hasil Pembelian</h3></td>
				</tr>
			<tr>
				<td>Nama Pembeli</td>
				<td>:</td>
				<td><?php var_dump($nama);?></td>
			</tr>
			<tr>
				<td>No Hp</td>
				<td>:</td>
				<td><?php var_dump($nohp);?></td>
			</tr>
			<tr>
				<td>Merk Sepatu</td>
				<td>:</td>
				<td><?php var_dump($merk);?></td>
			</tr>
			<tr>
				<td>Ukuran Sepatu</td>
				<td>:</td>
				<td><?php var_dump($ukuran);?></td>
			</tr>
			<tr>
				<td>Harga</td>
				<td>:</td>
				<td><?php var_dump($harga);?></td>
			</tr>
			<tr>
				<td colspan="3" align="center"><a href="<?=base_url('C_Sepatu/index');?>">Balik Lagi</a></td>
			</tr>		
			</table>
		</div>
	</div>
</body>
</html>