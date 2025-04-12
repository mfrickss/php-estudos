<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <header>
        <div class="container">
            <div class="logo">

            </div><!--Logo-->
            <nav class="menu-nav">
                <ul>
                    <a href=""></a>
                    <li><a href="">INICIO</a></li>
                    <li><a href="">INICIO</a></li>
                    <li><a href="">INICIO</a></li>
                    <li><a href="">JOGOS</a></li>
                    <li><a href="">LOGIN</a></li>
                </ul>
            </nav>
        </div><!--Fim container-->
    </header>

    <form action="math.php" method="post">
        <label for="">x:</label>
        <input type="text" name="x"><br>
        <label for="">y:</label>
        <input type="text" name="y"><br>
        <label for="">z:</label>
        <input type="text" name="z"><br>
        <input type="submit" value="total">
    </form>
</body>
</html>

<?php

    $x = $_POST["x"];
    $y = $_POST["y"];
    $z = $_POST["z"];
    $total = null;

    //$total = abs($x);
    //$total = round($x);
    //$total = floor($x);
    //$total = ceil($x);
    // $total = sqrt($x, $y, $z);
    //$total = pow($x, $y); 
    // $total = max($x, $y, $z);  
    // $total = min($x, $y, $z);
    // $total = pi();
    // $total = rand(152,158);

    echo $total;

?>