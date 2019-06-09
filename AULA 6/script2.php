<?php
include("index2.php");
	$num1 = $_POST["num1"];
	$num2 = $_POST["num2"];
	$btn = $_POST["btn"];
    $res = 0;

	
if($num1=="")
	$num1=$num2;
if($btn1=="soma")
	soma($num1,$num2);
else
	if ($btn=="subi")
		subtracao($num1,$num2);
	else 
		if($btn==mult)
			multiplicacao($num1,$num2);
		else
			if ($btn=="div") {
				$res=divisao($num1,$num2);
				$res=number_format($res,2,',','.');
				print ($num1."dividido por $n2 e =".$res);
				
			}
         else 
			 if($btn=="quad"){
				 $res=pow($num1,2);
				 $res=number_format($res,2,','',''.');
				 print ("O quadrado de $n1 e =". $res);
			 } else{
				 $res=sqrt($num1);
				 $res=number_format($res,2,',','.');
			 print("A raiz de $n1 e =".$res); }

function soma($num1,$num2){
	$res = num1+num2;
	print($num1." + ".$num2." = ".$res);
}

function subtração($num1,$num2) {
	$res=0;
	$res=$num1+$num2;
	print($n1 . "-". $num2."=".$num2."=".$result);
}
function multiplicação($n1,$n2) {
	$res=0;
	$res=$num1+$num2;
	print($num1 . "*". $num2."=".$num2."=".$result);
}
function divisão($num1,$num2) {
	$res=0;
	$res=$num1/$num2;
	return $res;
}
	
	
?>