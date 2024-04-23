<?php
$quantidade = 10;
$salaraio = 5000;

function calcularSalario()
{
    global $quantidade;
    global $salaraio;

    $total = $quantidade * $salaraio;

    return $total;
}

$response = calcularSalario();

echo $response;
