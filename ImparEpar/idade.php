<?php
if($_GET['tNome']=="" || $_GET['tIdade']==""){
	print("Erro na entrada de dados !");
	exit;
}

$nome=$_GET['tNome'];
$idade=$_GET['tIdade'];

if($idade > 18){
	print $nome . " e maior de idade !";
}else{
	print $nome . " e menor de idade !";
}
?>