<?php
include "funcao.php";
$temperatura = (int) $_POST["celsius"];

$resultado = fahrenheit($temperatura);
echo "Sua temperatura em Fahrenheit: ".$resultado;
?>