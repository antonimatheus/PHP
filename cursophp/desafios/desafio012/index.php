<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Tempo</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        $tempo = $_GET["tempo"] ?? 0;
    ?>

    <main>
        <h1>Calculadora de Tempo</h1>
        <form action="<?=$_SERVER["PHP_SELF"]?>" method="get">
            <label for="tempo">Qual é o total de segundos?</label>
            <input type="number" name="tempo" id="tempo" value="<?=$tempo?>">

            <input type="submit" value="Calcular">
        </form>
    </main>

    <?php
        $semanas = ($tempo / 604800);
        $dias = ($tempo % 604800) / 86400;
        $horas = ($tempo % 86400) / 3600;
        $minutos = ($tempo % 3600) / 60;
        $segundos = ($tempo % 60);

        $semanasF = number_format($semanas, 0);
        $diasF = number_format($dias, 0);
        $horasF = number_format($horas, 0);
        $minutosF = number_format($minutos, 0);
        $segundosF = number_format($segundos, 0);
    ?>
    
    <section>
        <h2>Totalizando tudo</h2>
        <p>Analizando o valor que você digitou, <strong><?=$tempo?> segundos</strong>, equivalem a um total de:</p>
        <ul>
            <li><?=$semanasF?> semanas</li>
            <li><?=$diasF?> dias</li>
            <li><?=$horasF?> horas</li>
            <li><?=$minutosF?> minutos</li>
            <li><?=$segundosF?> segundos</li>
        </ul>
    </section>
</body>
</html>