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
     $salario = $_GET['salario'] ?? 0;
    ?>
    <main>
     <h1>Informe seu salario</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="$_GET">
            <label for="salario">Salario (R$)</label>
            <input type="number" step="any" name="salario" value="<?=$salario?>">
            <p>Considerando o salario minimo de <strong>R$1.380,00</strong></p>
            <input type="submit" value="Calcular">
        </form>
    </main>
    <section>
        <h2>Resultado Final</h2>
        <?php 
            const SALARIO_MINIMO = 1380.00;

            $numerosDeSalariosMinimos = $salario / SALARIO_MINIMO;
            $numerosDeSalariosMinimos = (int)$numerosDeSalariosMinimos;

            $restoDoSalario = $salario - SALARIO_MINIMO * $numerosDeSalariosMinimos ;

            $salario = number_format($salario, 2, ",", ".");
            $restoDoSalario = number_format($restoDoSalario, 2, ",", ".");

            echo "<p>Quem recebe um salario de R\$$salario ganha <strong> $numerosDeSalariosMinimos salarios minimos + R$ $restoDoSalario </strong></p>"
        ?>
    </section>
</body>
</html>