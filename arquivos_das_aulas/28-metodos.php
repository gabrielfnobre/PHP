<?php

    //METODOS:
        class Forma {
            public string $sabor = 'chocolate';
            public string $formato = 'redondo';

            public function entregarBolo(string $pronto) { //Veja que para criar métodos usamos um método de acesso, que 
                if($pronto == 'sim'){                       //poderá ser "public" ou "private" seguido pela função que irá
                    echo "Já pode entregar o bolo $this->formato de $this->sabor."; //comportar o método. Lembrando da 
                } else {                                                            //importância de sempre usar o $this para
                    echo "O bolo de $this->sabor ainda não está pronto";            //referenciar ao objetos chamador...
                }
            }
        }

        $chocolate = new Forma();
        var_dump($chocolate);
        $chocolate->entregarBolo('sim'); //Note que para chamar o método usamos "->" e não notação ponto

?>