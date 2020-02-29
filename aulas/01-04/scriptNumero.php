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
	/*function parimpar ($nA){
	  if ($nA%2==0){
		print "O número é par.";
	  }else{
		print "O número é ímpar.;"
	  }
	} */ 
	
	function exibe ($nA, $anterior, $posterior, $quadrado, $raiz){
		print ("Número digitado: " . $nA ."<br>");
		print ("Seu anterior:" . $anterior ."<br>");
		print ("Seu posterior: " . $posterior ."<br>");
		print ("Elevado ao quadrado: " . $quadrado ."<br>");
		print ("Raiz quadrada: " . $raiz ."<br>");
		/*print $parimpar;*/
	}

$nA=$_GET["nA"];
$anterior = Anterior ($nA);
$posterior = Posterior($nA);
$quadrado = quadrado ($nA);
$raiz = raiz ($nA);
/*$parimpar = parimpar ($nA);*/

exibe ($nA, $anterior, $posterior, $quadrado, $raiz);













?>