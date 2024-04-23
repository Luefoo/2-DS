<?php
$quartas = [
    [
        "jogo" => "Dortmund x Atlético Madrid",
        "placar" => "(5 - 4)",
        "classificados" => "Dortmund"

    ],

    [
        "jogo" => "Barcelona x PSG",
        "placar" => "(4 - 6)",
        "classificados" => "PSG "
    ],

    [
        "jogo" => "Bayern x Arsenal",
        "placar" => "(3 - 2)",
        "classificados" => "Bayern "
    ],

    [
        "jogo" => "Man City x Real Madrid",
        "placar" => "(4 - 4), Penalti (3 - 4)",
        "classificados" => "Real Madrid"
    ]

    ];

    foreach($quartas as $champ){
        echo "\n";
        echo "No jogo " . $champ["jogo"] .  "\n";
        echo "O placar foi " . $champ["placar"] . "\n";
        echo "Classificado foi " . $champ["classificados"] . "\n";
        echo "\n";
    }