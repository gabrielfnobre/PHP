<?php

    //MÉTODO CONSTRUTOR:

        class Forma {
            
            public function __construct(string $sabor, string $formato){ //Veja como o PHP é diferente de outras linguagens
                $this->sabor = $sabor;                                      //nesse caso, ele ainda usa o nome "function"
                $this->formato = $formato;                                  //porém logo após usamos a palavra reservada
            }                                                               //construct, que já identifica o método como sendo
                                                                            //um método construtor...
            public function getSabor():string { //Não precisamos mais de métodos setters para esse caso... 
                return $this->sabor;            
            }
            
            public function getFormato():string {
                return $this->formato;
            }

        }

        $chocolate = new Forma('chocolate', 'quadrado'); //Veja que podemos inicializar já atribuíndo os valores aos atributos
        echo $chocolate->getSabor() . PHP_EOL; //Podemos continuar usando os métodos acessores normalment...
        echo $chocolate->getFormato() . PHP_EOL;
        echo PHP_EOL;

?>