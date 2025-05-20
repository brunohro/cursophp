<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Raízes de um número </title>
    <link rel="stylesheet" href="../../style/style.css">
</head>

<body>
    <?php 
    $num = $_REQUEST["num"]??0;
    ?>
    <main>
        <h1>Informe um número</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="num">Número</label>
            <input type="number" name="num" value="<?=$num?>">
            <input type="submit" value="Calcular Raízes">
        </form>
        <?php 
        $raiz = number_format(sqrt($num), 3, ',', '');
        $cubica = number_format(pow($num, 1/3), 3, ',', '');
        ?>

    </main>
    <section>
        <h2>Resultado final</h2>
        <p>Analisando o <strong>número <?=$num?></strong>, temos: </p>
        <ul>
            <li>A sua raiz quadrada é <strong><?=$raiz?></strong></li>
            <li>A sua raiz cúbica é <strong><?=$cubica?></strong></li>
        </ul>
    </section>
</body>

</html>