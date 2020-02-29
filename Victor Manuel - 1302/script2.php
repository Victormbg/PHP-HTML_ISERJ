<?php
if($_GET['tA']=="" || $_GET['tB']=="" || $_GET['tC']==""){
	print("Preencha todos os valores!");
	exit;
}
function delta($A,$B,$C){
	$delta = pow($B,2)-4*$A*$C;
	return $delta;
}
function calc_x1($delta,$A,$B){
	$x1=(-$B+sqrt($delta))/2*$A;
	return $x1;
}
function calc_x2($delta,$A,$B){
	$x2=(-$B-sqrt($delta))/2*$A;
	return $x2;
}
function exibe($x1,$x2){
	$x1 = number_format($x1,2, ',','.');
	$x2 = number_format($x2,3, ',','.');
	print"<font color='green' size='6'> A resposta de X1: ".$x1."<br>";
	print"<font color='blue' size='6'> A resposta de X2: ".$x2;
}

$A = (float)$_GET['tA'];
$B = (float)$_GET['tB'];
$C = (float)$_GET['tC'];
$delta = delta($A,$B,$C);

if($delta<0){
		print"<font color='green' size='6'>Não existe raízes reais.";
		exit;
}else{
	$x1=calc_x1($delta,$A,$B);
	$x2=calc_x2($delta,$A,$B);
}

exibe($x1,$x2);
?>