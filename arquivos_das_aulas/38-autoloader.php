<?php

//AUTOLOADER:

//O autoloader é uma função do PHP usada para fazer vários requires de arquivos para a nossa aplicação de uma única vez. Essa função ainda permite que adicionemos funcionalidades para extrair somente os arquivos que desejados que atenderem aos parâmetros pré-determinados na função autoloader, ele é excelente para a busca de namespaces, que devem atender a um determinado padrão de busca.

//A grande vantagem de se utilizar autoloaders é evitar fazer vários requires num arquivo para buscar diversos arquivos diferentes. Invez disso, utilizamos apenas uma função que irá buscar os arquivos automáticamente obedecendo aos parâmetros pré-estabelecidos por nós.

    //Vejamos abaixo um exemplo onde desejamos buscar 2 classes que estão em arquivos diferentes, uma classe chamada "Pessoa" e outra chamada "Funcionario", ambas utilizam "namespace"...

    spl_autoload_register(function (string $nomeQualquerQueVaiTrazerOCaminhoCorretoDoArquivo) {

        $basePath = __DIR__ . DIRECTORY_SEPARATOR;

        $caminhoDoArquivo = str_replace('MinhaOrganizacaoPessoal\\arquivos_das_aulas\\', $basePath, $nomeQualquerQueVaiTrazerOCaminhoCorretoDoArquivo);
        $caminhoDoArquivo = str_replace('\\', DIRECTORY_SEPARATOR, $caminhoDoArquivo);
        $caminhoDoArquivo .= '.php';

        echo $caminhoDoArquivo;

        if (file_exists($caminhoDoArquivo)) {
            echo require_once $caminhoDoArquivo;
        } else {
            echo "Caminho \"$caminhoDoArquivo\" não encontrado!";
            exit();
        }
    
    });

    use MinhaOrganizacaoPessoal\arquivos_das_aulas\Exemplo_de_Namespaces\Pessoa\NomeIdade;
    use MinhaOrganizacaoPessoal\arquivos_das_aulas\Exemplo_de_Namespaces\Pessoa\Funcionario;

    $carlos = new NomeIdade('Carlos', '42');
    echo $carlos->getInformacoes(); echo PHP_EOL;

    $carlosPedreiro = new Funcionario('42115', 'Pedreiro');
    echo $carlosPedreiro->getFuncionario();
    
?>