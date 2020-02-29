<?php
if($_GET['tNumero']==""){
	print("Erro na entrada de dados !");
	exit;
}


$tNumero=$_GET['tNumero'];

if($tNumero%2==0 ){
	print $tNumero . " É par !";
}else{
	print $tNumero . " É Impar !";
}
?>

