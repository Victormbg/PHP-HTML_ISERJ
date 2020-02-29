<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Calculadora</title>
</head>
 
<body>
<?
   $a = isset($_POST["a"]) ? $_POST["a"] : '';
   $b = isset($_POST["b"]) ? $_POST["b"] : '';
?>
<form title="Formulário Teste" id="formteste" name="formteste" action="oi2.php" method="post">
   Valor 1: <input name="a" type="number" value="<? echo $a ?>"/><br />
   Valor 2: <input name="b" type="number" value="<? echo $b ?>"/>
   <br /><br />
   Selecione uma operação:<br />
   <input name="operacao" type="radio" value="Soma" />Soma<br />
   <input name="operacao" type="radio" value="Subtração" />Subtração<br />
   <input name="operacao" type="radio" value="Multiplicação" />Multiplicação<br />
   <input name="operacao" type="radio" value="Divisão" />Divisão
   <input type="hidden" name="oculto" value="efetuar"/>
   <br /><br/>
   <input name="calcular" type="submit" value="Calcular"/>
   <input name="limpar" type="reset" value="Limpar"  onclick="javascript:window.location.reload();"/>
   <br /><br />
   
<?php
	
   echo "Valor Total da operação: ".$total;

?>
</form>
</body>
</html>