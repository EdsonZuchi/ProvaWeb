<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <?php 
for ($i = 65; $i < 91; $i++){
    $red = rand(0,255);
    $green = rand(0,255);
    $blue = rand(0,255);
  ?>

<div class="cont" style="background-color: rgb(<?php echo "$red,$green,$blue" ?>");>
<?php echo chr ($i); ?>    
</div>

<?php } ?>      


</body>
</html>