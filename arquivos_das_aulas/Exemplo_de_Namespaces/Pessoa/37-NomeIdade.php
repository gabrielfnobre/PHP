<?php

    namespace MinhaOrganizacaoPessoal\arquivo_das_aulas\Exemplos_de_Namespaces;
    //Note aqui não utilizamos o "MinhaOrganizacaoPessoal", essa pasta não existe, nós que inventamos esse caminho pessoal para que o namespace correto seja informado ao php para referenciar esse arquivo e só depois ele começa a busca nas pastas...
    //Outro detalhe importante, os namespaces sempre são acessados por através de contra-barra, não importa o Sistema Operacional

    class NomeIdade {
        
        private $nome;
        private $idade;

        public function __construct(string $nome, string $idade){
            $this->nome = $nome;
            $this->idade = $idade;
        }

        public function getInformacoes():string 
        {
            return "Essa Pessoa se chama: $this->nome têm $this->idade ano(s) de idade." . PHP_EOL;
        }

    }

?>