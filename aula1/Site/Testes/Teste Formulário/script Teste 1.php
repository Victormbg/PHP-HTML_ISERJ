<?php
include("Teste 1.html");
//var_dump($_GET);

echo 'Nome: ' . ($_GET['nome'] ?? '') . "<br>"; echo 'E-mail: ' . ($_GET['email'] ?? '') . "<br>";
echo "parabens";
?>