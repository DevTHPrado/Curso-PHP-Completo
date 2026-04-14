<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head> 
<body>
    <header>
        <h1>Resultado do processamento</h1>
    </header>
    <main>
        <?php 
            var_dump($_GET); /*existem 3 superglobais: o $_GET, $_POST e o $_REQUEST
            $_GET: só funciona quando o method for get;
            $_POST: só funciona quando o method for post;
            $_REQUEST: ele é a fusão dos dois*/

            $nome = $_REQUEST["nome"] ?? "sem nome"; //oq esta nas "" é o nome que vem la do formulario do html
            //esse "??" é um comando novo do PHP, onde ele faz o programa não dar erro caso o usuário não preencha o formulário
            $sobrenome = $_GET["sobrenome"] ?? "desconhecido";
            echo "<p>É um prazer te conhecer <strong>$nome $sobrenome</strong>! Este é o meu site!"; //strong é para deixar em negrito (em HTML)
        ?>
        <p><a href="javascript:history.go(-1)">Voltar para a página anterior</a> <!--Javascrpit, não aprendi ainda--></p>
    </main>
</body>
</html>