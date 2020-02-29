<?php
session_start();
$nome=$_POST['tNome'];
$usu=$_POST['tUsu'];
$_SESSION['nome']=$nome;
$_SESSION['usuario']=$usu;
header("location:sessao2.php");




?>