<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Caixa Eletrônico</title>
    <link rel="stylesheet" href="../../style/style.css">
</head>

<body>
    <main>
        <?php 
        $valor = $_REQUEST['valor']??0;
        ?>
        <h2>Caixa Eletrônico</h2>
        <form action="<?=$_SERVER["PHP_SELF"]?>" method="get">
            <label for="valor">Qual valor você deseja sacar? (R$)* </label>
            <input type="number" value="<?=$valor?>" step="5" required name="valor">
            <p>*Notas disponíveis: R$100, R$50, $10 e R$5</p>
            <input type="submit" value="Sacar">
        </form>
    </main>
    <?php 
    $notaCem = intdiv($valor, 100);
    $resto = $valor % 100;
    $notaCinq = intdiv($resto, 50);
    $resto = $resto % 50;
    $notaDez = intdiv($resto, 10);
    $resto = $resto % 10;
    $notaCinco = intdiv($resto, 5); 
    $resto = $resto % 5;


    ?>
    <section>
        <h2>Saque de R$<?=number_format($valor, 2, ",")?> realizado</h2>
        <p>O caixa eletrônico vai te entregar as seguintes notas: </p>
        <ul>
            <div style="display: flex;">
                <li>R$100</li>
                <li style="margin-left: 30px;"><?=$notaCem?></li>
            </div>
            <div style="display: flex;">
                <li>R$50</li>
                <li style="margin-left: 30px;"><?=$notaCinq?></li>
            </div>
            <div style="display: flex;">
                <li>R$10</li>
                <li style="margin-left: 30px;"><?=$notaDez?></li>
            </div>
            <div style="display: flex;">
                <li>R$5</li>
                <li style="margin-left: 30px;"><?=$notaCinco?></li>
            </div>
        </ul>
    </section>
</body>

</html>