<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado conversor de moeda</title>
</head>
<body>
    <h1>Conversor de Moedas</h1>;
    <?php 
        $cash = $_GET['money'] ?? 0;
        $padrão = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
        echo "Seus " . numfmt_format_currency($padrão, $cash, "BRL") . " equivalem a " . numfmt_format_currency($padrão, $cash/5, "USD");
    ?>
    <button><a href="./index.html">Voltar</a></button>;
</body>
</html>