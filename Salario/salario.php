<?php
if($_POST["tNome"]=="" || $_POST["tSalario"]==""){
	print ("Erro na entrada de dados !");
	exit;
}

$nome=$_POST['tNome'];
$salario=$_POST['tSalario'];

if($salario <= 2000 ){
	$aumento = $salario*1.20;
	print $nome." tem um salario de ".$salario." que sofre um reajuste com aumento de 20% passando a ser ".$aumento;
}else{
	$aumento = $salario*1.25; 
	print $nome." tem um salario de ".$salario." que sofre um reajuste com aumento de 25% passando a ser ".$aumento;
}
?>