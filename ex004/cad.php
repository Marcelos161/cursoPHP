<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Resultado</title>
</head>
<body>
    <header>
        <h1>Resultado do Processamento</h1>
    </header>
    <main>
        <?php 
            $nome = $_GET["nome"] ?? "Sem nome";
            $sobrenome = $_GET["sobrenome"] ?? "Desconhecido";

            echo "<p> é um grande prazer te conhecer <strong> $nome $sobrenome! </strong> </p>";
        ?>

        <p><a href="index.html">Voltar para a pagina anterior</a></p>
    </main>
</body>
</html>