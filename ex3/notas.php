<?php
$nota = (int) $_POST["nota"];
$nota2 = (int) $_POST["nota2"];
$nota3 = (int) $_POST["nota3"];

$total = $nota + $nota2 + $nota3;

$media = $total / 3;

echo "Notas: ". $nota. ",". $nota2 .",". $nota3."\nMedia das suas notas: ". $media;

?>