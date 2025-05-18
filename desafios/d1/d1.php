<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="../../ex004/style.css">
</head>

<body>
    <h1>Resultado</h1>
    <main>
        <?php 
$numero = $_REQUEST["numero"] ?? "";
$antecessor = $numero - 1;
$sucessor = $numero + 1;
echo "Número: $numero <br>";
echo "Antecessor: $antecessor <br>";
echo "Sucessor: $sucessor <br>";
?>
        <button onclick="javascript:history.go( -1)">
            Voltar
        </button>
    </main>

</body>

</html>