<?php

    class Pneu {
        
        public function __construct(string $aro, string $calota){
            $this->aro = $aro;
            $this->calota = $calota;
        }

        public function mostraPneus():string
        {
            return "Esse carro tem rodas aro: $this->aro e calotas $this->calota." . PHP_EOL;
        }

    }

    

?>