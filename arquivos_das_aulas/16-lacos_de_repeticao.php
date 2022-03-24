<?php

    //LAÇOS DE REPETIÇÃO NO PHP:

    //WHILE...

     $contador = 1;

        while($contador <= 15){
            echo "$contador\n";
            $contador++;
        }
        echo PHP_EOL;


    //DO WHILE...
        
        do {
            echo "$contador\n";
            $contador--;
        } while($contador > 0);
        echo PHP_EOL;


    //FOR...

        for($contador = 1; $contador <= 15; $contador++){
            echo "#$contador\n";
        }
        echo PHP_EOL;


    //FOREACH...
    //Usamos para iterar sobre os índices de um array.

        $array = [1, 2, 3, 4, 5];

        foreach ($array as $number){
            echo ($number * 10) . PHP_EOL;
        }
        echo PHP_EOL;


        //Em foreach podemos ter o valor índice também usando a seguinte sintaxe...
        foreach($array as $indice => $number){
            echo $indice . " - " . $number . PHP_EOL;
        }
        echo PHP_EOL;


    //CONTINUE...
    //Usamos para pular algum looping de acordo com uma condicional...

        for($contador = 1; $contador <= 5; $contador++){
            if($contador == 3) //Note que ele vai pular o 3, é como se dissesse: "se encontrar o 3 só pula para mim"...
                continue;
            echo $contador . PHP_EOL;
        }
        echo PHP_EOL;


    //BREAK...
    //Usamos para parar um looping quando chega numa determinada condição...

        for($contador = 1; $contador <= 5; $contador++){
            if($contador == 3) //Note que ele vai parar a execução do looping quando chegar no 3 nem mesmo exibindo ele...
                break;
            echo $contador . PHP_EOL;
        }
    
?>