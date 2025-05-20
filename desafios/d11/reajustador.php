<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reajustador de preços</title>
    <link rel="stylesheet" href="../../style/style.css">
</head>

<body>
    <main>
        <?php 
        $precoProduto = $_REQUEST["precoProduto"]??0;
        $percentual = $_REQUEST["percentual"]??0;
        ?>
        <h2>Reajustador de preços</h2>
        <form action="<?=$_SERVER["PHP_SELF"]?>" method="get">
            <label for="precoProduto">Preço do Produto (R$)</label>
            <input type="number" step="any" name="precoProduto" value="<?=$precoProduto?>">
            <label for="percentual">Qual será o percentual de reajuste? <?=$percentual?></label>
            <input type="number" name="percentual" value="<?=$percentual?>">
            <input type="radio" name="percentual" value="<?=$percentual?>">
            <input type="submit" value="Reajustar">
        </form>
    </main>
    <?php 
    $novoValor = number_format(($precoProduto + ($precoProduto * ($percentual/100))), 2, ",", ".");
    $precoProduto = number_format(($precoProduto), 2, ",", ".");
    
    ?>
    <section>
        <h2>Resultado do Reajuste</h2>
        <p>O produto que custava R$<?=$precoProduto?>, com <strong><?=$percentual?>% de aumento</strong> vai passar a
            custar <strong><?=$novoValor?></strong> a partir de agora</p>
    </section>
</body>

</html>