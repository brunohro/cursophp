<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício PHP</title>
    <link rel="stylesheet" href="../style/style.css">
</head>

<body>
    <?php 
    $valor1 = $_REQUEST["v1"]??0;
    $valor2 = $_REQUEST["v2"]??0;
    ?>
    <main>
        <h1>Somador de valores</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="v1" id="v1">Valor 1</label>
            <input type="number" id="v1" name="v1" value="<?=$valor1?>">
            <label for="v2" id="v2">Valor 2</label>
            <input type="number" id="v2" name="v2" value="<?=$valor2?>">
            <input type="submit" value="Somar">
        </form>
    </main>
    <section>
        <h1>Resultado da soma</h1>
        <?php 
        $soma = $valor1 + $valor2;
        echo "A soma de $valor1 + $valor2 é igual a <strong>$soma</strong>";
        ?>
    </section>
</body>

</html>