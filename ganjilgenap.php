<?php
$genap  = "";
$ganjil = "";
$i=1;
while($i<=100){
  $i%2==0 ? 
      $genap .= $i." "
  : 
      $ganjil .= $i." ";
  $i++;
}
 
 
echo "Bilangan Genap adalah $genap<br/>";
echo "Bilangan Ganjil adalah $ganjil<br/>";

?>