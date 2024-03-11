<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anatomia de uma Divisão</title>
</head>
<body>
    <?php 
        $dividendo = $_GET['n1'] ?? 0;
        $divisor = $_GET['n2'] ?? 0;
    ?>

    <main>
        <h1>Anatomia de uma Divisão</h1>

            <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
                <label for="n1">Dividendo</label>
                <input type="number" name="n1" id="n1" value="<?=$dividendo?>">
                <label for="n2">Divisor</label>
                <input type="number" name="n2" id="n2" value="<?=$divisor?>">
                <input type="submit" value="Enviar">
            </form>
    </main>

    <?php 
        $resInteiro = $dividendo / $divisor;
        $resSobra = $dividendo % $divisor;

        echo "A divisão entre $dividendo e $divisor é de $resInteiro e resto $resSobra";
    ?>
</body>
</html>