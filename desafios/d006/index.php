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
        //Capturando os dados do formulario retroalimentado

        $dividendo = $_GET['dividendo'] ?? 0;
        $divisor = $_GET['divisor'] ?? 1;
    ?>
    <main>
        <h1>Anatomia de uma Divisao</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="GET">
            <label for="dividendo">Dividendo</label>
            <input type="number" name="dividendo" id="dividendo" value="<?=$dividendo?>">
            <label for="divisor">Divisor</label>
            <input type="number" name="divisor" id="divisor" value="<?=$divisor?>">
            <input type="submit" value="Analisar">
        </form>
    </main>

    <section id="resultado">
        <h2>Estrutura da Divisao</h2>

        <?php 
            $resultado = $dividendo/$divisor;
            $resto = $dividendo % $divisor;
            $resultadoInt = (int)$resultado;

            echo "        <table class=\"divisao\">
            <tr>
                <td>$dividendo</td>
                <td>$divisor</td>
            </tr>
            <tr>
                <td>$resto</td>
                <td>$resultadoInt</td>
            </tr>
        </table>"
        ?>
    </section>
</body>
</html>