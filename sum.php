<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Find Min Max Average</title>
</head>
<body>

    <form method="get">
    <center><h1>HW2 : Sum of number</h1>
    Num 1: <input type="text" name="n1"><br>
    <input type="radio" name="operator1" value="+"> + :
    <input type="radio" name="operator1" value="-"> - :
    <input type="radio" name="operator1" value="*"> * :
    <input type="radio" name="operator1" value="/"> / :<br>
    Num 2: <input type="text" name="n2"><br>
    <input type="radio" name="operator2" value="+"> + :
    <input type="radio" name="operator2" value="-"> - :
    <input type="radio" name="operator2" value="*"> * :
    <input type="radio" name="operator2" value="/"> / :<br>
    Num 3: <input type="text" name="n3"><br>
    <input type="submit" name="submit" value="Submit"></center>
    </form>

    <?php
        if(isset($_GET["submit"])){
            $ans = 0 ;
            $answer = 0;
            $n1 = $_GET["n1"];
            $n2 = $_GET["n2"];
            $n3 = $_GET["n3"];
            $operator1 = $_GET["operator1"];
            $operator2 = $_GET["operator2"];

            if ($operator1 == '+')
            {
                $ans = $n1+$n2;
            }

                else if ($operator1 == '-')
                {
                    $ans = $n1-$n2;
                }

                    else if ($operator1 == '*')
                    {
                        $ans = $n1*$n2;
                    }

                        else if ($operator1 == '/')
                        {
                            $ans = $n1/$n2;
                        }

            if ($operator2 == '+')
            {
                $answer = $ans+$n3;
            }

                else if ($operator2 == '-')
                {
                    $answer = $ans-$n3;
                }

                    else if ($operator2 == '*')
                    {
                        $answer = $ans*$n3;
                    }

                        else if ($operator2 == '/')
                        {
                            $answer = $ans/$n3;
                        }
            
            echo "<center><h2>Result is $answer";
        }
?>
</body>
</html>