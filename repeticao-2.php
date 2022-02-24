<?php

for ( $contador = 1; $contador <= 15; $contador++) {
    if ($contador != 13){ //o exclamação quer dizer "não é igual"
        echo "#$contador" . PHP_EOL;
    } 
}

//com "continue" podemos pular a interação (pularia o 13) e com o "break" para a interação (pararia no 12)

/*
Vamos utilizar o while quando não sabemos 
quando o loop se encerrará. 
Quando é uma decisão um pouco mais complexa. 
Já o for é utilizado quando sabemos o momento 
de saída do loop. Normalmente, quando temos um caso de uso de variável contadora.

a mesma forma de escrever abaixo

$contador = $contador + 1;
$contador += 1;
$contador++;

*/ 