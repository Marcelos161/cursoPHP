<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Resultado</title>
</head>
<body>
    <section>
    <h1>Resultado Final</h1>
    <?php 
        $numero = $_GET["numero"];
        $antecessor = $numero - 1;
        $sucessor = $numero + 1;

        echo "<p>O numero escolhido foi <strong>$numero</strong></p>";
        echo "<p>O seu <i>antecessor</i> é $antecessor</p>";
        echo "<p>O seu <i>sucessor</i> é $sucessor</p>";
    ?>

    <button><a href="index.html"><- Voltar</a></button>
    </section>
</body>
</html>