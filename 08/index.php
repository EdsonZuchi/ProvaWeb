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
        for($i = 0; $i < 10; $i++){
            $array[$i] = rand(1,10); 
        }
    ?>
    <h1>Array Desordenado</h1>
    <div class="array">
        <?php
        for($i = 0; $i < 10; $i++){
            ?>
            <h2><?php echo $array[$i] ?></h2>
            <?php
        }
        ?>
    </div>
    <?php
        sort($array, SORT_NUMERIC); 
    ?>
    <h1>Array Ordenado</h1>
    <div class="array">
        <?php
        for($i = 0; $i < 10; $i++){
            ?>
            <h2><?php echo $array[$i] ?></h2>
            <?php
        }
        ?>
    </div>
</body>
</html>