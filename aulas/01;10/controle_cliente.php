<?php
$nome=$_POST['nome'];
$email=$_POST['email'];
$login=$_POST['login'];
$sen=$_POST['senha'];

include("Cliente.php");
include("DaoCliente.php");
$objCli = new Cliente();
$objCli->setNome($nome);
$objCli->setEmail($email);
$objCli->setlogin($login);
$objCli->setSenha($sen);

$daoCli = new DaoCliente();
$daoCli->incluir($objCli);	
?>