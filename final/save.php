<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>save game</title>
</head>
<body>
    <?php
    $hostname = "localhost";
    $username = "root";
    $password = "12345";
    $dbname = "storepsvita";
    $conn = mysqli_connect( $hostname, $username, $password, $dbname);
    mysqli_set_charset($conn,"utf8");
    $id=$_POST['idnumber'];
    $name=$_POST['nameg'];
    $type=$_POST['typee'];
    $price=$_POST['price'];
    $max_size = $_POST['max_size'];
    $ImageFile = $_FILES['picture'];
    $Flag = false;
    if ($ImageFile=="") {
        echo "<B><CENTER><li>คุณไม่ได้เลือกรูปภาพ.</CENTER></B><BR>";
        }else {
        $ImageFile_name = $ImageFile['name'];
        $ImageFile_type = $ImageFile['type'];
        $ImageFile_size = $ImageFile['size'];
        $ImageFile_tmp = $ImageFile['tmp_name'];
        if ($ImageFile_type=="img/gif" or $ImageFile_type=="img/jpeg") {
        if ($ImageFile_size <= $max_size) {
        copy($ImageFile_tmp,"picture/$ImageFile_name");
        unlink($ImageFile_tmp);
        $image = $ImageFile_name;
        $Flag = true;
        }else {
        echo "<CENTER><li>รูปภาพมีขนาดใหญ่กว่า 50 kb.<BR></CENTER>";
        echo "<CENTER><input type=\"button\" value=\"กลับไปแก้ไข\" ";
        echo "onclick=\"history.back();\" style=\"cursor:hand\">
        </CENTER>";
        $Flag=false;
        }
        }else {
        echo "<CENTER><li>รูปภาพไม่ใช่ไฟล์ประเภท GIF หรือ JPG <BR></CENTER>";
        echo "<CENTER><input type=\"button\" value=\"กลับไปแก้ไข\" ";
        echo "onclick=\"history.back();\" style=\"cursor:hand\">
        </CENTER>";
        $Flag = false;
        }
        }
    if($Flag)
{
    $sqltxt = mysqli_query($conn,"INSERT INTO game (idnumber,nameg,typee, price,picture) 
    VALUES ('$id','$name','$type','$price','$ImageFile')")
    or die (mysqli_error($conn));
    echo "<br><br><CENTER><H2>บันทึกข้อมูลเรียบร้อย</H2><BR><BR></CENTER>";
    echo "<CENTER><A HREF=\"game.php\">กลับไปหน้า GAME</A></CENTER>";
}
    mysqli_close($conn);
    ?>
    
</body>
</html>