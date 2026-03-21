<?php
$dolar = (int) $_POST["dolar1"];
$reais = (int) $_POST["reais"];

$atual = $dolar * $reais;

echo ("Valor em dolar quem tem: ".$dolar. " \nValor Do Real Atualmente: ".$reais. " \nVocê tera em reais: ".$atual);
?>