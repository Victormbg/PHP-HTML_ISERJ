<?php

if($_GET['tNome']=="" || $_GET['tPreco']=="" || $_GET['tQuant']=="") {
	print("Preencha todos os valores!");
	exit;
}

function ind($Preco){
	$IMP = ($Preco*35)/100;
	return $IMP;
}

function com($Preco){
	$IMP = ($Preco*20)/100;
	return $IMP;

}

function ser($Preco){
	$IMP = ($Preco*15)/100;
	return $IMP;
}
function exibe($Nome,$Quant,$Preco,$IMP){
	print("<font color='black' size='6'> O produto ".$Nome." possui uma quantidade em estoque de ".$Quant."</font><br>");
	print("<font color='black' size='6'> Possui um preço de R$" .$Preco. " reais</font><br>");
	print("<font color='black' size='6'> Com  o adicional de impostos ao valor do preço de R$ ".$IMP." reais.</font>");
}

$Nome = $_GET['tNome'];
$Preco = $_GET['tPreco'];
$Quant = $_GET['tQuant'];
$op = $_GET['rd1'];

if ($op=="Industrial"){
	$IMP = ind($Preco);
	exibe($Nome,$Quant,$Preco,$IMP);	
}
else if($op=="Comercial"){
	$IMP = com($Preco);
	exibe($Nome,$Quant,$Preco,$IMP);
}

else{
	$IMP = ser($Preco);
	exibe($Nome,$Quant,$Preco,$IMP);		
}
?>