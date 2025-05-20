<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Tempo</title>
    <link rel="stylesheet" href="../../style/style.css">
</head>

<body>
    <main>
        <?php 
        $segundos = $_REQUEST["segundos"]??0; 
        ?>
        <h2>
            Calculadora de Tempo
        </h2>
        <form action="<?=$_SERVER["PHP_SELF"]?>" method="get">
            <label for="segundos">Qual é o total em segundos? </label>
            <input type="number" name="segundos" value="<?=$segundos?>">
            <input type="submit" value="Calcular">
        </form>
    </main>
    <?php 
    $semana = intdiv($segundos, 604800);
    $resto = $segundos % 604800;
    $dias = intdiv($resto, 86400);
    $resto = $resto % 86400;
    $horas = intdiv($resto, 3600);
    $resto = $resto % 3600;
    $minutos = intdiv($resto, 60);
    $resto = $resto % 60;
    $segundo_restantes = $resto;

    $segundos = number_format(($segundos), 0, ".", ".");
    ?>
    <section>
        <h2>Totalizando tudo</h2>
        <p>Analisando o valor que você digitou, <strong><?=$segundos?> segundos</strong> equivalem a um total de: </p>
        <ul>
            <li><?=$semana?> semanas</li>
            <li><?=$dias?> dias</li>
            <li><?=$horas?> horas</li>
            <li><?=$minutos?> minutos</li>
            <li><?=$segundo_restantes?> segundos</li>
        </ul>
    </section>
</body>

</html>