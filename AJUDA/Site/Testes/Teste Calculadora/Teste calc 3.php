<?php 
// Numero que será calculado o fatorial
$num = 5;
 
// Caso seja fatorial de 0
if ($num == 0) {
$num = 1;
}
 
//Calculando o fatorial
for($i = $num; $i --> 1; $i--) {
$num = $num * ($i - 1);
}
 
// Exibindo Resultado
echo "Fatorial é : ";
echo $num;
echo"<br><br>";
echo"<hr>";

//////////////////////////////////////////////////////////////////////////////////////////////////////////////

$num = 2;
$inicial = $num;
 
// Recebe o expoente
$exp = 3;
 
// Caso o valor da exponenciação seja diferente de 0
if ($exp != 0) {
// Calculando o valor
for ($i = 1; $i < $exp; $i++) {
$num = $inicial * $num;
// Caso o valor da exponenciação seje igual a 0
}
} else {
$num = "1";
}
 
// Exibindo o resultado
echo "Expoente é: $num";
echo"<br><br>";
echo "<hr>";


/////////////////////////////////////////////////////////////////////////////////////////////


$a = 5;
$b = -12;
$c = 4;


 
// Descobrindo Delta
echo "Equação de segundo grau<br>";

$delta = ($b * $b) - ((4 * $a) * $c);
 
// Calculando os valores de X
$x1 = (-$b + sqrt($delta)) / (2 * $a);
$x2 = (-$b - sqrt($delta)) / (2 * $a);
 
// Se delta não for negativo, exibe os valores
if ($x1 != "NAN" and $x2 != "NAN") {
// Exibindo os valores
echo "x1 = " . $x1 . "<br>";
echo "x2 = " . $x2;
// Caso delta seja negativo
} else {
echo "Impossivel calcular o valor,
delta negativo (".$delta.")";
}
echo"<br>O Delta é:  $delta";
?>
