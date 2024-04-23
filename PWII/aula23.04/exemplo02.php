<?php
$dicionario = [
    "Blue" => "Azul",
    "Yellow" => "Amarelo",
    "Green" => "Verde",
    "White" => "Branco"
];

//mostra apenas valor
foreach ($dicionario as $palavra)
{
    echo $palavra."\n";
}
echo "\n";
//mostra valor e chave
foreach ($dicionario as $key => $value) {
    echo "A palavra $key em português é: $value \n";
}