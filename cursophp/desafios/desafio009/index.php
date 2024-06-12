<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Médias Aritméticas</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
    $primeiroValor = $_GET['primeiroValor'] ?? 0; 
    $primeiroPeso = $_GET['primeiroPeso'] ?? 1;
    $segundoValor = $_GET['segundoValor'] ?? 0;
    $segundoPeso = $_GET['segundoPeso'] ?? 1;

    ?>
    <main>
        <h1>Médias Aritméticas</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="primeiroValor">1º valor</label>
            <input type="number" name="primeiroValor" value="<?=$primeiroValor?>" min="1" id="primeiroValor">
            <label for="primeiroPeso">1º valor</label>
            <input type="number" name="primeiroPeso" value="<?=$primeiroPeso?>" min="1" id="primeiroPeso">
            <label for="segundoValor">1º valor</label>
            <input type="number" name="segundoValor" value="<?=$segundoValor?>" min="1" id="segundoValor">
            <label for="segundoPeso">1º valor</label>
            <input type="number" name="segundoPeso" value="<?=$segundoPeso?>" min="1" id="segundoPeso">

            <button type="submit">Calcular Médias</button>
        </form>
    </main>

    <?php 
    $mSimples = ($primeiroValor + $segundoValor) / 2; //Dividido por dois porque temos somente 2 valores
    $mPonderada = (($primeiroPeso * $primeiroValor) + ($segundoPeso * $segundoValor)) / ($primeiroPeso + $segundoPeso);

    $mSimplesFormatado = number_format($mSimples, 2, ",", ".");
    $mPonderadaFormatado = number_format($mPonderada, 2, ",", ".");
    ?>

    <section>
        <h2>Cáuculo das Médias</h2>
        <p>Analizando os valores <?=$primeiroValor?> e <?=$segundoValor?>:</p>
        <ul>
            <li>A <strong>Média Aritmética Simples</strong> entre os valores é igual a <?=$mSimplesFormatado?>.</li>
            <li>A <strong>Média Aritmética Ponderada</strong> com pesos <?=$primeiroPeso?> e <?=$segundoPeso?> é igual a <?=$mPonderadaFormatado?>.</li>
        </ul>
    </section>
</body>
</html>