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
echo "ผลบวก 100+200 " ; echo "=$add"; echo "<br />";
echo "ผลลบ 300-100  " ; echo "=$sub"; echo "<br />";
echo "ผลคูณ 200*300  " ; echo "=$n" ; echo "<br />";
echo "ผลหาร $n/300  " ; echo  "=$y"; echo "<br />";
echo $message; echo "<br />";
?>
</body>
</html>