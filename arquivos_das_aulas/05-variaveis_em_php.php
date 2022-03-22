<?php

    $nome = 'Gabriel';

    $idade = 30;
    echo "$idade\n"; //Podemos interpolar variáveis em strings usando as áspas duplas, com áspas únicas não dá certo
    
    $idade = 21; //Podem ter o valor modificado
    echo "$idade\n";

    echo "$nome tem $idade";

    //Variáveis em PHP:

    /* 
        # - Devem ser precedidas sempre pelo símbolo de "$";
        # - Podem ser reatribuídas;
        # - Podem ser interpoladas normalmente no meio de strings (SOMENTE USANDO ÁSPAS DUPLAS);

    */
?>