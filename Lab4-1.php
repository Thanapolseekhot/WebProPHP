<html>
<head><title>การก าหนดค่าตัวแปร</title></head>
<body>
<?php
$x = 100;
$y = "200";
$z = '300';
$add = $x + $y;
$sub = $z - $y;
$n = $y * $z;
$j = $n / 300;
$message = "Thanapol seekhot";
/*echo $x; echo "<br />";
echo $y; echo "<br />";
echo $z; echo "<br />"; */
echo "ผลบวก $x + $y " ; echo "=$add"; echo "<br />";
echo "ผลลบ $z-$x  " ; echo "=$sub"; echo "<br />";
echo "ผลคูณ $y*$z  " ; echo "=$n" ; echo "<br />";
echo "ผลหาร $n/$z " ; echo  "=$y"; echo "<br />";
echo $message; echo "<br />";
?>
</body>
</html>