<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>grade</title>
</head>
<body>
<?php
    $score="55";

    if($score >=80)
    {   
        $grade="A";
    }
    else if($score >=75)
    {
        $grade="B+";
    }
    else if($score >=70)
    {
        $grade="B";
    }
    else if($score >=65)
    {
        $grade="c+";
    }
    else if($score >=60)
    {
        $grade="c";
    }
    else if($score >=55)
    {
        $grade="D+";
    }
    else if($score >=50)
    {
        $grade="D";
    }
    else
    {
        $grade="F";
    }
    echo "Your Score is $score<br/>";
    echo "Your grade is $grade<br/>";
?>
</body>
</html>