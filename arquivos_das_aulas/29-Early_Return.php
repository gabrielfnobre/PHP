<?php

    //EARLY RETURN:
    //A técnica do Early Return é uma técnica usada para quando não queremos usar "if" e "else" demasiadamente e fazer o programa ler códigos dos quais não precisa, para isso usamos um return que faz a execução do código ser parada antes de ficar lendo linhas de código desnecessárias...

        class Forma {
            public string $sabor = 'chocolate';
            public string $formato = 'redondo';

            public function entregarBolo(string $pronto):void { 
                if($pronto == 'sim'){                       
                    echo "Já pode entregar o bolo $this->formato de $this->sabor."; 
                    return;
                } 
                    //Perceba que aqui poderíamos usar um else para mostrar esse código, mas invez de escrever um else só para isso fizemos o código parar a execução do método antes de ler um else sem necessidade, pois já sabemos que se o código abaixo for lido, é sinal de que não entramos no if...
                    echo "O bolo de $this->sabor ainda não está pronto" . PHP_EOL;
                    echo PHP_EOL;
            }
        }

        $chocolate = new Forma();
        var_dump($chocolate);
        $chocolate->entregarBolo('não'); 
        
        $chocolate2 = new Forma();
        var_dump($chocolate2);
        $chocolate2->entregarBolo('sim'); 

?>