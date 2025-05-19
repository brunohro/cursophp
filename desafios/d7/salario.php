<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salário mínimo</title>
    <link rel="stylesheet" href="../../style/style.css">
</head>

<body>
    <main>
        <?php 
        $valor = $_REQUEST["salario"]??0;
        $salario = 1518;
        ?>
        <h1>
            Informe Seu salário
        </h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="salario" id="salario">Salário (R$) </label>
            <input type="number" step="any" name="salario" value="<?=$valor?>">
            <p>Considerando o salário mínimo de <strong>R$ 1.518,00</strong></p>
            <input type="submit" value="Calcular">
        </form>
        <?php 
        $quantSalario = intdiv($valor, $salario);
        $valorSalario = $salario * $quantSalario;
        $sobra = $valor - $valorSalario;

        echo $quantSalario . "<br>";
        echo $valorSalario. "<br>";
        echo $sobra. "<br>";
        
        ?>
    </main>
    <section>
        <h2>Resultado final</h2>
        <p>Quem recebe um salário de R$ <?=$valor?> ganha <strong><?=$quantSalario?> salários mínimos </strong> + R$
            <?=$sobra?></p>
    </section>

</body>

</html>