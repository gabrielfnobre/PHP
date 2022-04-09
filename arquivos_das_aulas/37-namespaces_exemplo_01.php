<?php

//NAMESPACE:

//O conceito de namespace não é um conceito único do PHP, na verdade namespace é um conceito geral para organização e utilização de pastas de arquivos. Com um namespace podemos determinar que um arquivo só será reconhecido á partir de um nome especial que damos no início do caminho dele.

//Como o namespace é usado?

//Quando temos muitos arquivos armazenados em pastas dentro da nossa aplicação e ainda por cima utilizamos bibliotecas externas em conjunto com os nossos arquivos a chance de ter nomes de arquivos idênticos pode ser grande. Por exemplo, imagine que temos um arquivo para uma classe "CPF" e além disso estamos usando uma biblioteca externa para validar "CPF", a chance de existir 2 arquivos "CPF" é grande.

//Agora imagine que dentro dos nossos arquivos conseguíssemos identificar a qual pasta eles pertencem e qual caminho o PHP tem que seguir para encontrar um determinado arquivo, bom, não precisa imaginar, esse método existe e é por através dos namespaces.

    require_once "Exemplo_de_Namespaces/Pessoa/37-NomeIdade.php";
    //Note que o caminho com require_once está referenciando para um arquivo que está dentro da pasta "Pessoa"

    use MinhaOrganizacaoPessoal\arquivo_das_aulas\Exemplos_de_Namespaces\NomeIdade; 
    //Note que ele só vai aceitar o require por que usamos o caminho correto de namespace, se por exemplo tirássemos o "MinhaOrganizacaoPessaol", o php não iria mais importar o arquivo...
    //Se você reparar bem, quando desejamos usar um elemento específico de um arquivo importado junto ao namespace, temos que usar como último nome do caminho o nome do elemento que queremos importar - que no nosso caso aqui é uma classe. Note que o nome dessa classe é idêntico ao nome de outra classe que também está dentro da pasta "Exemplos_de_Namespaces", por isso o php irá comparar se o caminho informado no require e no namespace combinam para que a classe correta seja chamada...

    $carlos = new NomeIdade('Carlos', '42');
    echo $carlos->getInformacoes();
    
?>