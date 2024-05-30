<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Enviado com sucesso</h1>
    <?php 
        $name = $_GET["name"] ?? "sem nome";
        $lastname = $_GET["lastName"] ?? "desconhecido";
        echo "<h4>It´s a pleasure to meet you, $name $lastname</h4>"
    ?>
</body>
</html>