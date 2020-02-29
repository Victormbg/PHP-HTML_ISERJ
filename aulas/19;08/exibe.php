<!DOCTYPE html>
<html>
<head>
	<title>SESSAO</title>
</head>
<body>
<h1>Sumario de Vendas</h1>
<?php session_start(); print"<br>Produto". $_SESSION['nome'];?>
<?php print "<br>Preco ". $_SESSION['preco'];?>
<?php print "<br>Imposto ". $_SESSION['imp'];?>
<?php print "<br>Valor Final ". $_SESSION['valorF'];?>
</body>
</html>