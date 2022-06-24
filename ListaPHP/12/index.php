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
    <?php if(!isset($_GET['peso'])){ ?>
        <form action="index.php" method="get">
        <fieldset>
            Sua massa em Kg <input type="number" name="peso" id="peso">
            Sua altura em cm <input type="number" name="altura" id="altura">
            <input type="submit" value="Ver IMC">
        </fieldset>
        </form>
        <div class="background"></div>
    <?php } else{
        $peso = $_GET['peso'];
        $altura = $_GET['altura'];
        $imc = $peso/(($altura/100)*($altura/100)); 
        
        if($imc < 18.5){
            $img = "abaixopeso.png"; 
            $msg = "abaixo do peso";
        }else if($imc < 25){
            $img = "normal.png"; 
            $msg = "IMC dentro da média";
        }else if($imc < 30){
            $img = "sobrepeso.png"; 
            $msg = "sobrepeso";
        }else if($imc < 35){
            $img = "obesidade1.png"; 
            $msg = "Obesidade 1";
        }else{
            $img = "obesidade2.png"; 
            $msg = "Obesidade 2";
        }
        ?>
        <form action="index.php" method="get">
        <fieldset>
            Sua massa em Kg <input type="number" name="peso" id="peso" value="<?php echo $peso ?>">
            Sua altura em Cm <input type="number" name="altura" id="altura" value="<?php echo $altura ?>">
            <input type="submit" value="Ver IMC">
        </fieldset>
        </form>
        <div class="img_result" style="background-image: url(img/<?php echo $img ?>);"></div>
        <div class="result">
            <?php echo "<h1> $msg </h1>"; ?>
        </div>
    <?php } ?>
</body>
</html>