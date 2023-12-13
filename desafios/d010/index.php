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
        $ano = $_GET['ano'] ?? date('Y');
        $nascimento = $_GET['nascimento'] ?? 1900;
    ?>

    <main>
        <h1>Calculando a sua Idade</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>">
            <label for="nascimento">Em que ano voce nasceu?</label>
            <input type="number" name="nascimento" value="<?=$nascimento?>">
            <label for="ano">Quer saber sua idade em que ano?(atualmente estamos em <strong><?=$ano?></strong>)</label>
            <input type="number" name="ano" value="<?=$ano?>">
            <input type="submit" value="Qual será minha idade?">
        </form>
    </main>
    <section>
        <h2>Resultado</h2>

        <?php 
            $idade = $ano - $nascimento;

            echo "Quem nasceu em $nascimento vai ter <strong>$idade anos</strong> em $ano!";
        ?>
    </section>
</body>
</html>