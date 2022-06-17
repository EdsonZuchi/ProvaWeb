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
        session_start(); 
        $NumSorteado = rand(1, 30);   
        if(isset($Valor)){
            $_SESSION['SeArray'] = array(0,0,0);
            $Valor = array(0,0,0);
        }
        $Valor = $_SESSION['SeArray']; 
    ?>
    <div class="button">
        <a href="index.php">
            <button id="resetButton">
                <div class="circulo">
                    <h1><?php echo $NumSorteado ?></h1>
                <?php
                    $_SESSION['SeArray'][2] = $_SESSION['SeArray'][1]; 
                    $_SESSION['SeArray'][1] = $_SESSION['SeArray'][0];
                    $_SESSION['SeArray'][0] = $NumSorteado;
                ?>
                </div>
            </button>
        </a>  
    </div>
    <div class="array">
    <?php   
        for($i = 0; $i <3; $i++){ 
            if($i == 0){
                echo "<h2 class=\"info\" style=\"background-color: cadetblue\">".$Valor[$i]."</h2>";
            }else{
                echo "<h2 class=\"info\">".$Valor[$i]."</h2>";
            }
        } 
    ?>
    </div>    
</body> 
</html>