<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        $numero = $_GET['numero'] ?? 0;
    ?>
    <main>
        <h1>Informe um número</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="numero">Número:</label>
            <input type="number" name="numero" value="<?=$numero?>" id="numero">
            <input type="submit" value="Executar Raízes">
        </form>
    </main>

    <?php 
        $raizQuadrada = sqrt($numero);
        $raizCubica = $numero ** (1/3);
        
        $raizQuadradaFormatada = number_format($raizQuadrada, 3, ",", ".");
        $raizCubicaFormatada = number_format($raizCubica, 3, ",", ".");
    ?>

    <section>
        <h2>Resultado final</h2>
        <p>Analizando o número <strong><?=$numero?></strong>, temos:</p>
        <ul>
            <li>A sua raíz quadrada é <strong><?=$raizQuadradaFormatada?></strong></li>
            <li>A sua raíz cúbica é <strong><?=$raizCubicaFormatada?></strong></li>
        </ul>
    </section>
</body>
</html>