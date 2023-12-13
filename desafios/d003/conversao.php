<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Desafio PHP</title>
</head>
<body>
<main>
    <h1>Conversor de Moedas v1.0</h1>
    <?php 
        setlocale(LC_ALL, 'pt_BR.utf-8',);

        $reais = $_GET["reais"];
        const COTACAO_DOLAR = 5.05;

        $dolar = $reais / COTACAO_DOLAR;

        printf("Seus R\$ %.2f\n  equivalem a <strong>US\$ %.2f\n</strong> ", $reais, $dolar) ;
        
        echo "<br> <strong>*Cotaçao fixa de R\$ 5,05</strong> informada diretamente no codigo";
    ?>

    <input type="button" value="Voltar" onclick="history.back()">
    </main>
</body>
</html>