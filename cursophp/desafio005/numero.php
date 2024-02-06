<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <main>
        <h1>Resultado</h1>
        <?php 
            $num = $_POST["n"] ?? 0;

            echo "<p>Analisando o número <strong>" . number_format($num, 3, ",", ".") . "</strong> informado pelo usúario:</p>";

            $int = (int)$num;
            $fra = $num - $int;

            echo "<ul><li>O seu número inteiro é <strong>". number_format($int, 0, ",", ".") ."</strong></li>";
            echo "<li>O seu número fracionado é <strong>". number_format($fra, 3, ",", ".") ."</strong></ul></li>";

            ?>
            <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
</body>
</html>