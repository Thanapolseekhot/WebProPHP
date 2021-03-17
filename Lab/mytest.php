<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$x = 100;
$y = 10;
$opeartor = "+";

function plus()
{
    echo "x + y = ",$GLOBALS['x']+$GLOBALS['y'];

}
function sub()
{
    echo "x - y = ",$GLOBALS['x']-$GLOBALS['y'] ;

}
function mul()
{
    echo "x * y = ",$GLOBALS['x']*$GLOBALS['y'] ;

}
function div()
{
    echo "x / y = ",$GLOBALS['x']/$GLOBALS['y'] ;

}
plus();
echo '<br>';
sub();
echo '<br>';
mul();
echo '<br>';
div();
echo '<br>';
?>
</body>
</html>