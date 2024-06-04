<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anatomia de uma Divisão</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $dividendo = $_GET['n1'] ?? 0;
        $divisor = $_GET['n2'] ?? 1;
    ?>
    <main>
        <h1>Anatomia de uma Divisão</h1>

            <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
                <label for="n1">Dividendo</label>
                <input type="number" name="n1" id="n1" min="0" value="<?=$dividendo?>">
                <label for="n2">Divisor</label>
                <input type="number" name="n2" id="n2" min="1" value="<?=$divisor?>">
                <input type="submit" value="Enviar">
            </form>
    </main>
    <section>

    <h2>Estrutura da divisão</h2>

        <?php
            $resInteiro = (int) ($dividendo / $divisor);
            $resSobra = $dividendo % $divisor;

            /*
            echo "A divisão entre $dividendo e $divisor: 
            <li>
                resultado: 
                <strong>" . $resInteiro ."
                </li>
                </strong><li>resto: 
                <strong>$resSobra</strong>
            </li>";
            */
        ?>

        <table class="divisao">
            <tr>
                <td><?=$dividendo?></td>
                <td><?=$divisor?></td>
            </tr>
            <tr>
                <td><?=$resSobra?></td>
                <td><?=$resInteiro?></td>
            </tr>
        </table>
    </section>
</body>
</html>