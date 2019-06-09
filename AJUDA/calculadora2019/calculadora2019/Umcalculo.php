<?php
if($_POST['btn1']!="quad" && $_POST['btn1']!="raiz")
  if($_POST['tOp1']=="" || $_POST['tOp2']==""){
	 print "<font color='red' size='12'>Prencha os dois operandos!!!</FONT>";
     EXIT;
}	

if($_POST['btn1']=="quad" || $_POST['btn1']=="raiz"){
	
   if($_POST['tOp1']=="" && $_POST['tOp2']==""){
	 print "<font color='red' size='12'>Prencha um dos operandos!!!</FONT>";
     EXIT;
}
}
function soma($n1,$n2) {
	$result=0;
	$result= $n1 + $n2;
	print($n1 . " + ". $n2 . " = " . $result);
}
function subtracao($n1,$n2) {
  $result=0;   
   $result= $n1 - $n2;
	print($n1 ." - " .$n2 . " = " . $result);
}
function multiplicacao($n1,$n2) {
     $result= $n1 * $n2;
	 print($n1. " * ". $n2 . " = " . $result);
}
function divisao($n1,$n2) {	
    $result=0; 
	$result=$n1/$n2;
	return $result;
}	
$btn1=$_POST['btn1'];	
$n1=$_POST['tOp1'];
$n2=$_POST['tOp2'];
if ($n1=="")
	$n1=$n2;
if ($btn1=="soma")
   soma($n1,$n2);
else
   if ($btn1=="subi")
	   subtracao($n1,$n2);
   else
	   if ($btn1=="mult")
		   multiplicacao($n1,$n2);
	   else
		   if ($btn1=="divi"){
			   $res=divisao($n1,$n2);
               $res = number_format($res, 2, ',','.');		  
               print($n1 ." dividido por $n2 e   = " . $res); 	
	  
	      }	
          else		 
             if ($btn1=="quad"){
			   $res=pow($n1,2);
               $res = number_format($res, 2, ',','.');		  
               print("O quadrado de $n1  e = " . $res);			  
			 } else{
			 $res=sqrt($n1);
               $res = number_format($res, 2, ',','.');		  
			 print(" A raiz de $n1  e  = " . $res);	}
?>			   