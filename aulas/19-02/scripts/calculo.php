<?php
if($_POST["tNome"]=="" || $_POST["tSal"]=="") {
	print "Preencha os dados!";
	exit;
}
$Nome= $_POST["tNome"];
$Sal= $_POST["tSal"];
$SalNovo=0;
if($Sal <=2000) 
	$SalNovo=$Sal*1.20;
else
	$SalNovo=$Sal+($Sal*25)/100;

print "<front size='99'>";
print "SR(A) </font><font color='Red' size='99'>";
print "$Nome </font><font color='Black'>";
print "Seu novo salario é </font>";
print "<font color='Red' size='99'> $SalNovo</font>";
?>