<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anatomia de uma divisão</title>
    <link rel="stylesheet" href="../../style/style.css">
</head>

<body>
    <main>
        <?php 
    $dividendo = $_REQUEST["dividendo"]??0;
    $divisor = $_REQUEST["divisor"]??0;
    ?>
        <h1>Anatomia de uma Divisão</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="dividendo">Dividendo</label>
            <input type="number" name="dividendo" value="<?=$dividendo?>">
            <label for="divisor">Divisor</label>
            <input type="number" value="<?=$divisor?>" name="divisor">
            <input type="submit" value="Analisar">
        </form>
        <?php 
        $resultado = intdiv($dividendo, $divisor);
        $resto = $dividendo % $divisor;

        echo "<ul><li>O dividendo é $dividendo <br></li></ul>";
        echo "<ul><li>O divisor é $divisor <br></li></ul>";
        echo "<ul><li>O Resultado é $resultado <br></li></ul>";
        echo "<ul><li>O resto é $resto <br></li></ul>";
        ?>
    </main>
</body>

</html>