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
            <input type="number" name="tempo" id="tempo" min="0" value="<?=$tempo?>">

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
        <p>Analizando o valor que você digitou, <strong><?=$tempo?> <?=$tempo <= 1 ? "segundo" : "segundos"?></strong>, equivalem a um total de:</p>
        <ul>
            <li><?=$semanasF?> <?=$semanasF <= 1 ? "semana" : "semanas"?></li>
            <li><?=$diasF?> <?=$diasF <= 1 ? "dia" : "dias"?></li>
            <li><?=$horasF?> <?=$horasF <= 1 ? "hora" : "horas"?></li>
            <li><?=$minutosF?> <?=$minutosF <= 1 ? "minuto" : "minutos"?></li>
            <li><?=$segundosF?> <?=$segundosF <= 1 ? "segundo" : "segundos"?></li>
        </ul>
    </section>
</body>
</html>