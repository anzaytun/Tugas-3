<?php
error_reporting(0);
echo "<head><title>GUEST BOOK</title></head>";

$fp = fopen("tamu.txt", "r");
echo "<table border=0>";
while($isi = fgets($fp,80))
{
	$pisah = explode("|",$isi);
	echo "<tr><td>Nama</td><td>: $pisah[0]</td></tr>";
	echo "<tr><td>Password</td><td>: $pisah[1]</td></tr>";
	echo "<tr><td>Jenis Kelamin</td><td>: $pisah[2]</td></tr>";
	echo "<tr><td>Alamat</td><td>: $pisah[3]</td></tr>";
	echo "<tr><td>Asal Kota</td><td>: $pisah[4]</td></tr>
	<tr><td>&nbsp;<hr></td><td>&nbsp;<hr></td></tr>";
}

echo "</table>";
echo "<a class=btn href=index.html> Isi Buku Tamu </a>";
echo "<a class=btn href=contact.html> Profil </a>";


?>