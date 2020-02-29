<?php
include("index.php");

$num1 = $_POST["num1"];

$num2 = $_POST["num2"];

$op = $_POST["op"];

	if ($op == "+"){
        $res =($num1 + $num2);
	echo $res;
    }else if ($op == "-"){
        $res =($num1 - $num2);
	echo $res;
    }else if ($op == "*"){
        $res =($num1 * $num2);
	echo $res;
    }else if ($op == "/"){
        $res =($num1 / $num2);
	echo $res;
    }
?>