<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Desafio PHP</title>
</head>
<body>
    <section>
        <h1>Analisador de Número Real</h1>
        <?php 
            setlocale(LC_ALL, 'pt_BR.utf-8',);
            $numero = number_format($_GET["numero"], 3, ",", ".");

            $inteiro = explode(',', $numero);
            

            echo "Analisando o número <strong>$numero</strong> informado pelo usuario:";

            echo "<li>A parte inteira do numero é <strong>$inteiro[0]</strong></li>";
            echo "<li>A parte fracionaria do numero é <strong>0,$inteiro[1]</strong></li>"
        ?>

        <input type="button" value="Voltar" onclick="history.back()">
    </section>
</body>
</html>