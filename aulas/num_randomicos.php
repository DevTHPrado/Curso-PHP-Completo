<?php 
    $min = 0;
    $max = 100;

    $num = random_int($min, $max);
    // rand() = 1951 - Linear Congrential Generator
    // mt_rand() = 1997 - Mersenne Twister (4x mais rápido!) (é obrigado a colocar o número min menor que o max) (RECOMENDADO)
    // A partir do PHP 7.1, rand() é um simples apontamento para mt_rand() (segundo o manual)
    // random_int() = gera números aleatórios criptograficamente seguros (MAIS SEGURO porém MAIS LENTO)

    echo "Gerando um núemro aleatório entre $min e $max...";
    echo "\nO número gerado foi $num";
?>