<?php

    //FINAL:

    //O "final" é uma palavra reservada que usamos para impedir que classes possam ser herdadas ou que possuam os seus métodos sobrescritos, veja como utlizar...

    class Pessoa{

        protected $nome;
        protected $idade;

        public function __construct(string $nome, string $idade){

            $this->nome = $nome;
            $this->idade = $idade;

        }

        final public function mostraPessoa():void //Veja aqui o uso de "final", antes do método ser escrito, isso 
        {                                           //determina que o método não pode ser sobrescrito...
            echo "Nome: $this->nome" . PHP_EOL . "Idade: $this->idade" . PHP_EOL . PHP_EOL;
        }

    }

    final class Funcionario extends Pessoa{ //Veja que a classe "Funcionario" é final, ou seja, não pode ser herdada...

        protected $cargo;

        public function __construct(string $nome, string $idade, string $cargo){

            parent:: __construct($nome, $idade);
            $this->cargo = $cargo;

        }

        public function mostraPessoa():void //Veja que na tentativa de sobrescrita a IDE já mostra que não pode...
        {
            echo "quero esse método diferente";
        }

    }

    class FilhoDeFuncionario extends Funcionario { //Veja que na tentativa de herdar a classe Funcionario a IDE já 
                                                    //mostra que não pode...
        public function __construct(string $nome, string $idade, string $cargo){

            parent:: __construct($nome, $idade, $cargo);

        }

    }
?>