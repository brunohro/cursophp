<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Médias Aritméticas</title>
    <link rel="stylesheet" href="../../style/style.css">
</head>

<body>
    <main>
        <?php 
        $notaUm = $_REQUEST["notaUm"]??0;
        $notaDois = $_REQUEST["notaDois"]??0;
        $pesoUm = $_REQUEST["PesoUm"]??1;
        $pesoDois = $_REQUEST["pesoDois"]??1;
        ?>
        <h2>Médias Aritiméticas</h2>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="notaUm">1° Valor</label>
            <input type="number" name="notaUm" value="<?=$notaUm?>">
            <label for="pesoUm">1° Peso</label>
            <input type="number" name="pesoUm" value="<?=$pesoUm?>">
            <label for="notaDois">2° Valor</label>
            <input type="number" name="notaDois" value="<?=$notaDois?>">
            <label for="pesoDois">2° Peso</label>
            <input type="number" name="pesoDois" value="<?=$pesoDois?>">
            <input type="submit" value="Calcular Médias">
        </form>
    </main>
    <?php 
    $mediaSimples = number_format((($notaUm + $notaDois) / 2), 2, ',', '');
    $notaUmComPeso = $notaUm * $pesoUm;
    $notaDoisComPeso = $notaDois * $pesoDois;

    $somaNotas = $notaUmComPeso + $notaDoisComPeso;
    $somaPesos = $pesoUm + $pesoDois;

    $mediaFinal = number_format(($somaNotas / $somaPesos), 2, ',', '');
    ?>
    <section>
        <h2>
            Cálculo das Médias
        </h2>
        <p>Analisando os valores <?=$notaUm?> e <?=$notaDois?>:</p>
        <ul>
            <li><strong>A Média Aritmética Simples</strong> entre os valores é igual a <?=$mediaSimples?></li>
            <li><strong>A Média Aritmética Ponderada</strong> com pesos <?=$pesoUm?> e <?=$pesoDois?> é igual a
                <?=$mediaFinal?></li>
        </ul>
    </section>

</body>

</html>