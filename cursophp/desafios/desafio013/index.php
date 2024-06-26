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
        ?>

        <h1>Caixa Eletrônico</h1>
        <form action="<?=$_SERVER["PHP_SELF"]?>" method="get">
            <label for="valor">Qual valor você deseja sacar? (R$)*</label>
            <input type="number" name="valor" id="valor" min="0" step="5" value="<?=$valor?>">

            <p>*notas disponíveis: R$100, R$50, R$10, R$5</p>

            <input type="submit" value="Sacar">
        </form>
    </main>

    <section>
        <h2>Saque de R$<?=$valor?> realizado</h1>
        <p>O caixa eletrônico vai te entragar as seguintes notas:</p>
        <ul>
            <li>100: ...</li>
            <li>50: ...</li>
            <li>10: ...</li>
            <li>5: ...</li>
        </ul>
    </section>
</body>
</html>