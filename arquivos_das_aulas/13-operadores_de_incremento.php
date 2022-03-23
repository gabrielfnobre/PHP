<?php

    //OPERADORES DE INCREMENTO E DECREMENTO:

    //Incremento e Decremento pós-fixado:
    $numA = 5;
    $numB = 5;

    echo $numA--;echo PHP_EOL; //Veja que o 5 ainda é 5, só vai diminuir na próxima operação
    echo $numA++;echo PHP_EOL; //Veja que ainda é 4, só vai aumentar na próxima operação
    echo $numA;echo PHP_EOL;echo PHP_EOL; //Note que aumentou de 4 para 5
    
    //Incremento e Decremento pré-fixado:
    echo --$numB;echo PHP_EOL; //Diminui para 4 antes da operação
    echo ++$numB;echo PHP_EOL; //Aumenta para 5 antes da operação
    echo $numB; //Note que continua 5

?>