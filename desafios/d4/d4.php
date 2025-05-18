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
            $inicio = date("m-d-Y", strtotime("-7 days"));
            $fim = date("m-d-Y");
            $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''. $inicio .'\'&@dataFinalCotacao=\''. $fim .'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra';

            $dados = json_decode(file_get_contents($url), true);

            $cotacao = $dados["value"][0] ["cotacaoCompra"];
            $vReal = $_REQUEST["valor"] ?? "";
            $vDolar = $vReal / $cotacao;

            echo "Seus R$ ". number_format($vReal, 2, ",", ".") ." equivalem a US$ ". number_format($vDolar, 2, ",", ".") ." ";
            echo "<p><strong>Cotação atual de ". number_format($cotacao, 2, ",", ".")."</strong></p>";

    ?>
        <button onclick="javascript:window.location.href='index.html'">
            Voltar
        </button>
    </main>

</body>

</html>