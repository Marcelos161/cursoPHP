<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Desafio PHP</title>
</head>
<body>
    <section>
        <h1>Trabalhando com números aleatorios</h1>

        <p>Gerando um numero aleatorio entre 0 e 100...</p>
        <?php 
            $numeroAleatorio = rand(0, 100);

            echo "O valor gerado foi <strong>$numeroAleatorio</strong>";
        ?>

        <input type="button" value="Gerar outro" onclick="window.location.reload()">
    </section>
</body>
</html>