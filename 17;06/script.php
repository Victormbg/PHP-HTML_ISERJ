<?php
include("PF.php");
$umPf = new PF();
$umPf -> setNome("Zico");
$umPf -> setEndereco("Rua sobe e desce no 7");
$umPf -> setSal("221447");

print "Meu nome é ".$umPf -> getNome();
print "Meu endereco é ".$umPf -> getEndereco();
print "Meu honoários é ".$umPf -> getRenda();
