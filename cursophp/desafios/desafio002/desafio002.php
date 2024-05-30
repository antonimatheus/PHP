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
        $max = 3;
        $res = rand($min, $max);
        echo "O valor gerado foi <strong>$res</strong>";

        while($res === 1) {
            echo"Parabéns pela sorte grande";
            break;
        }
    ?>
    <br>
    <button onclick="javascript:document.location.reload()">&#x1F504; Gerar outro</button>
</body>
</html>