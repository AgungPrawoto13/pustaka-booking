<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div id="contener">
		<div class="isi-contener">
		<form action="<?= base_url('C_Sepatu/proses'); ?>" method="post">
			<table border="1" align="center" cellpadding="5" cellspacing="0">
				<tr>
					<td colspan="3" align="center"><h3>Selamat datang di toko sepatu</h3></td>
				</tr>
				<tr>
					<td>Nama Pembeli</td>
					<td>:</td>
					<td><input type="text" name="nama"></td>
				</tr>
				<tr>
					<td>No Hp</td>
					<td>:</td> 
					<td><input type="text" name="nohp"></td>
				</tr>
				<tr>
					<td>Merk Sepatu</td>
					<td>:</td>
					<td><select name="merk">
				                 <option value="-PILIH-">-Pilih-</option>
								 <option value="Nike">Nike</option>
								 <option value="Adidas">Adidas</option>
								 <option value="Kickers">Kickers</option>
								 <option value="Eiger">Eiger</option>
								 <option value="Bucherri">Bucherri</option></select></td> 
				</tr>
				<tr>
					<td>Ukuran Sepatu</td> 
					<td>:</td> 
					<td><select name="ukuran">
								   <option value="-PILIH-">-Pilih-</option>
								   <option value="32">32</option>
								   <option value="33">33</option>
								   <option value="34">34</option>
								   <option value="35">35</option>
								   <option value="36">36</option>
								   <option value="37">37</option>
								   <option value="38">38</option>
								   <option value="39">39</option>
								   <option value="40">40</option>
								   <option value="41">41</option>
								   <option value="42">42</option>
								   <option value="43">43</option>
								   <option value="44">44</option></select></td>
				</tr>
				<tr>
					<td colspan="3" align="center"><input type="submit" value="Kirim" class="btn"><input type="reset" value="batal" class="btn"></td>
				</tr>
			</table>
		</form>
		</div>
	</div>
</body>
</html>
