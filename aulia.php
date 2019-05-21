<!DOCTYPE html>
<html>
<head>
	<title>PHP 1</title>
</head>
<body>
<form method="post" action="proses.php">
	<table>
		<tr>
			<td>Nama</td><td>:</td>
			<td><input type="text" name="nama"></td>
		</tr>
		<tr>
			<td>Password</td><td>:</td>
			<td><input type="password" name="password"></td>
		</tr>
		<tr>
			<td>Jenis Kelamin</td><td>:</td>
			<td><input type="radio" name="jk" value="Laki-Laki" checked />Laki-Laki
			<input type="radio" name="jk" value="Perempuan">Perempuan</td>
		</tr>
		<tr>
			<td>Alamat</td><td>:</td>
			<td><textarea name="alamat"></textarea></td>
		</tr>
		<tr>
			<td>Asal Kota</td><td>:</td>
			<td>
			<select name="asal_kota">
				<option value="Jakarta">Jakarta</option>
				<option value="Yogyakarta">Yogyakarta</option>
				<option value="Palu">Palu</option>
			</select>	
			</td>
		</tr>
		<tr>
			<td></td><td></td>
			<td><input type="submit" name="kirim" value="submit"></td>
		</tr>
	</table>
</form>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<?php
	echo "<b>ALVIN 26/12/2018</b>";
?>
</body>
</html>