<?php 
    // MANIPULAÇÃO DE STRINGS NO PHP

/* Single quoted ('') e Double quoted ("") tem diferença no PHP? SIM!
O símbolo escolhido para efetuar a concatenação em PHP é o PONTO (.) e não o MAIS (+)

Quando a string é colocada em double quoted, ela será interpretada e analisada pelo PHP, diferente do single quoted
*/

echo "PHP\u{1F418}\n"; // há interpretação do conteúdo

echo 'PHP\u{1F418}'; // não há interpretação do conteúdo

$nome = "Thiago";
echo "\nOlá $nome!\n";
echo 'Olá $nome';

$sobrenome = "Romão";
echo "\n$nome $sobrenome \u{1F596}\n"; // mãozinho do Guanabara
echo '$nome $sobrenome \u{1F596}';

$nome = 'Thiago';
$sobrenome = 'Romão \u{1F596}';
echo "$nome $sobrenome";

const ESTADO = "RJ";
echo "Moro no ESTADO"; // não funciona assim

echo "\nMoro no " .ESTADO; // para constantes é necessário fazer a concatenação

const CANAL = "Curso em Video \u{1F499}"; // unicode "coração azul"
echo "\nEu adoro o ". CANAL;

echo "Estamos no ano de " . date('Y'); // ele mostrará o ano atual

$nom = "Rodrigo";
$snom = "Nogueira";
echo "\n$nom \"Minotauro\" $snom"; // sequência de escape

/*SEQUÊNCIAS DE ESCAPE
\n = Nova linha
\t = Tabulação horizontal
\\ = Barra invertida
\$ = Sinal de sifrão
\u{} = Codepoint Unicode
*/

$nome = "Thiago";
$sobrenome = "Romão";
$apelido = "Gafanhoto";
echo "\n$nome '$apelido' $sobrenome"; // utlizando a regra das aspas

echo "\n$nome " .$apelido. " $sobrenome"; // utilizando concatenação

echo "\n$nome \t \"$apelido\" \t$sobrenome"; // utilizando tabulação (era para dar um efeito de TAB)

// SINTAXE HEREDOC
$curso = "PHP";
$ano = date('Y');
echo <<< FRASE
    Estou estudando $curso em $ano
FRASE; // essa sintaxe realmente funciona, porem é pouquissimo usado, mas pode cair em provas

$canal = "Curso em Video";
$ano = date('Y');
echo <<< TESTE
    Olá galera do $canal!
            Tudo bem com vocês?
        Como está sendo este ano de $ano?
    Abraços! \u{1F596}
TESTE;

// SINTAXE NOWDOC
echo <<< 'TESTE'
    Olá galera do $canal!
            Tudo bem com vocês?
        Como está sendo este ano de $ano?
    Abraços! \u{1F596}
TESTE; // essa sintaxe tambem funciona, e tem o msm modelo das Single quoted
?>