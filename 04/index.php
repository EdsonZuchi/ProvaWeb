<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        if(!isset($_GET['number'])){
            ?>
            <div class="form">
                <form action="index.php" method="get">
                    <input type="number" name="number" id="number">
                    <input type="submit" value="Enviar">
                </form>
            </div>
            <?php
        }else{
            $red = rand (0,255);
            $green = rand (0,255);
            $blue = rand (0,255);
            $number = $_GET["number"];
            if($number == 0){
                $msg = "igual a zero"; 
            }else if($number > 0){
                $msg = "positivo"; 
            }else{
                $msg = "nagativo"; 
            }
            ?>
            <div class="result" style="border: 5px solid rgb(<?php echo "$red,$green,$blue" ?>");">
                <?php
                    echo "<p>$number</p>";
                    echo "<p>$msg</p>";
                ?>
            </div>
            <?php
        }
    ?> 
</body>
</html>