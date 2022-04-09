<?php

    require_once "Exemplo_de_Namespaces/37-NomeIdade.php";
    //Note que o caminho no require mudou, agora ele não entra na pasta "Pessoa"...

    use MinhaOrganizacaoPessoal\arquivo_das_aulas\Exemplos_de_Namespaces\NomeIdade;
    //Mas usamos o mesmo namespace que vai entrar na pasta "Exemplos_de_Namespaces" á procura por um elemento "NomeIdade", o primeiro que ela encontrar será o que vai trazer para nós...

    $carlos = new NomeIdade('Carlos', '42');
    echo $carlos->getInformacoes();
    //Veja que Carlos não é mais uma pessoa, ele é um animal agora...
    
?>