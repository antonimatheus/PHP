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
            <input type="number" name="valor" id="valor" min="0" value="<?=$valor?>">

            <p>*notas disponíveis: R$100, R$50, R$20, R$10, R$5, R$2, R$1</p>

            <input type="submit" value="Sacar">
        </form>
    </main>

    <?php
        // Calcula a quantidade de cada nota
            $cem = (int)($valor / 100);
            $valor %= 100;

            $cinquenta = (int)($valor / 50);
            $valor %= 50;

            $vinte = (int)($valor / 20);
            $valor %= 20;

            $dez = (int)($valor / 10);
            $valor %= 10;

            $cinco = (int)($valor / 5);
            $valor %= 5;

            $dois = (int)($valor / 2);
            $valor %= 2;

            $um = $valor; // O que sobrar é de R$1
    ?>

    <section>
        <h2>Saque de R$<?=$valorFormatado?> realizado</h2>
        <p>O caixa eletrônico vai te entragar as seguintes notas:</p>
        <ul id="notas">
            <li><img src="./media/100_front.jpg" alt="nota" width="130px"> x<?=$cem?></li>
            <li><img src="./media/50_front.jpg" alt="nota" width="130px"> x<?=$cinquenta?></li>
            <li><img src="./media/20_front.jpg" alt="nota" width="130px"> x<?=$vinte?></li>
            <li><img src="./media/10_front.jpg" alt="nota" width="130px"> x<?=$dez?></li>
            <li><img src="./media/5_front.jpg" alt="nota" width="130px"> x<?=$cinco?></li>
            <li><img src="./media/2_front.jpg" alt="nota" width="130px"> x<?=$dois?></li>
            <li><img src="./media/1-real.jpg" alt="nota" width="80px"> x<?=$um?></li>
        </ul>
    </section>
</body>
</html>