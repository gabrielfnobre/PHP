<?php

    //MÉTODOS ACESSORES:

        class Forma {
            private string $sabor; //Perceba que nossos atributos estão privados...
            private string $formato;

            public function definirSabor($sabor):string { //Temos aqui setters para atribuição de valores...
                return $this->sabor = $sabor;
            }
            
            public function definirFormato($formato):string {
                return $this->formato = $formato;
            }
            
            public function verSabor():string { //Temos aqui getters para visualizar os atributos...
                return $this->sabor;
            }
            
            public function verFormato():string {
                return $this->formato;
            }

        }

        //Note que nas 2 instâncias abaixo nós precimos de atribuir valores aos atributos por através de métodos acessores...
        $chocolate = new Forma();
        $chocolate->definirSabor('chocolate');
        $chocolate->definirFormato('quadrado');
        echo $chocolate->verSabor() . PHP_EOL; //Só conseguimos ver os valores se usarmos um get...
        echo PHP_EOL;
        
        $morango = new Forma();
        $morango->definirSabor('morango');
        $morango->definirFormato('redondo');
        var_dump($morango);
        $morando->sabor; //Veja que quando tentamos visualizar o valor de um atributo privado, teremos um erro...

?>