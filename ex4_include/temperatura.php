<?php
include "funcao.php";
$temperatura = (int) $_POST["celsius"];

$resultado = temperatura($temperatura);
echo "Sua temperatura em Fahrenheit: ".$resultado;
?>