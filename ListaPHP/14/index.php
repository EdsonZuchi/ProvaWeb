<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if(!isset($_GET['farenheit'])){?>
            <form action="index.php" method="get">
                <input type="number" name="farenheit" id="farenheit">
                <input type="submit" value="Ver em temperatura em celsius">
            </form>
        <?php } else{
            $farenheit = $_GET['farenheit'];
            $celsius = round(5*($farenheit-32)/9);
            echo "<p> A temperatura em celsius eh $celsius </p>";
        }
    ?>
</body>
</html>