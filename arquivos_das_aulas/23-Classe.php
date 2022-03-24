<?php

    //CRIAÇÃO DE CLASSE EM PHP:

        //Como é de costume em várias linguagens e no PHP não é diferente, a classe está com o nome em maiúsculo, inclusive o arquivo também é escrito com letra maíscula...
        class Forma {
            //Note que podemos definir os atributos, escolher o seu nível de encapsulamento e ainda que tipo ele vai receber...
            public string $sabor = 'chocolate';
            public string $formato = 'quadrado';
            private string $ingrediente_secreto = 'baunilha';
        }

        //Forma de criar o objeto...
        $bolo_de_chocolate = new Forma();

        //Verificando todos os elementos do objeto...
        var_dump($bolo_de_chocolate);
        echo PHP_EOL;

        //Vendo os atributos individualmente...
        echo $bolo_de_chocolate->sabor . PHP_EOL; //Note que usamos o -> como método de acesso, e o atributo não precisa de 
        echo $bolo_de_chocolate->formato . PHP_EOL; //usar o "$"...
        echo $bolo_de_chocolate->ingrediente_secreto . PHP_EOL; //Atributos privados NÃO PODEM SER ACESSADOS...

?>