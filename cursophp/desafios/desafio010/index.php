<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Máquina do tempo</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $anoAtual = date("Y");

        $nasc = $_GET['nasc'] ?? 0;
        $anoIdade = $_GET['anoIdade'] ?? $anoAtual;
    ?>
    <main>
        <h1>Calculando a sua idade</h1>
        <form action="<?=$_SERVER["PHP_SELF"]?>" method="get">
            <label for="nasc">Em que ano você nasceu?</label>
            <input type="number" name="nasc" value="<?=$nasc?>" max="<?=$anoAtual?>" id="nasc">
            <label for="anoIdade">Quer saber sua idade em que ano? (Atualmente estamos em <strong><?=$anoAtual?></strong>)</label>
            <input type="number" name="anoIdade" value="<?=$anoIdade?>" min="1" id="anoIdade">
            
            <input type="submit" value="Qual será minha idade?">
        </form>

        <?php 
            $calculoIdade = ($anoIdade - $nasc);
        ?>

        <section>
            <h2>Resultado</h2>
            <?= $anoIdade < $nasc ? 
            "<p><strong>Err0!</strong> Ano de nascimento <i>($nasc)</i> não pode ser maior que o ano <i>($anoIdade)</i>!</p>" : 
            "<p>Quem nasceu em $nasc terá <strong>$calculoIdade</strong> " . ($calculoIdade <= 1 ? "ano" : "anos") . " em $anoIdade !</p>"?>
        </section>
    </main>
</body>
</html>