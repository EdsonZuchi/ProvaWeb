<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php if(!isset($_GET['v1'])){ ?>
        <form action="index.php" method="get">
            Valor 1: <input type="number" name="v1" id="v1">
            Valor 2: <input type="number" name="v2" id="v2">
            Valor 3: <input type="number" name="v3" id="v3">
            <input type="submit" value="Verificar">
        </form>
    <?php } else{
        $v1 = $_GET['v1'];
        $v2 = $_GET['v2'];
        $v3 = $_GET['v3'];
        if($v1 == $v2 and $v2 == $v3){
            echo "<h1>Triângulo equilátero</h1>";
        }else if($v1 <> $v2 and $v2 <> $v3 and $v1 <> $v3){
            echo "<h1>Triângulo escaleno</h1>";
        }else{
            echo "<h1>Triângulo isósceles</h1>"; 
        }
    }?>
</body>
</html>