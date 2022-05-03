<?php

    //__toString:

    //Esse é um método mágico só pode ser usado dentro de classes, ele têm por objetivo retornar uma string quando o objeto é chamado por através de "echo" ou "print", podemos colocar qualquer frase e até atributos para serem retornados como string como retorno do método mágico "__toString"...

    class DizOi {

        public function __construct(string $nome){
            
            $this->nome = $nome;
            
        }

        function __toString():string //Aqui temos um exemplo de como usar o método mágico "toString"...
        {
            return "Olá $this->nome, tudo bem?"; //Note que usamos um atributo retornado juntamente com a string...
        }

    }
    
    $valdir = new DizOi('Valdir');
    echo $valdir; //Veja que basta usarmos eco na instância e ela automáticamente chama pelo método mágico "__toString"
                    //retornando a string definida no retorno do método...

?>