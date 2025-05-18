<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="../../ex004/style.css" />
</head>

<body>
    <main>
        <h1>Conversor de Moedas v1.0</h1>
        <?php 
        $dReal = $_REQUEST["valor"] ?? "";
        $dDolar = $dReal / 5.66;
        
        echo "Seus R$ ". number_format($dReal, 2, ",", ".") ." equivalem a US$ ". number_format($dDolar, 2, ",", ".") ." ";
        ?>
        <p><strong>Cotação fixa de R$5,66</strong></p>

        <button onclick="javascript:window.location.href='index.html'">
            Voltar
        </button>
    </main>
</body>

</html>