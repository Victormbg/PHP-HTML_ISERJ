<?php
$clube[0]= "Vasquinho <br>";
$clube[1]= "Olaria <br>";
$clube[2]= "Portuguesa <br>";
$clube[3]= "Flamerda <br>";
$clube[4]= "America <br>";

for($i=0;$i<4;$i++){
 for($j=$i+1;$j<4;$j++){
  if ($clube [$j]>$clube[$j]){
  $aux = $clube [$i];
  $clube [$i] = $clube[$j];
  $clube[$j] = $aux;
  }
 }
}
/*Exibição:*/

   for($i=0;$i<5;$i++){
   print "Posição $i do vetor";
   print " é o $clube[$i]";
   }
   
?>   