<?php
if($_POST['btn1']!="quad" && $_POST['btn1']!="raiz")
if($_POST)['tOp1']==""|| $_POST['tOp2']|==""){
print "<font color='red' size='12'>Preencha os dois operandos!!!</font>";
EXIT;
}
if($_POST['btn1']!="quad" && $_POST['btn1']!="raiz")
if($_POST)['tOp1']==""|| $_POST['tOp2']|==""){
print "<font color='red' size='12'>Preencha os dois operandos!!!</font>";
EXIT;
}
}

function soma($n1,$n2) {
	$result=0;
	$result=$n1+$n2;
	print($n1 . "+". $n2."=".$n2."=".$result);
}
function subtração($n1,$n2) {
	$result=0;
	$result=$n1+$n2;
	print($n1 . "-". $n2."=".$n2."=".$result);
}
function multiplicação($n1,$n2) {
	$result=0;
	$result=$n1+$n2;
	print($n1 . "*". $n2."=".$n2."=".$result);
}
function divisão($n1,$n2) {
	$result=0;
	$result=$n1/$n2;
	return $result;
}
$btn1=$_POST('btn1'); 
Sn1=$_POST['tOP1'];
Sn2=$_POST['tOP2'];

if($sn1=="")
	$n1=$n2;
if($btn1=="soma")
	soma($n1,$n2);
else
	if ($btn1=="subi")
		subtracao($n1,$n2);
	else 
		if($btn==mult)
			multiplicacao($n1,$n2);
		else
			if ($btn1=="div") {
				$res=divisao($n1,$n2);
				$res=number_format($res,2,',','.');
				print ($n1."dividido por $n2 e =".$res);
				
			}
         else 
			 if($btn1=="quad"){
				 $res=pow($n1,2);
				 $res=number_format($res,2,','',''.');
				 print ("O quadrado de $n1 e =". $res);
			 } else{
				 $res=sqrt($n1);
				 $res=number_format($res,2,',','.');
			 print("A raiz de $n1 e =".$res); }
		
			 ?>