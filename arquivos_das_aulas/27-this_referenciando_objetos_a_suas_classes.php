<?php

    //THIS:
    //Assim como em outras linguagens de programação usamos o this para referenciar nossos objetos

        class Forma {
            public string $sabor = 'chocolate';
            public string $formato = 'redondo';

            public function entregarBolo(string $pronto) {
                if($pronto == 'sim'){
                    echo "Já pode entregar o bolo $this->formato de $this->sabor."; //Note que usamos o $this para que o php
                } else {                                                            //entenda que estamos chamando a partir
                    echo "O bolo de $this->sabor ainda não está pronto";            //de uma instância dessa classe...
                }
            }
        }

        $chocolate = new Forma();
        var_dump($chocolate);
        $chocolate->entregarBolo('sim'); //Note que para chamar o método usamos "->" e não notação ponto

?>