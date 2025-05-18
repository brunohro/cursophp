<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sorteador de números</title>
    <link rel="stylesheet" href="../../ex004/style.css">
</head>

<body>
    <main>
        <h1>
            Trabalhando com números aleatórios
        </h1>

        <?php 
        $valor = mt_rand(1, 100);
        echo "Gerando um número aleatório entre 0 e 100...<br>";
        echo "O valor gerado foi $valor <br>";
        ?>

        <button type="submit" onclick="javascript:document.location.reload()">
            Gerar Outro
        </button>



    </main>
</body>

</html>