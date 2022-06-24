<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php if(!isset($_GET['string'])){ ?>
        <form action="index.php" method="get">
            <input type="text" name="string" id="string">
            <input type="submit" value="Contar">
        </form>
    <?php } else {
        $string = $_GET['string'];
        $cont = strlen($string); 
        $plvr = str_word_count($string);
        $arpl = str_word_count($string, 1);
    ?>
        <h1>O número de caracteres eh <?php echo $cont ?></h1>
        <h1>O número de palavras eh <?php echo $plvr ?></h1>
        <ul>
            <?php for($i =0; $i < $plvr; $i++){
                echo "<li>$arpl[$i]</li>";
            }?>
        </ul>
        <?php } ?>
</body>
</html>