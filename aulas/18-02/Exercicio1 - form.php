<?php
/*1)Criar um formulário com a estrada para um número inteiro. Chamar ouyto script para dizer se o número lido é par ou ímpar. */
if ($_POST['numero1']=="") {
	print ("O número não pode estar em branco !");
    exit;
}
$numero1 = $_POST['numero1'];
if ($numero1 %2==0) {
	print " O número " .  $numero1  . " é par !";
else 
	print "O número " .  $numero1  . " é ímpar !";
}
?>