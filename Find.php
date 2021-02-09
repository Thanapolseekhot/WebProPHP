<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Find Min Max Average</title>
</head>
<body>
   
    <form  method="get">
    <center><h1>HW1 : Find Min Max Average</h1>
    Num 1: <input type="text" name="n1"><br>
    Num 2: <input type="text" name="n2"><br>
    Num 3: <input type="text" name="n3"><br>

    <input type="radio" name="choice" value="mininum"> Minimum <br>
    <input type="radio" name="choice" value="maximum"> Maximum <br>
    <input type="radio" name="choice" value="avg"> Average <br>
    <input type="submit" name = "submit" value="Submit"></center>

    <?php 
    if(isset($_GET['submit'])){
    $num1 = $_GET["n1"];
    $num2 = $_GET["n2"];
    $num3 = $_GET["n3"];
    $choice = $_GET["choice"];
    if ($choice == "mininum"){
        if ($num1 < $num2 && $num1 < $num3){
            echo $num1 ;
        }
        else if ($num2 < $num1 && $num2 < $num3){
            echo $num2 ;
        }
        else echo $num3 ;
    }
     if ($choice == "maximum"){
        if ($num1 > $num2 && $num1 > $num3){
            echo $num1 ;
        }
        else if ($num2 > $num1 && $num2 > $num3){
            echo $num2 ;
        }
        else echo $num3 ;
    }
    if($choice = "avg"){
        echo "Average = ",($num1+$num2+$num3)/3 ;
    }
}
    ?>

    </form>

</body>
</html>