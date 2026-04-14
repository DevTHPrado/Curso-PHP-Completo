<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos primitivos em PHP</title>
</head>
<body>
    <h1>Teste de tipos primitivos</h1>
    <?php 
        $num = 0x1A; // números que começam com 0x são HEXADECIMAL
        echo "O valor da variável é $num.\n";

        $numero = 0b1011; // números que começam com 1b são BINÁRIOS
        echo "\nO valor da variável é $numero.";

        $n = 010; // números que começam com 0 são OCTAL
        echo "\nO valor da variável é $n.";

        $número = 5e3; // 5 x 10 (3) (potência)
        echo "\nO valor da variável é $número.";

        $v = "Thiago";
        var_dump($v); // esse comando ele não mostra somente o valor da variável, mas tbm todas as informações dela

        var_dump($número); // sempre que eu utilizo potências, ele será float

        $número = (int) 3e2; // colocar o tipo da variável antes do valor se chama "coerção"
        var_dump($número); // ele só não será float se eu "forçar" ele a virar int ou integer

        $num = (double) "950"; 
        var_dump($num);

        $casado = false; // o false no PHP, não aparece no echo ou no print, já o true, ele aparece 1
        var_dump($casado);
        echo "O valor para casado é $casado"; 
        
        $vet = [6, 2.5, "Maria", 3 ,false]; // isso é um vetor
        var_dump($vet); // se utilizar o echo ele da erro

        class Pessoa { // aqui eu criei uma classe
            private string $nome; // e aqui eu adicionei um atributo dessa classe
        }

        $p = new Pessoa; // eu adicionei uma variavel do "tipo" Pessoa, com isso ela vai adquirir os mesmos atributos dessa classe
        var_dump($p);
    ?>
</body>
</html>