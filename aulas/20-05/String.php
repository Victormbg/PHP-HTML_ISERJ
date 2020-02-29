<?php
$texto="PHP é uma linguagem fácil e linda!!";
$pos = strpos($texto , "fácil");
print "posição da String e " . $pos; 
$tamanho = strlen($texto);
print "<br>tamanho da string é " . $tamanho;

//substr ($string, $start, $lenght)
$texto2 = substr($texto, $pos);
print "<br>Valor da string texto2 e " . $texto;

$nomeStr="Octa#Prof#177221";
//Meu intuito é separar o nome da pessoa do profissão e so sal
$pos=strpos($nomeStr,"#");
$nome=substr($nomeStr,0,$pos);
$profStr=substr($nomeStr, $pos+1);
$pos=strpos($profStr,"#");
$prof=substr($profStr,0,$pos);
$pos=strpos($profStr,"#");
$strRenda=substr($profStr,$pos+1);
print "<br>Nome: <font color='red'> ". $nome. "</font>";
print "<br>Professor:  <font color='red'>" . $prof."</font>";
print "<br>Renda: <font color='red'>" . $strRenda."</font>";

//outro nome
$nomeStr="Xuxa das Luzes#Auxiliadora#665577";
$pos=strpos($nomeStr,"#");
$nome=substr($nomeStr,0,$pos);
$profStr=substr($nomeStr, $pos+1);
$pos=strpos($profStr,"#");
$prof=substr($profStr,0,$pos);
$pos=strpos($profStr,"#");
$strRenda=substr($profStr,$pos+1);
print "<br>Nome: <font color='red'> ". $nome. "</font>";
print "<br>Professor:  <font color='red'>" . $prof."</font>";
print "<br>Renda: <font color='red'>" . $strRenda. "</font>";

?>