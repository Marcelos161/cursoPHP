<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos primitivos em PHP</title>
</head>
<body>
    <h1>Teste de tipos primitivos</h1>
    <?php 
        // $num = 0x1A;
        // echo "O valor da variavel é $num";

        // $v = 45.2;
        // var_dump($v);

        // $num = 3e2;
        // var_dump($num);

        // $num = "950";
        // var_dump($num);

        // $vet = [6, 2, 7, 8];
        // var_dump($vet);

        class Pessoa {
            private string $nome = "marcelo";
            private int $idade = 58;

        }

        $p = new Pessoa;
        var_dump($p);
    ?>
</body>
</html>