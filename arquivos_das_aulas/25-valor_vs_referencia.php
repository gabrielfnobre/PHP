<?php

    //VALOR VS REFERÊNCIA:

        $variavel_a = 4;
        $variavel_b = $variavel_a; //Aqui foi referenciado somente o valor
        $variavel_c = &$variavel_a; //Usamos o & para referenciar o endereço de memória e não o valor 

        echo $variavel_a . PHP_EOL;
        echo $variavel_b . PHP_EOL;
        echo $variavel_c . PHP_EOL;
        echo PHP_EOL;
    
        $variavel_c = 7; //Veja que se mudarmos o valor de "c" ou "a" os 2 são mudados...
        echo $variavel_a . PHP_EOL;
        echo $variavel_b . PHP_EOL;
        echo $variavel_c . PHP_EOL;
        echo PHP_EOL;

    
    //Objetos automaticamente guardam endereços de memória e não valores...
        class Classe{
            public $a = 4;
            public $b = 7;
        }

        $objeto1 = new Classe();
        var_dump($objeto1);
        echo PHP_EOL;

        $objeto2 = $objeto1; //Perceba que objeto 2 recebe objeto1...
        var_dump($objeto2);
        echo PHP_EOL;

        $objeto1->a = 120; //Note que mudamos os valores do endereço de memória para onde objeto1 aponta...
        $objeto1->b = 451;

        var_dump($objeto1);
        echo PHP_EOL;
        var_dump($objeto2); //Como objeto 2 recebeu o mesmo endereço de memória, o que mudar em objeto1 irá mudar em objeto2...
        echo PHP_EOL;
    

?>