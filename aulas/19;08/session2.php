<!DOCTYPE html>
<html>
<head>
	<title>Sessao</title>
</head>
<body>
<font color="red">	
<h1>Bem vindo</h1>
<?php session_start(); print $_SESSION['nome']; ?>
</font>
</body>
</html>