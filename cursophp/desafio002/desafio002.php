<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio002</title>
</head>
<body>
    <h1>Gerando números aleatórios</h1>
    <p>gerando um número aleatório entre 0 e 100...</p>
    <?php
        $min = 0;
        $max = 100;
        $res = rand($min, $max);
        echo "O valor gerado foi <strong>$res</strong>";
    ?>
    <br>
    <input type="button" name="$res" value="Gerar valor!">
</body>
</html>