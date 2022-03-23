<?php

    //OPERADORES DE COMPARAÇÃO:

    //OBS: O php não retorna true ou false, ele retorna "1" para true e "0" para false, no console o false aparece com um espaço em branco...
    
    //Operador de igual:
    echo 5 == "5"; //true
    echo PHP_EOL;
    echo 5 == 5; //true
    echo PHP_EOL;

    //Operador de estritamente igual:
    echo 5 === "5"; //false
    echo PHP_EOL;
    echo 5 === 5; //true
    echo PHP_EOL;
    
    //Operador de diferente:
    echo 5 != 5; //false
    echo PHP_EOL;
    echo 5 != 6; //true
    echo PHP_EOL;
    
    //Outro modelo do Operador de diferente:
    echo 5 <> 5; //false
    echo PHP_EOL;
    echo 5 <> 6; //true
    echo PHP_EOL;
    
    //Operador de estritamente diferente:
    echo 5 !== 5; //false
    echo PHP_EOL;
    echo 5 !== "5"; //true
    echo PHP_EOL;
    
    //Operador de estritamente diferente:
    echo 5 !== 5; //false
    echo PHP_EOL;
    echo 5 !== "5"; //true
    echo PHP_EOL;
    
    //Operadores de maior que e menor ou igual que:
    echo 5 > 5; //false
    echo PHP_EOL;
    echo 5 <= "5"; //true
    echo PHP_EOL;
    
?>