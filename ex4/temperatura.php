<?php
$temperatura = (int) $_POST["celsius"];

$fahrenheit = $temperatura * 9/5 + 32;
echo ("Sua temperatura em Fahrenheit: ".$fahrenheit);
?>