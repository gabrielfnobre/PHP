<?php

    namespace MinhaOrganizacaoPessoal\arquivo_das_aulas\Exemplos_de_Namespaces;
    //Note que temos outro arquivo com o mesmo nome de Classe e dentro da mesma pasta "Exemplos_de_Namespaces"...

    class NomeIdade {
        
        private $nome;
        private $idade;

        public function __construct(string $nome, string $idade){
            $this->nome = $nome;
            $this->idade = $idade;
        }

        public function getInformacoes():string 
        {
            return "Esse Animal se chama: $this->nome têm $this->idade ano(s) de idade." . PHP_EOL;
            //Mas se referenciada corretamente ela traz um resultado totalmente diferente...
        }

    }

?>