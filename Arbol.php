<?php

$numMax = readline("Digite el numero maximo de *: ");

function imprime_medio_pino (int $altura) {
    $char = '';
    for ($i = 0; $i <= $altura; $i++) {
        $char .= '*';
        echo $char."\n";
    }
}

imprime_medio_pino ($numMax);
?>