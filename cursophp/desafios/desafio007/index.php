<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salário minímo</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $valor = $_GET['valor'] ?? 0;
    ?>
    <main>
        <h1>Informe o seu salário</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="valor">Salário (R$)</label>
            <input type="number" name="valor" id="valor" min="0" value="<?=$valor?>">
            <p>Considerando o salário minímo de R$1.412,00</p>
            <button type="submit">Calcular</button>
        </form>
    </main>

    <?php 
        $valorDoSalárioMinímo = 1412;
        $salarioMin = (int)($valor / $valorDoSalárioMinímo);
        if($salarioMin < $valorDoSalárioMinímo) {
            $salarioResto = ($valor % $valorDoSalárioMinímo);
            //echo "$salarioResto";
        };

        $valorFormatado = number_format($valor, 2, ",", ".");
        //$salarioMinFormatado = number_format($salarioMin, 2, ",", ".");
        $salarioRestoFormatado = number_format($salarioResto, 2, ",", ".");
    ?>

    <section>
        <h2>Resultado Final</h2>
        <p>
            Quem recebe um salário de <?=$valorFormatado?> ganha 
            <strong>
                <?=$salarioMin?>
                <?php echo $salarioMin == 0 || $salarioMin == 1 ? "salário minímo" : "salários minímos"; ?>
            </strong> 
        </p>
        + R$ <?=$salarioRestoFormatado?></p>
    </section>
</body>
</html>