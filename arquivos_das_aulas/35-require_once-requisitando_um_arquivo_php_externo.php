<?php

    //REQUIRE_ONCE:
    //a palavra reservada "require_once" é usada para quendo desejamos importar um arquivo externo para o nosso arquivo atual.
    //Atenção!!! O "require_once" importa apenas um arquivo.

    require_once '34-composicao_02.php'; //Aqui exportamos a classe Carro para ser utilizada como um componente...

    $carro_azul = new Carro('azul', 'sedan', '14', 'cromadas');
    
    var_dump($carro_azul);echo PHP_EOL; 
    
    echo $carro_azul->mostraRodas();
    
?>