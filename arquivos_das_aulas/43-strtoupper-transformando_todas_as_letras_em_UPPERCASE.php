<?php

    //strtoupper:

    //Essa é uma função built-in do PHP que transforma todas as letras de uma string em UpperCase automáticamente...

    class Gritar { //Essa classe tem o objetivo de pegar um atributo criado temporariamente e transformar o valor dele
                    //numa string com todas as letras em uppercase...

        function __get(string $palavraQualquer):string
        {                                               
            return strtoupper($palavraQualquer) . PHP_EOL; //Veja que todas as letras do atributo temporário são
        }                                                   //transformadas em UpperCase...

    }
    
    $palavra = new Gritar();
    echo $palavra->valdir; //Qualquer atributo, mesmo que não exista, é transformado em UpperCase e retornado...
    echo $palavra->gabriel;
    echo $palavra->fencer;
    echo $palavra->nobrecoder;

?>