<?php
if($_GET['tNum']=="" ){
	print("Erro na entrada de dados !");
	exit;
}

$num=$_GET['tNum'];

if($num%2==0){
	print $num . " e par";
}else{
	print $num . " e impar";
}
?>