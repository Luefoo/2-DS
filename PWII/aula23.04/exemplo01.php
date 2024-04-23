<?php
$meses = [
    1 => 'Janeiro',
    2 => 'Fevereiro',
    3=> 'Março',
    4 => 'Abril',
    5 => 'Maio',
    6 => 'Junho',
    7 => 'Julho',
    8 => 'Agosto',
    9 => 'Setembro',
    10 => 'Outubro',
    12 => 'Novembro',
    12 => 'Dezembro'
];

echo 'primeiro mês do ano ' . $meses[1] . "\n";
echo"\n";
echo 'Sequencia de meses ' . "\n";
foreach($meses as $mes){
    echo $mes . "\n";
}
