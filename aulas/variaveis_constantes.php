<?php 
    $nome = "Thiago";
    $sobrenome = "Romão";
    const PAIS = "Brasil";
    // variavel pode mudar de valor, ja constante não
    // constantes não tem $ na frente
    $nome = "Sophia";
    $sobrenome = "Auricchio";
    
    echo "Muito prazer, $nome $sobrenome! Você mora no \n" . PAIS;

    /* REGRAS PARA NOMES IDENTIFICADORES
    1º variaveis sempre começam com o simbolo $
    2º o segundo caracter pode ser letra ou o simbolo _ (underline)
    3º aceita caracteres [a-z], [A-Z], [0-9] e [_]
    4º aceita caracteres da tabela ASCII a partir de 128
    5º aceita caracateres acentuados como á, õ, ç
    6º a linguagem é case sensitive em relação aos nomes
    7º nomes especiais como $this não podem ser usados
    */

    $nome = "Pedro";
    echo "\nÉ verdade que seu nome é $nome?"; //nao posso colocar $NOME por conta da regra 6
    $Nome = "Maria"; //por conta da regra 6, a variavel $nome e $Nome são diferentes
    echo "\nVocê gosta mais do $nome ou da $Nome?";

    $sálario = 2500.75;
    echo "\nSeu sálario é de R$$sálario."; // se eu colocar no echo "salario" sem o acento, ele vai dar erro

    $valorµ = 200;
    echo "\nO valor é igual a $valorµ."; // esse exemplo é para mostra q o PHP aceita alguns simbolos da tabela ASCII, conforme esta na regra 4

    const _TX = 850;
    echo "\nResultado = " . _TX; //aqui mostra a regra 3 e 4

    /* RECOMENDAÇÕES PARA DAR NOMES
    1º tente dar nomes claros e de fácil identificação
    2º evite nomes muitos curtos ou muito longos
    3º defina um padrão e siga em todo projeto
    4º para variaveis, de preferencia para letras minusculas
    5º para constantes, de preferencia para letras maiusculas
    6º use camelCase para métodos e atributos
    7º use o SNAKE_CASE para nomear constantes
    */
    
    $nomeCompletoCliente = "Camel Case";
    $telefone_contato_fornecedor = "Snake Case";
?>