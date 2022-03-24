<?php

    //VENDO TAMANHO DE UMA STRING:

    $tamanho = "tamanho";

    echo strlen($tamanho);

    //OBSERVAÇÃO IMPORTANTE: a função strlen lê o valor de byte dos caracteres, como cada caractere comum vale 1 byte, ele retorna 1 para cada byte, porém caracteres acentuados retornam 2 bytes por causa do unicode, para contar caracteres de uma string com multibyte é melhor usarmos a extensão "mb" do PHP.
?>