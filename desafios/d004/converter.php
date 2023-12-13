<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Desafio PHP</title>
</head>
<body>
    <section>
        <h1>Conversor de Moedas v2.0</h1>
        <?php 
            date_default_timezone_set ("America/Sao_Paulo"); 

            $carteira = $_GET["carteira"];
            $dataInicio = date('m-d-Y');
            $dataFinal = date('m-d-Y', time() + 86400);

            // isso aqui em baixo faz a requisiçao e trata o a resposta dela e json
            $apiUrl = "https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial='$dataInicio'&@dataFinalCotacao='$dataFinal'&\$top=100&\$format=json&\$select=cotacaoVenda";
            $response = file_get_contents($apiUrl);
            $data = json_decode($response, true);
            $cotacaoAtual =  $data['value'][0]['cotacaoVenda'];

            $dolar = $carteira / $cotacaoAtual;

            printf("Seus R\$ %.2f\n  equivalem a <strong>US\$ %.2f\n</strong>", $carteira, $dolar);
            echo "<p>*Cotação obtida diretamente do site do <a href=\"https://www.bcb.gov.br/\">Banco Central do Brasil</a></p>"
        ?>
    </section>
</body>
</html>