<?php

    //ARRAYS ASSOCIATIVOS:

    //Arrays associativos são semelhantes a objects em javascript, eles são usados para guardarmos valores dentro de chaves, porém, eles não deixam de ser arrays.
    
    //Veja alguns detalhes importantes sobre os arrays associativos:
    $conta_corrente_01 = [
        'nome' => 'Gabriel', //sempre devem ser usadas 'strings' ou numbers como chave...
        'idade' => '30 anos', //só suportam um valor...
        'valor' => [4500, 3000, 2500] //para colocar mais de um valor ele deverá estar dentro de um tipo iterável, como um array
    ];

    echo $conta_corrente_01['nome'] . PHP_EOL; //Para referenciar o valor deve ser usado o nome da chave...
    echo $conta_corrente_01['idade'] . PHP_EOL;
    echo $conta_corrente_01['valor'][2] . PHP_EOL; //Quando queremos referenciar arrays fazemos dessa forma...
    echo PHP_EOL;
    
    $conta_corrente_02 = [
        'nome' => 'Graziela',
        'idade' => '30 anos',
        'valor' => 5000
    ];
    
    $conta_corrente_03 = [
        'nome' => 'Junior',
        'idade' => '25 anos',
        'valor' => 3500
    ];

    //Podemos armazenar arrays associativos dentro de arrays e referenciá-los...
    $contasCorrentes = [$conta_corrente_01, $conta_corrente_02, $conta_corrente_03];

    for ($i = 0; $i < count($contasCorrentes); $i++){
        echo $contasCorrentes[$i]['nome'] . PHP_EOL; //Veja que para referenciar a chave "nome" dentro de cada conta
    }                                                   //tivemos que usar a chave referenciando o nome da chave "nome"...

?>