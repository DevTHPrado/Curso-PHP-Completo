<?php 
    //EXPRESSÕES ARTMÉTICAS
    $res = 5 + 2 / 2;
    echo "O resultado é $res!"; //6

    /*ORDEM DE PRECEDÊNCIA
    &: () (parênteses, eles não são operadores aritmédicos, porém mudam a ordem de precedência)
    1º: ** (potência)
    2º :*, /, % (multiplicação, divisão, resto da divisão)
    3º: +, - (adição, subtração)
    */

    $ex = 50 / 2 + 3 ** 2;
    echo "\nA resposta da pergunta do milhão é $ex!"; //34

    $d = 50 / (2 + 3) ** 2;
    echo "\nCom o parenteses a resposta fica $d!" //2
?>