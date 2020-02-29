<title>RESULTADO</title>
<?php
if($_GET['num']==""){
	print "Preencha o campo!!!";
	exit;
}

function anterior($num){
	$anterior=$num-1;
	return $anterior;
}

function posterior($num){
	$posterior=$num+1;
	return $posterior;
}

function quadrado($num){
	$quadrado=pow($num,2);
	return $quadrado;
}

function raiz($num){
	$raiz=sqrt($num);
	return $raiz;
}

function exibir($posterior,$anterior,$quadrado,$num,$raiz){
	echo "<font color='green' size='6'> O quadrado do número ".$num." é ".$quadrado."<br>";
	echo "<font color='green' size='6'> O posterior do número ".$num." é ".$posterior."<br>";
	echo "<font color='green' size='6'> O anterior do número ".$num." é ".$anterior."<br>";
	echo "<font color='green' size='6'> A raiz quadrada do número ".$num." é ".$raiz."<br>";
}

$num=(float)$_GET["num"];
$anterior=anterior($num);
$posterior=posterior($num);
$quadrado=quadrado($num);
$raiz=raiz($num);
exibir($posterior,$anterior,$quadrado,$num,$raiz);

if($num%2==0){
	echo "<font color='green' size='6'> O número ".$num." é par";
}else{
	echo "<font color='green' size='6'> O número ".$num." é ímpar";
}
?>