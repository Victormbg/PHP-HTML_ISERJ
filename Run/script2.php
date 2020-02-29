<?php
include("index.php");
if($_POST['v1']=="" || $_POST['v2']==""){
	echo "Está faltando coisa, meu parceiro!";
	exit;
}
$v1=$_POST['v1'];
$v2=$_POST['v2'];
$opcao=$_POST['opcao'];
$res=0;
if($_POST['opcao'] == "soma"){
function soma($v1,$v2){
	$res= 'v1' + 'v2';
	echo $res;
}}
?>