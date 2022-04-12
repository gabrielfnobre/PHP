<?php

    namespace MinhaOrganizacaoPessoal\arquivos_das_aulas\Exemplo_de_Namespaces\Pessoa\Funcionario;
    
    class Funcionario {
        
        private $ra;
        private $funcao;

        public function __construct(string $ra, string $funcao){
            $this->ra = $ra;
            $this->funcao = $funcao;
        }

        public function getFuncionario():string 
        {
            return "Essa Pessoa possuí o RA: $this->ra e sua função é $this->funcao." . PHP_EOL;
        }

    }

?>