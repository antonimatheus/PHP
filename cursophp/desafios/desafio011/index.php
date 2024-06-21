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
        $produtoPreco = $_GET['produtoPreco'] ?? 0;
        $reajuste = $_GET['reajuste'] ?? 0;
    ?>

    <main>
        <h1>Reajustador de Preços</h1>
        <form action="<?=$_SERVER["PHP_SELF"]?>" method="get">
            <label for="produtoPreco">Preço do Produto (R$)</label>
            <input type="number" name="produtoPreco" id="produtoPreco" value="<?=$produtoPreco?>">

            <label for="reajuste">Qual será o percentual de reajuste? (<strong><span id="reajuste-value"></span>%</strong>)</label>
            <input type="range" name="reajuste" id="reajuste" min="0" max="100" value="<?=$reajuste?>">

            <button type="submit">Reajustar</button>
        </form>
    </main>

    <?php 
        $aumento = ($reajuste / 100) * $produtoPreco;
        $total = $produtoPreco + $aumento;
    ?>

    <section>
        <h2>Resultado do Reajuste</h2>
        <p>O produto que custava R$<?=$produtoPreco?>, <strong>com <?=$reajuste?>% de aumento</strong> vai passar a custar <strong>R$<?=$total?></strong> a partir de agora.</p>
    </section>

    <script>
        const rangeInput = document.getElementById('reajuste');
        const rangeValue = document.getElementById('reajuste-value');

        // Atualiza o valor inicial
        rangeValue.textContent = rangeInput.value;

        // Atualiza o valor em tempo real
        rangeInput.addEventListener('input', function() {
            rangeValue.textContent = this.value;
        });
    </script>
</body>
</html>
