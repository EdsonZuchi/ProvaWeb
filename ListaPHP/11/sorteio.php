<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        $Valor1 = $_GET['valor1']; 
        $Valor2 = $_GET['valor2'];
        $valor = rand($Valor1, $Valor2);
    ?>
    <div class="circulo">
        <?php echo "<h1>$valor</h1>"; ?>
    </div>
</body>
</html>