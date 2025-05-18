<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="../../ex004/style.css" />
</head>

<body>
    <main>
        <h1>Analisador de Número Real</h1>
        <?php 
        $num = $_REQUEST["numeroReal"] ?? "";
        $pInteira = floor($num);
        $pFracionaria = $num - $pInteira;
        echo "Analisando o número <strong> $num </strong> informado pelo usuário:  <br>";

        echo "<ul><li>A parte inteira do número é $pInteira <br> </li> </ul>";
        echo "<ul><li>A parte fracionária do número é ". number_format($pFracionaria, 2, ",", "."). "</li> </ul><br>"
?>
        <button>
            <a href="javascript:history.go(-1)">Voltar</a>
        </button>
    </main>
</body>

</html>