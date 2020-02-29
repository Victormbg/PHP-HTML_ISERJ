<?php
session_start();
$_SESSION['nome']=$_POST['tProd'];
$_SESSION['preco']=$_POST['tPreco'];
$_SESSION['quant']=$_POST['tQuant'];
$_SESSION['origem']=$_POST['origem'];
if($_SESSION['origem']=="Sul"){
$_SESSION['imp']=[$_SESSION['preco']*$_SESSION['quant'])*0.15;
$_SESSION['imp']=[$_SESSION['preco']*$_SESSION['quant'])+$_SESSION['imp'];


}
?>