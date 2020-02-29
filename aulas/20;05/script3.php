<?php
$texto="PHP e uma linguagem fácil e Linda!!";
$pos = strpos($texto,"fácil");
print "A posição da String é ".$pos;

$tamanho=strlen($texto);
print"<br>tamanho da string e ".$tamanho;

//substr($string,$start,$lenght)

$texto2=substr($texto,$pos);
print"<br>Valor da string texto2 e ".$texto2;
$nomeStr="Victor#Aluno#180";
$pos=strpos($nomeStr,"#");
$nome=substr($nomeStr,0,$pos);
$alunStr=substr($nomeStr,$pos+1);
$pos=strpos($alunStr,"#");
$alun=substr($alunStr,0,$pos);
$pos=strpos($alunStr,"#");
$strRenda=substr($alunStr,$pos+1);
print"<br>Nome: <font color='red'>".$nome."</font>";
print"<br>Cargo: <font color='red'>".$alun."</font>";
print"<br>Renda: <font color='red'>".$strRenda."</font>";

?>