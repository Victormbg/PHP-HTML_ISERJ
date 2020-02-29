<?php
/*
Exercicio:
Dado o Texto "Bom dia Atrasildos#Luan#20/05/2019"
Pede-se:
1)Exibir a quantida de caracteres da string;
2)Exibir em variaveis separado, conteúdo anterior aos caracteres jogo da velha(#);
*/

$texto="Bom dia atrasildos!#Luan#20/05/2019";
$quant = strlen($texto);
print "<br>Quantidade de caracters: " . $quant;


$pos=strpos($texto,"#");
$frase=substr($texto,0,$pos);
$nome=substr($texto,20, $pos+1);
$data=substr($texto,25, $pos+1);

print "<br>" .$frase;
print "<br>Nome: " .$nome;
print "<br>Data:" . $data;













?>