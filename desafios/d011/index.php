<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Exercicio PHP</title>
</head>
<body>
    <?php 
        $precoProduto = $_GET['precoProduto'] ?? 0;
        $percentual = $_GET['percentual'] ?? 50;
    ?>
    <main>
        <h1>Reajustador de Preços</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="precoProduto">Preço do Produto(R$)</label>
            <input type="number" step="any" name="precoProduto" value="<?=$precoProduto?>">
            <label for="percentual" id="labelPercentual">Qual sera o percentual do reajuste? <strong id="valorPercentual"></strong></label>
            <input type="range" name="percentual" id="percentual" value="<?=$percentual?>">
            <input type="submit" value="Reajustar">
        </form>
    </main>
    <section>
        <h2>Resultado do Reajuste</h2>
        <?php 
            $novoValor = $precoProduto * ($percentual/100) + $precoProduto;
            $precoProduto = number_format($precoProduto, 2, ",", "." );
        
            echo "<p>O produto que custava R$$precoProduto, com $percentual% de aumento vai passar a custar R$$novoValor a partir de agora.</p>"
        ?>
    </section>
    <script src="./script.js"></script>
</body>
</html>