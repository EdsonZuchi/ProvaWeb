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
    <div class="array">
        <?php
        for($i = 0; $i < 10; $i++){
            ?>
            <h1><?php echo $array[$i] ?></h1>
            <?php
        }
        ?>
    </div>
</body>
</html>