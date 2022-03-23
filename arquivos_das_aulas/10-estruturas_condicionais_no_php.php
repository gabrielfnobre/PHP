<?php

    //ESTRUTURAS CONDICIONAIS NO PHP:

    //IF...
    //Usando if para verificar se pessoa é maior de 18 anos...

        $idade = 16;

        if($idade < 18){
            echo "Fulano(a) é menor de 18 anos, pois tem só $idade anos";echo PHP_EOL;
        }
    
    //ELSE...
    //Usando else para dar outra opção ao código...

        if($idade >= 18){
            echo "Fulano(a) pode entrar, ele(a) é maior de 18 anos";
        } else {
            echo "Fulano(a) é menor de 18 anos, pois tem só $idade anos";echo PHP_EOL;
        }

    //ELSE IF...
    //Trazendo mais possibilidades ao código...

        if($idade >= 18){
            echo "Fulano(a) pode entrar, ele(a) é maior de 18 anos";
        } else if($idade < 18 && $idade >= 15){
            $faltam = 18 - $idade;
            echo "Calma, calma, você já têm $idade anos, faltam só $faltam para você entrar...";echo PHP_EOL;
        } else {
            echo "Ih, você tem só $idade anos? Vai demorar para você entrar então...";echo PHP_EOL;
        }
        
        
?>