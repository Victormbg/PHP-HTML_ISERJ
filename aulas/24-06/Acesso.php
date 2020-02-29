<?php
include("PessoaFisica.php"); //criando um vinculo físico com o arquivo que contém a classe 

$PF = new PessoaFisica();//instancio a classe
$PF->setNome("Tyrone");
$PF->setEndereco("Rua ABC, n°18");
$PF->setRenda(221447);

print "Meu nome é " .$PF->getNome()."<br>";
print "Meu endereço é ".$PF->getEndereco()."<br>";
print "Minha renda é de  R$".$PF->getRenda();

?>