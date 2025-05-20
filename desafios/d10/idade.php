<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculando Idade</title>
    <link rel="stylesheet" href="../../style/style.css">
</head>

<body>
    <main>
        <?php 
        $anoNasc = $_REQUEST["anoNasc"]??0;
        $anoAtual = $_REQUEST["ano"]??date("Y");
        ?>
        <h2>Calculando a sua idade</h2>
        <form action="" method="get">
            <label for="anoNasc">Em que ano você nasceu ?</label>
            <input type="number" name="anoNasc" value="<?=$anoNasc?>">
            <label for="ano">Quer saber sua idade em que ano ? (atualmente estamos em
                <?="<strong>$anoAtual</strong>"?>)</label>
            <input type="number" name="ano" value="<?=$anoAtual?>">
            <input type="submit" value="Qual será minha idade ?">
        </form>
    </main>
    <?php 
    $idade = $anoAtual - $anoNasc;
    ?>
    <section>
        <h2>Resultado</h2>
        <p>Quam nasceu em <?=$anoNasc?> vai ter <strong><?=$idade?> anos</strong> em <?=$anoAtual?>!</p>
    </section>
</body>

</html>