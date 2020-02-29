<?php
if($_POST['tSalario']=="" || $_POST['tNome']==""){
	print "Preencha os dados!";
	exit;
}

$Nome=$_POST['tNome'];
$Salario=$_POST['tSalario'];

if($Salario <=2000 ) {
	
	$Aumento = $Salario*1.20;
    print $Nome. " tem um salario". $Salario. " que sofreu um reajuste de 20% ". $Aumento;
}else{
	
	$Aumento = $Salario*1.25;
	  print $Nome. " tem um salario". $Salario. " que sofreu um reajuste de 25% ". $Aumento;
}
?>