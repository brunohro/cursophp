<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Resultado</title>
</head>

<body>
    <header>
        <h1>Resultados de processamento</h1>
    </header>
    <main>
        <?php 
        $nome = $_REQUEST["nome"] ?? "Desconhecido";
        $sobrenome = $_REQUEST["sobrenome"] ?? "Desconhecido";
        echo "É um prazer te conhecer $nome $sobrenome, bem vindo(a) ao meu site!";

        // var_dump($_REQUEST); // Uma junção de $_GET $_POST $_COOKIES
        ?>

        <p><a href="javascript:history.go(-1)">Voltar para página anterior</a></p>
    </main>
</body>

</html>