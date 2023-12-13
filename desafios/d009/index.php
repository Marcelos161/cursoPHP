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
        $primeiroValor = $_GET['valor1'] ?? 0;
        $segundoValor = $_GET['valor2'] ?? 0;
        $pesoPrimeiroValor = $_GET['peso1'] ?? 1;
        $pesoSegundoValor = $_GET['peso2'] ?? 1;
    ?>
    <main>
        <h1>Medias aritmeticas</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="GET">
            <label for="valor1">Primeiro Valor</label>
            <input type="number" name="valor1" value="<?=$primeiroValor?>">
            <label for="peso1">Peso do Primeiro Valor</label>
            <input type="number" name="peso1" value="<?=$pesoPrimeiroValor?>">
            <label for="valor2">Segundo Valor</label>
            <input type="number" name="valor2" value="<?=$segundoValor?>">
            <label for="peso2">Peso do Segundo Valor</label>
            <input type="number" name="peso2" value="<?=$pesoSegundoValor?>">
            <input type="submit" value="Calcular Medias">
        </form>
    </main>
    <section>
        <h2>Calculo das medias</h2>

        <?php 
            $mediaSimples = number_format(($primeiroValor + $segundoValor) / 2, 2, ",", ".");

            $mediaPonderada = number_format(($primeiroValor * $pesoPrimeiroValor + $segundoValor * $pesoSegundoValor) / ($pesoPrimeiroValor + $pesoSegundoValor), 2, ",", ".");

            echo "Analisando os valores de $primeiroValor e $segundoValor: ";

            echo "<ul><li>A <strong>Media Aritimetica Simples</strong> entre os valores é igual a $mediaSimples.</li>";
            echo "<li>A <strong>Media Aritimetica Ponderada</strong> entre os valores é igual a $mediaPonderada.</li></ul>";
        ?>
    </section>
</body>
</html>