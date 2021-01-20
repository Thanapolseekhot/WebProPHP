<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>TOTAL </h1>
    <?php
     $x = $_GET["x"];
     $y = $_GET["y"];
     $o = $_GET["o"];
     switch($o){
        case "+":
            echo $x + $y;
            break;
        case "-":
            echo $x - $y;
            break;
        case "*":
            echo$x * $y;
            break;
        case "/":
            echo $x / $y;
            break;
    }
    ?>
    <a href="cal.php" >ย้อนกลับ</a></a>
    <br>
</body>
</html>