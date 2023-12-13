<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <?php 
        $totalSegundos = $_GET['totalSegundos'] ?? 0;
    ?>
    <main>
        <h1>Calculadora de Tempo</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="GET">
            <label for="totalSegundos">Qual é o total em segundos?</label>
            <input type="number" name="totalSegundos" value="<?=$totalSegundos?>">
            <input type="submit" value="Calcular">
        </form>
    </main>
    <section>
        <h2>Totalizando Tudo</h2>
        <?php 
            $semanas = intval($totalSegundos / 604800);
            $dias = intval($totalSegundos % 604800  / 86400);
            $horas = intval($totalSegundos %  86400/ 3600);
            $minutos = intval($totalSegundos % 3600 / 60);
            $segundos = intval($totalSegundos % 60);
            $totalSegundos = number_format($totalSegundos, 0, ".", ".");


            echo "<p>Analisando o valor que voce digitou, <strong>$totalSegundos segundos</strong> equivalem a um total de:</p>";
            echo "<ul><li>$semanas semanas</li><li>$dias semanas</li><li>$horas semanas</li><li>$minutos semanas</li><li>$segundos semanas</li></ul>"
        ?>
    </section>
</body>
</html>