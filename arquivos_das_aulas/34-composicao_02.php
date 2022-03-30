<?php

    //Fizemos uma requisição da classe que queremos importar os atributos...
    require '34-composicao_03.php';

    class Carro {
        
        public function __construct(string $cor, string $estilo, string $aro, string $calota){
            $this->cor = $cor;
            $this->estilo = $estilo;
            $this->pneus = new Pneu ($aro, $calota); //Note aqui que iniciamos a instância da classe Pneu dentro da classe
        }                                               // Carro...

        public function mostraRodas(){ //Veja que temos um método que chama outro método que está dentro da classe Pneu, visto
            return $this->pneus->mostraPneus(); //que o atributo "pneus" se tornou objeto de "Pneu"...
        }

    }   

?>