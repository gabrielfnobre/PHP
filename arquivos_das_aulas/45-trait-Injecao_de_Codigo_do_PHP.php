<?php

    //TRAIT:

    //O "trait" é uma forma de classe utilizada para injeção de código dentro de outras classes, como o PHP não permite a herança multípla podemos usar o trait para colocar um mesmo código em várias classes diferentes.
    //Outra vantagem do trait é que podemos usar vários traits diferentes dentro de uma classe, para injetar o trait numa classe usamos a palavra reservada "use"...

    class Pessoa{ 

        private $nome;
        private $idade;

        use Getters, Setters; //Veja que por através da palavra reservada "use" chamamos os traits "Getters" e "Setters"
                                //note que podemos chamar mais de um trait usando um único "use"...
    }

    class Funcionario {

        private $nome;
        private $idade;

        use Getters, Setters; //Fizemos o mesmo em Funcionario...

    }

    trait Getters {   //Aqui temos a estrutura do trait, ele usa a palavra reservada "trait" no lugar de "class"...

        public function __get($atrib){ //A função desse trait é gerar um método mágico get para recuperarmos nossos 
            return $this->$atrib;       //atributos...
        }
    }
    
    trait Setters {   

        public function __set($atrib, $value){ //E a função desse trait é gerar um método mágico set para atribuir 
            $this->$atrib = $value;             //valores aos nossos atributos...
        }
    }

    $pessoa = new Pessoa();
    $pessoa->nome = 'pessoinha';
    $pessoa->idade = '10';
    echo $pessoa->nome . PHP_EOL;
    echo $pessoa->idade . PHP_EOL;
    var_dump($pessoa) . PHP_EOL;
    echo PHP_EOL;
    
    $funcionario = new Funcionario();
    $funcionario->nome = 'funcionariozinho';
    $funcionario->idade = '20';
    echo $funcionario->nome . PHP_EOL;
    echo $funcionario->idade . PHP_EOL;
    var_dump($funcionario) . PHP_EOL;
    echo PHP_EOL;

?>