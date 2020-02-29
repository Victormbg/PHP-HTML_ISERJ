<?php
$texto="PHP e uma linguagem fácil e Linda!!";
$pos = strpos($texto,"fácil");
print "posição da String é ".$pos;

$tamanho=strlen($texto);
print "<br>tamanho da string e ".$tamanho;

$texto2 = substr($texto, $pos);
print "<br> Valor da string texto2 e ".$texto2;

$nomeStr = "Matheus#Aluno#177221";
$pos = strpos($nomeStr, "||");
$nome = substr($nomeStr, 0, $pos);
$profStr = substr($nomeStr, $pos+1);
$pos = strpos($profStr, "||");
$prof = substr($profStr,0,$pos);
$pos = strpos($profStr, "||");
$strRenda = substr($profStr, $pos+1);
print "<br>Nome:<font color='red'> ".$nome."</font>";
print "<br>Professor:<font color='red'> ".$prof."</font>";
print "<br>Renda:<font color='red'> ".$strRenda."</font>";

$nomeStr="Xuxa#Auxiliadora#665577";
$pos = strpos($nomeStr, "||");
$nome = substr($nomeStr, 0, $pos);
$profStr = substr($nomeStr, $pos+1);
$pos = strpos($profStr,"||");
$prof = substr($profStr, 0, $pos);
$pos = strpos($profStr, "||");
$strRenda = substr($profStr, $pos+1);
print "<br>Nome:<font color='red'> ".$nome."</font>";
print "<br>Professor:<font color='red'> ".$prof."</font>";
print "<br>Renda:<font color='red'> ".$strRenda."</font>";
?>