<?php

    //DESTRUCT:
    //O __destruct é uma função do PHP para destruir todas as instâncias que deixaram de possuir uma variável de referência. Ela usada constantemente pelo garbarge colector que acionada essa função para impedir que o PHP fique acumulando memória do computador sem necessidade.

        class Forma {
            
            public function __construct(string $sabor, string $formato){ 
                $this->sabor = $sabor;                                      
                $this->formato = $formato;    
                
            }
            
            public function __destruct(){
                echo "Fui destruída por que não fui armazenada numa variável" . PHP_EOL;
            }

        }

        //Perceba que vamos criar 3 instâncias e note que elas não serão usadas para nada depois disso, o garbarge colector entende que elas não precisam mais ser utilizadas e destrói todas elas...
        $chocolate = new Forma('chocolate', 'quadrado');
        $morango = new Forma('chocolate', 'quadrado');
        $leite_condensado = new Forma('leite condensado', 'quadrado');

?>