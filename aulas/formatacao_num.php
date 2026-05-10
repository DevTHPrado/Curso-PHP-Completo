<?php 
    // Cotação copiada do Google
    $cotação = 5.41;

    // Quantos reais você tem?
    $real = 1000;

    // Equivalência em dólar
    $dolar = $real / $cotação;

    // Mostrar resultado
    echo "Seus R\$" . number_format($real, 2, ",", ".") . " equivalem a U\$" . number_format($dolar, 2, ",", ".");

    // O number_format() ele vai mostrar a forma internacional / americana de mostrar números (milhar sendo separado por [,] e decimais sendo separado por [.]), porem no Brasil é o contrário!

    // Porém é possível formatar isso tbm usando o método acima

#####################################################################

    // Formatação de moeda com internacionalização!
    // Biblioteca: intl (Internalization PHP)

    $padrão = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

    echo "\nSeus " . numfmt_format_currency($padrão, $real, "BRL") . " equivalem a " . numfmt_format_currency($padrão, $dolar, "USD");
?>