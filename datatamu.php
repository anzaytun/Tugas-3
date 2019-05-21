<!DOCTYPE html>
<html>
<head>
	<title>Post Test</title>
	<link rel="stylesheet" type="text/css" href="css/stylebaru.css">
</head>
<body>

<div class="header">
	
</div>

<div class="menubar">
		<ul>
			<li><a href="index.html"><b>Home</b></a></li>
			<li><a href="datatamu.php"><b>Lihat Data Tamu</b></a></li>
			<li><a href="news.html"><b>News</a></b></li>
			<li><a href="contact.html"><b>Contact</b></a></li>
		</ul>
</div>	

<div class="menu1">
	<ul>
		<br>
			<li><a href="http://bimawa.uad.ac.id/">Bimawa UAD</a></li>
			<li><a href="https://elearning.uad.ac.id/">Elearning UAD</a></li>
			<li><a href="https://portal.uad.ac.id/">Portal UAD</a></li>
			<li><a href="https://news.uad.ac.id/">News UAD</a></li>
			<li><a href="http://digilib.uad.ac.id/">Perpustakan UAD</a></li>
	</ul>
</div>

<div class="menu2">
	<center>
		<h2>LIST DATA TAMU WEBSITE UAD</h2>
		<hr width="88%">
	</center>
	
	<?php
	error_reporting(0);
	$bil = 1;
	echo "<head><title>GUEST BOOK</title></head>";

	$fp = fopen("tamu.txt", "r");
	echo "<table border=1 width=85%>";
	echo "<th>No.</th>";
	echo "<th>Nama Lengkap</th>";
	echo "<th>Password</th>";
	echo "<th>Jenis Kelamin</th>";
	echo "<th>Alamat</th>";
	echo "<th>Asal Kota</th>";
	while($isi = fgets($fp,80))
	{
		$pisah = explode("|",$isi);
		echo "<tr><td><center>$bil.</center></td>";
		echo "<td>$pisah[0]</td>";
		echo "<td>$pisah[1]</td>";
		echo "<td>$pisah[2]</td>";
		echo "<td>$pisah[3]</td>";
		echo "<td>$pisah[4]</td></tr>";
	$bil++;
	}
	echo "</table>";
	echo "<br>";
	echo "<a class=btn1 href=index.html> Isi Buku Tamu </a>&nbsp";
	echo "<a class=btn2 href=contact.html> Profil </a>";
?>
	
</div>

<div class="menu3">
	<center><p><font color="white">Gambar Pembuat Website :</font></p>
		<br>
	<p><font color="white">Aulia Nur Zaytun<br>1800018027</font></p>
	<a target="_blank" href="aul.jpg">
	<img src="aul.jpg" width="80" height="100">
	</center>
</div>

<div class="footer">
		
</div>

</body>
</html>