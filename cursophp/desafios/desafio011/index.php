<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Reajustar Preços</title>
</head>
<body>
    <?php 
        $produtoPreco = $_GET['produtoPreco'] ?? 1;
    ?>
    <main>
        <h1>Reajustador de Preços</h1>
        <form action="<?=$_SERVER["PHP_SELF"]?>" method="get">
            <label for="produtoPreco">Preço do Produto (R$)</label>
            <input type="number" name="precoProduto" id="precoProduto" value="<?=$produtoPreco?>">
            <label for="reajuste">Qual será o percentual de reajuste? (...)</label>
            <input type="range" name="reajuste" id="reajuste" min="1" max="100" value="1">

            <button type="submit">Reajustar</button>
        </form>
    </main>

    <section>
        <h2>Resultado do Reajuste</h2>

        <p>O produto que custava R$<?=$produtoPreco?>, <strong>com ...% de aumento</strong> vai passar a custar <strong>R$...</strong> a partir de agora.</p>
    </section>
</body>
</html>