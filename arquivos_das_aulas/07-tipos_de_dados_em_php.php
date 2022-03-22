<?php

    //TIPOS DE DADOS EM PHP:

    //Vamos usar a função "gettype" do PHP para nos ajudar, essa função retorna para nós qual é o tipo de um determinado valor passado para ela...
    
    echo gettype(10);echo " - numeros sem ponto flutuante \n";
    echo gettype(5.6);echo " - numeros com ponto flutuante\n";
    echo gettype('Oi');echo " - com aspas simples\n";
    echo gettype("Oi");echo " - com aspas duplas\n";
    echo gettype(true);echo " - valor true\n";
    echo gettype(false);echo " - valor false\n";
    echo gettype([1, 2, 4]);echo " - array com colchetes\n";
    echo gettype(null);echo " - valor null\n";
    echo gettype('');echo " - string vazia\n";

?>