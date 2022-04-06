<?php

    //HERANÇA:

    class Animal {

        private $especie;

        public function __construct(string $especie){
            $this->especie = $especie;
        }

        public function getEspecie(){
            return $this->especie;
        }

    }

    class Mamifero extends Animal {

        ??

    }
    
?>