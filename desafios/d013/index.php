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
        $valor = $_GET['valor'] ?? 0;
        $QtNota100 = 0;
        $QtNota50 = 0;
        $QtNota10 = 0;
        $QtNota5 = 0;
    ?>
    <main>
        <h1>Calculadora de Tempo</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="GET">
            <label for="valor">Qual valor voce deseja sacar? (R$) *</label>
            <input type="number" name="valor" value="<?=$valor?>">
            <input type="submit" value="Sacar">
        </form>
    </main>
    <section>

        <?php 
            $valor = number_format($valor, 2, ",", ".");
            echo "<h2>Saque de R$$valor Realizado</h2>";

            echo "O caixa eletronico vai te entrega as seguintes notas:";

            echo "<ul>
            <li>nota de 100 x$QtNota100</li>
            <li>nota de 50 x$QtNota50</li>
            <li>nota de 10 x$QtNota10</li>
            <li>nota de 5 x$QtNota5</li>
            </ul>"
        ?>
    </section>
</body>
</html>