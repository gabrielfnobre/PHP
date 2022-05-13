<?php

    //ARRAYS:

    //Podemos usar arrays no PHP de 2 formas...

    //MENOS CONVENCIONAL...
    $menos_convencional = array(1, 2, 3, 4);

    for ($i = 0; $i < count($menos_convencional); $i++){
        echo "$menos_convencional[$i]" . PHP_EOL;
    }
    
    //CONVENCIONAL...
    $convencional = array(5, 6, 7, 8);

    for ($i = 0; $i < count($convencional); $i++){
        echo "$convencional[$i]" . PHP_EOL;
    }

?>