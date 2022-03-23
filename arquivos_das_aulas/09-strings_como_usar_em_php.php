<?php

    //STRIGS PODEM SER USADAS NO PHP DAS SEGUINTES FORMAS:

    $nome = 'Gabriel';

    //Aspas duplas podemos interpolar com variáveis e caracteres especiais...
    echo "eu uso interpolação $nome\n";

    //Podemos concatenar strings e variáveis com o uso do "ponto"...
    echo "Meu nome é " . $nome . " mas não da Silva\n";

    //Aspa única não pode interpolar com nada...
    echo 'nao uso interpolação';

    //Caracteres Escape com uso da contra barra...
    echo "\n"; //Pula uma linha...
    echo "\tFaz tab\n"; //Faz tabulação...
    echo "\v\vFaz tab vertical\n"; //Faz tab vertical, semelhante a pular uma linha...
    
    //Uso da constante PHP_EOL, a constante PHP_EOL é uma constante que imita os caracteres de pular linha do sistema que estiver lendo o PHP. Essa constante torna o pulo de linha mais legível no PHP.
    echo PHP_EOL;
    echo PHP_EOL;
    echo PHP_EOL;
    echo PHP_EOL;
?>