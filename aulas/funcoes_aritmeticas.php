<?php 
    /*FUNÇÕES ARITMÉTICAS
    abs(): é o valor ABSOLUTO (ele tira o sinal de um valor)
    base_convert(): ele converte numeros de decimal para binário, binário para decimal, octagonal, hexagonal, etc.
    ceil(), floor(), round(): são funções de arredondamento, ceil arredonda para cima, floor para baixo e round é o arredondamento artimético normal
    hypot(): serve para tirar a hipotenusa
    intdiv(): serve para fzr uma divisão inteira (se eu fzr 5/2 irá dar 2.5, mas se eu utilizar essa função ele irá mostrar)
    min(), max(): mostram o mínimo e máximo do valor de uma sequencia
    pi(): valor de pi (3.1415926535898) ou usando a constante M_PI
    pow(): potência, porem usando assim vc perde a ordem de precedencia
    sin(), cos(), tan(): para vc calcular seno, cosseno e tangente
    sqrt(): raiz quadrada, ou vc pode fazer raiz quadrada dessa forma (81 ** (1/2) = 9)
    */
    $a = abs(-2000);
    echo "A resposta é $a"; //2000

    $bc = base_convert(254, 10, 16); 
    echo "\nA resposta é $bc"; //FE

    $c = ceil(7.5);
    echo "\nA resposta é $c"; //8

    $f = floor(7.5);
    echo "\nA resposta é $f"; //7

    $r = round(7.5);
    echo "\nA resposta é $r"; //8

    $id = intdiv(5, 2);
    echo "\nA resposta é $id"; //2

    $max = max(7, 3, 6, 4, 2);
    echo "\nA resposta é $max"; //7

    $min = min(7, 3, 6, 4, 2);
    echo "\nA resposta é $min"; //2

    $pi = pi();
    echo "\nA resposta é $pi"; //3.1415926535898

    $p = pow(5, 2);
    echo "\nA resposta é $p"; //25

    $sqrt = sqrt(81);
    echo "\nA resposta é $sqrt"; //9

?>