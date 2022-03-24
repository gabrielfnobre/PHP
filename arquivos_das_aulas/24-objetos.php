<?php

    //OBJETOS NO PHP:
    //Objetos só podem ser criados no PHP á partir de uma classe...

        class Forma {
            public string $sabor = 'chocolate';
            public string $formato = 'quadrado';
            private string $ingrediente_secreto = 'baunilha';
        }

        //Criamos objetos usando o new...
        $bolo_de_chocolate = new Forma();

        //Verificando todos os elementos do objeto...
        var_dump($bolo_de_chocolate);
        echo PHP_EOL;

        //Vendo os atributos individualmente...
        echo $bolo_de_chocolate->sabor . PHP_EOL; //Note que usamos o -> como método de acesso, e o atributo não precisa de 
        echo $bolo_de_chocolate->formato . PHP_EOL; //usar o "$"...
        echo PHP_EOL;

    //Modificando valores de atributos públicos...
        $bolo_de_chocolate->sabor = 'morango';
        $bolo_de_chocolate->formato = 'redondo';
        $bolo_de_chocolate->decoracao = 'granulado'; //Podemos até criar atributos novos para um único objeto...

        var_dump($bolo_de_chocolate);

?>