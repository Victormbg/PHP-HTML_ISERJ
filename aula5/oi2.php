<?php
if ($_POST && $_POST["oculto"] == "efetuar"){
   $a     = $_POST["a"];
   $b     = $_POST["b"];
   $sinal = $_POST["operacao"];
   switch ($sinal){
      case $sinal == "Soma":
	$total = $a + $b;
	break;
      case $sinal == "Subtração":
	$total = $a - $b;
	break;
      case $sinal == "Multiplicação":
	$total = $a * $b;
	break;
      case $sinal == "Divisão":
	$total = $a / $b;
	break;
   }
   echo "Valor Total da operação: ".$total;
   
}
?>