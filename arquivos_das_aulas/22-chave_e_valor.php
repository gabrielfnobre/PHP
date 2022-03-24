<?php

    //TRABALHANDO COM CHAVE E VALOR NO PHP:

    $paises = ['pais' => ['Brasil', 'Canadá', 'EUA'], 'cidade' => 'São Paulo', 'populacao' => 124.234];
    //Note que usamos o "=>" para criar uma chave, e o elemento que viera após ela será automaticamente o valor da chave...

    echo $paises['pais'][0] . PHP_EOL;
    echo $paises['pais'][1] . PHP_EOL;
    echo $paises['pais'][2] . PHP_EOL;
    echo $paises['cidade'] . PHP_EOL;
    echo $paises['populacao'] . PHP_EOL;

?>