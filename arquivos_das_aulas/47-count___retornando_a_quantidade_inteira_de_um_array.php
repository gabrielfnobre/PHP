<?php

    //COUNT:

    //O "count" é uma função do array que é usada para retornar a quantidade inteira dos valores de um array...

    //RETORNANDO A QUANTIDADE DE ÍNDICES DE UM ARRAY...
    $menos_convencional = array(1, 2, 3, 4);

    echo "Esse array têm " . count($menos_convencional) . " valores" . PHP_EOL . PHP_EOL;
    


    //O COUNT É MUITO ÚTIL PARA USAR EM LOOPINGS...
    $convencional = array(5, 6, 7, 8);

    for ($i = 0; $i < count($convencional); $i++){
        echo "$convencional[$i]" . PHP_EOL;
    }

?>