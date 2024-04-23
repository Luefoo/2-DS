<?php

$times = [
    "Dortmund x Atlético Madrid" => " O placar foi (5 - 4) Dortmund passou! \n",
    "Barcelona x PSG" => "O placar foi (4 - 6) PSG passou! \n",
    "Bayern x Arsenal" => "O placar foi (3 - 2) Bayern passou! \n",
    "Man City x Real Madrid" => "O placar foi (4 - 4), na hora dos penaltis o placar foi (3 - 4) Real Madrid passou! \n"
];

foreach ($times as $key => $value) {
echo "No jogo $key, $value";
}