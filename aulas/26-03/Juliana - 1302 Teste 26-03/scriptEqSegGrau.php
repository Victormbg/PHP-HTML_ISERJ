<?php
/* Calcular as raizes da equação do 2º grau.
Delta=raiz(b*b-4*A*C)
x1=(-B+raiz(delta))/2*A
x2=(-B-raiz(delta))/2*A
Utilizar funçoes para calculo de delta, x1 , x2 e para exibir os resultados.
Lembrar que delta negativo não gera raizes reais.
*/

if ($_GET['nA']=="" || $_GET['nB']=="" || $_GET['nC']==""){
	print "Preencha todos os campos.";
    exit;
}	
	function calcDelta ($nA, $nB, $nC) {
	$delta = ($nB*$nB - 4*$nA*$nC);
	return $delta;
    }
    function calcx1($nA, $nB, $delta){
	$x1 = ((-$nB + sqrt ($delta))/2*$nA);	
	return $x1;
	}
	function calcx2 ($nA, $nB, $delta){
    $x2 = ((-$nB - sqrt ($delta))/2*$nA);
	return $x2;
	}
	
	function exibe ($x1, $x2){
		print ("x1 = " . $x1 ."<br>");
		print ("x2 = " . $x2 ."<br>");
	}

$nA=$_GET["nA"];
$nB=$_GET["nB"];
$nC=$_GET["nC"];

$delta = calcDelta ($nA, $nB, $nC);
$x1 = calcx1 ($nA, $nB, $delta);
$x2 = calcx2 ($nA, $nB, $delta);

if ($delta<0){
	print "Delta negativo não gera raizes reais!";
}else{
    exibe ($x1, $x2);
}

	
?>	

