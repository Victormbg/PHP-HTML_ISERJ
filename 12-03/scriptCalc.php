<?php
$num1=$_GET["op1"];
$num2=$_GET["op2"];
$submit=$_GET["btn1"];
if ($_GET['op2']=="" || $_GET['op1']==""){
	print "Um ou mais campos estão vazios!";
}

function calcsoma ($num1,$num2) {
	$result=$num1+$num2;
	return $result;
}
function calcsub ($num1,$num2) {
	$result=$num1-$num2;
	return $result;
}
function calcmult ($num1,$num2) {
	$result=$num1*$num2;
	return $result;
}
function calcdiv ($num1,$num2) {
	$result=$num1/$num2;
	return $result;
}
function calcquadrada ($num1,$num2) {
	$result=$num1*$num1;
	return $result;
}
function calcraiz ($num1,$num2) {
	$result=sqrt ($num1);
	return $result;
}
function exibe ($result){
    print"	<br> <font color='black'> Resultado: </fonte>".$result;
}
	if ($submit=="+"){
$result=calcsoma ($num1,$num2);
 exibe($result);	
}else { 
if ($submit=="-"){
	$result=calcsub ($num1,$num2);
	exibe($result);
}else { 
if ($submit=="x"){
	$result=calcmult ($num1,$num2);
	exibe($result);
}else { 
if ($submit=="/"){
	$result=calcdiv($num1,$num2);
	exibe($result);
}else { 
if ($submit=="²"){
	$result=calcquadrada ($num1,$num2);
	exibe($result);
}else { 
$result=calcraiz($num1,$num2);
	exibe($result);
}}}}}




?>