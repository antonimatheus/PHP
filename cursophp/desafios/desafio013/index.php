<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Caixa Eletrônico</title>
</head>
<body>
    <main>
        <?php
            $valor = $_GET["valor"] ?? 0;
            $valorFormatado = number_format($valor, 2, ",",".");
        ?>

        <h1>Caixa Eletrônico</h1>
        <form action="<?=$_SERVER["PHP_SELF"]?>" method="get">
            <label for="valor">Qual valor você deseja sacar? (R$)*</label>
            <input type="number" name="valor" id="valor" min="0" step="5" value="<?=$valor?>">

            <p>*notas disponíveis: R$100, R$50, R$10, R$5</p>

            <input type="submit" value="Sacar">
        </form>
    </main>

    <?php
        $cem = (int)($valor / 100);
        $cinquenta = (int)(($valor % 100) / 50);
        $dez = (int)(($valor % 50) / 10);
        $cinco = (int)(($valor % 10) / 5);
    ?>

    <section>
        <h2>Saque de R$<?=$valorFormatado?> realizado</h1>
        <p>O caixa eletrônico vai te entragar as seguintes notas:</p>
        <ul id="notas">
            <li><img src="./media/100_front.jpg" alt="nota" width="130px"> x<?=$cem?></li>
            <li><img src="./media/50_front.jpg" alt="nota" width="130px"> x<?=$cinquenta?></li>
            <li><img src="./media/10_front.jpg" alt="nota" width="130px"> x<?=$dez?></li>
            <li><img src="./media/5_front.jpg" alt="nota" width="130px"> x<?=$cinco?></li>
        </ul>
    </section>
</body>
</html>