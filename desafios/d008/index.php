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
        $numero = $_GET['numero'] ?? 0;
    ?>
    <main>
        <h1>Informe um Numero</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="GET">
            <label for="numero">Numero</label>
            <input type="number" value="<?=$numero?>" name="numero">
            <input type="submit" value="Calcular Raízes">    
        </form>
    </main>
    <section>
        <h2>Resultado Final</h2>
        <?php 
        $raizQuadrada = number_format(sqrt($numero), 3, ",", ".");
        $raizCubica = number_format(pow($numero, (1/3)), 3, ",", ".");

        echo "<p>Analisando o <strong>numero $numero</strong>, temos:</p>";
        echo "<ul><li>A sua raiz quadrada é <strong>$raizQuadrada</strong></li>";
        echo "<li>A sua raiz Cubica é <strong>$raizCubica</strong></li></ul>";

        ?>
    </section>
</body>
</html>