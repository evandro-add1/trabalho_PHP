<?php

if (empty ($_POST[nota] || $_POST[nota2] || $_POST[nota])){
    echo "Digite um numero para calcular a média.";
    echo "<br> <a href=\"index.php\">Novo caculo média.</a>";
};

$nota = (int) $_POST["nota"];
$nota2 = (int) $_POST["nota2"];
$nota3 = (int) $_POST["nota3"];

$media = ($nota + $nota2 + $nota3)/ 3;


if ($media > 7){
    echo "Parabéns, não fez mais que sua obrigação.";
    echo "Notas: ". $nota. ",". $nota2 .",". $nota3."\nMedia das suas notas: ". $media;
} else {
    echo "Reprovado!.";
    echo "Notas: ". $nota. ",". $nota2 .",". $nota3."\nMedia das suas notas: ". $media;
}


?>
<br>
<a href="index.php"></a>