<?php
if ($_GET['nA']==""){
	print "Preencha todos os campos, animal.";
    exit;
}	
	function Anterior ($nA) {
	$anterior = $nA-1;
	return $anterior;
    }
    function Posterior($nA){
	$posterior = $nA+1;	
	return $posterior;
	}
	function quadrado ($nA){
    $quadrado = pow($nA, 2);
	return $quadrado;
	}
	function raiz ($nA){
	$raiz = sqrt($nA);
	return $raiz;
	}
	


	function exibe ($nA, $anterior, $posterior, $quadrado, $raiz){
		print ("Número digitado: " . $nA ."<br>");
		print ("Seu anterior: " . $anterior ."<br>");
		print ("Seu posterior: " . $posterior ."<br>");
		print ("Elevado ao quadrado: " . $quadrado ."<br>");
		print ("Raiz quadrada: " . $raiz ."<br>");
		
	}

$nA=$_GET["nA"];
$anterior = Anterior ($nA);
$posterior = Posterior($nA);
$quadrado = quadrado ($nA);
$raiz = raiz ($nA);
     	if ($nA%2==0){
		print "O seu número é par.<br>";
	  }else{
		print "O seu número é ímpar.<br>";
	  }


exibe ($nA, $anterior, $posterior, $quadrado, $raiz);













?>