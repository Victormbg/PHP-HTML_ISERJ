<?php

if($_GET['RS']=="" || $_GET['tCNPJ']=="" || $_GET['tFAT']==""){
	print("Preencha todos os valores!");
	exit;
}

function calc25($FAT){
	$IMP = $FAT*0.25;
	return $IMP;
}

function calc35($FAT){
	$IMP = ($FAT*35)/100;
	return $IMP;
}

function exibe($RS,$ALI,$IMP){
	print("A empresa de Razão Social ".$RS." aliquitou um valor de ".$ALI."% recolhera de impostos ".$IMP);
}

$RS = $_GET['RS'];
$CNPJ = $_GET['tCNPJ'];
$FAT = $_GET['tFAT'];

if($FAT<=250000){
	$IMP=calc25($FAT);
	$ALI = "25";
}else{
	$IMP = calc35($FAT);
	$ALI = "35";
}
print exibe($RS,$ALI,$IMP);
?>



$x1 = (-$B + sqrt($delta))/2 * $A;
$x2 = (-$B - sqrt($delta))/2 * $A;
