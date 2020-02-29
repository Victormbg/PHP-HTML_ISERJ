<?php
$nomeStr="Bom dia atrasildos#Ruan#20/05/2019";
$pos=strpos($nomeStr,"#");
$fra=substr($nomeStr,0,$pos);
$alunStr=substr($nomeStr,$pos+1);
$pos=strpos($alunStr,"#");
$alun=substr($alunStr,0,$pos);
$pos=strpos($alunStr,"#");
$strData=substr($alunStr,$pos+1);
print"<br>Frase: <font color='red'>".$fra."</font>";
print"<br>Aluno Atrasado: <font color='red'>".$alun."</font>";
print"<br>Data: <font color='red'>".$strData."</font>";

$tamanho=strlen($nomeStr);
print"<br>O tamanho da string e ".$tamanho;

?>