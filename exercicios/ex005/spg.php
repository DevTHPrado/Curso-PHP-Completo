<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex Superglobais</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <pre>
            <?php 
                // Query String: é uma solicitação, é a URL na pág quando tem parâmetros;

                setcookie("dia-da-semana", "SEGUNDA", time() + 3600); // configura um cookie, o 3600 é pq 1h tem 3600 seg;

                session_start();
                $_SESSION["teste"] = "FUNCIONOU!"; // inicia uma session

                echo "<h1>Superglobal GET</h1>";
                var_dump($_GET); // pega só pela URL

                echo "<h1>Superglobal POST</h1>";
                var_dump($_POST); // pega só pelos pacotes/cabeçalhos

                echo "<h1>Superglobal REQUEST</h1>";
                var_dump($_REQUEST); // pega dos dois e gera um único vetor

                echo "<h1>Superglobal COOKIE</h1>";
                var_dump($_COOKIE);  // mostra os cookies 

                echo "<h1>Superglobal SESSION</h1>";
                var_dump($_SESSION); // mostra as sessions

                echo "<h1>Superglobal ENV</h1>";
                var_dump($_ENV); // mostra as variáveis de ambiente
                foreach (getenv() as $c => $v) {
                    echo "<br>$c -> $v";
                }

                echo "<h1>Superglobal SERVER</h1>";
                var_dump($_SERVER); 

                echo "<h1>Superglobal GLOBALS</h1>";
                var_dump($GLOBALS); // pega todos os dados das outras superglobais
            ?>
        </pre>
    </main>
</body>
</html>