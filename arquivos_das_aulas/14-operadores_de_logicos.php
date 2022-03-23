<?php

    //OPERADORES LÓGICOS:

    //Incremento e Decremento pós-fixado:
    $true = 1;
    $false = 0;

    //Operador E...
    echo $true and $false; //false
    echo $true && $false; //false

    //Operador OU...
    echo $true or $false; //true
    echo $true || $false; //true
    
    //Operador OU EXCLUSIVO...
    echo $true xor $false; //true
    
    //Operador de NOT...
    echo !$true; //false

?>