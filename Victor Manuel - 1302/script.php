<?php
if($_GET['tA']=="" || $_GET['tB']=="" || $_GET['tC']==""){
	print("Preencha todos os valores!");
	exit;
}

function delta($A,$B,$C){
	$delta = pow($B,2)-4*$A*$C;
	return $delta;
}

$A = (float)$_GET['tA'];
$B = (float)$_GET['tB'];
$C = (float)$_GET['tC'];
$del = delta($A,$B,$C);

$x1 = (-$B+sqrt($del))/2*$A;
$x2 = (-$B-sqrt($del))/2*$A;
$x1 = number_format($x1, 2, ',','.');
$x2 = number_format($x2, 2, ',','.');

if ($x1 <= 0 and $x2 <= 0) {
	print "A resposta da função de 2º: <br>";
	print("<br>Para valores inseridos para A: ".$A." para B: ".$B." para C: ".$C."<br>");
	print("<br>O delta dando valor de: ".$del."<br>");
	print "<br>O valor de x1 = " . $x1."<br>";
	print "<br>O valor de x2 = " . $x2;
}else{
	print "Impossivel calcular o valor,delta negativo, delta: (".$del.")";
	exit;
}
?>