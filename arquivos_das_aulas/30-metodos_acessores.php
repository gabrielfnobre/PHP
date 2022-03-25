<?php

    //MÉTODOS ACESSORES:

        class Forma {
            private string $sabor; //Perceba que nossos atributos estão privados...
            private string $formato;

            public function setSabor($sabor):string { //Temos aqui setters para atribuição de valores, por convenção
                return $this->sabor = $sabor;           //escrevemos "set" no método...
            }
            
            public function setFormato($formato):string {
                return $this->formato = $formato;
            }
            
            public function getSabor():string { //Temos aqui getters para visualizar os atributos, por convenção escrevemos 
                return $this->sabor;            //get no método...
            }
            
            public function getFormato():string {
                return $this->formato;
            }

        }

        //Note que nas 2 instâncias abaixo nós precimos de atribuir valores aos atributos por através de métodos acessores...
        $chocolate = new Forma();
        $chocolate->setSabor('chocolate');
        $chocolate->setFormato('quadrado');
        echo $chocolate->getSabor() . PHP_EOL; //Só conseguimos ver os valores se usarmos um get...
        echo PHP_EOL;
        
        $morango = new Forma();
        $morango->setSabor('morango');
        $morango->setFormato('redondo');
        var_dump($morango);
        $morango->sabor; //Veja que quando tentamos visualizar o valor de um atributo privado, teremos um erro...

?>