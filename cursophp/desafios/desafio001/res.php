<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resolução Desadfio 001</title>
</head>
<body>
    <h1>Resultado final</h1>
    <?php 
        $number = $_GET["number"];
        $antecessor = $number - 1;
        $sucessor = $number + 1;
        echo "<p>O número escolhido foi <strong>$number</strong></p>";
        echo "<p>O antecessor é <strong>$antecessor</strong></p>";
        echo "<p>O sucessor é <strong>$sucessor</strong></p>";
    ?>
    <a href="./index.html">Voltar</a>
</body>
</html>