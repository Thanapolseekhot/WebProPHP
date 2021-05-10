<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>addgame</title>
    
</head>
<body >
    <?php
    $hostname = "localhost";
    $username = "root";
    $password = "12345";
    $dbname = "storepsvita";
    $conn = mysqli_connect( $hostname, $username, $password, $dbname);
    mysqli_set_charset($conn,"utf8");
    // ฟังก์ชนเลือกประเภท ั่
    function GetTypeSelect($ID)
    {
    global $conn;
    $sqltxt = mysqli_query($conn,"SELECT * FROM game ORDER BY idnumber")
    or die (mysqli_error($conn));
    if (!$sqltxt)
    die("(FunctionDB:GetTypeSelect) SELECT console มีข้อผิดพลาด".mysql_error($conn));
    echo "<option value=\"\">เลือกรุ่น</option>";
    while($result=mysqli_fetch_object($sqltxt))
    {
    if($result->idnumber==$ID) { //ถ้าข้อมูลที่เลือกตรงกับข้อมูลในตารางให้เลือกรายการน้ัน
    echo "<option value=\"$result->idnumber\" selected> ";
    echo "$result->nameg</option>\n";
    }
    else { //แต่ถ้าไม่ใช่ก็จะแสดงรายการตามฐานข้อมูล
    echo "<option value=\"$result->typee\">";
    echo "$result->typee</option>\n";
    }
    }
    }
    function GetStatusSelect($ID)
    {
    global $conn;
    $sql = "SELECT * FROM game ORDER BY idnumber";
    $sqltxt = mysqli_query($conn,$sql) or die (mysqli_error($conn));
    if (!$sqltxt)
    die("(FunctionDB:GetStatusSelect) SELECT status มีข้อผิดพลาด".mysql_error($conn));
    echo "<option value=\"\">เลือกสถานะ</option>\n";
    while($result=mysqli_fetch_object($sqltxt))
    {
    if ($result->StatusID == $ID) {
    echo "<option value=\"$result->StatusID\" selected> ";
    echo "$result->StatusName</option>\n";
    }
    else {
    echo "<option value=\"$result->StatusID\">";
    echo "$result->StatusName</option>\n";
    }
    }
    }
    ?>
    <!DOCTYPE HTML>
    <html>
    <head><title>เพิ่มขอ้มูลหนังสือ</title></head>
    <body>

    <form enctype="multipart/form-
    data" name="save" method="POST" action="save.php">

    <BR><BR>
    <table width="650"  bgcolor="#ffffff" align = "center">
    <tr>
    <td colspan="6" bgcolor = "#A3CD83" align = "center" height="40">
    <b>: : เพิ่มข้อมูลเครื่องเกมส์ : : </td>
    </tr>
    <tr>
    <td width = "200">ลำดับ : </td>
    <td width = "400"><input type="text" name="idnumber" size="10"
    maxlength="5"> </td>
    </tr>
    <tr >
    <td width = "200" >ชื่อรุ่น:</td>
    <td><input type="text" name="nameg" size="50" maxlength="50"> </td>
    </tr>
    <tr>
        <td width = "200">รุ่น : </td>
        <td ><select name="typee" ><?php GetTypeSelect($TypeID); ?>
        </select></td>
    </tr>
    <tr>
        <td width = "200">ราคา</td>
        <td><input type="text" name="price" maxlength="25" size="20"></td>
    </tr>
    <tr>
    <td width = "200">รูปภาพ</td>
    <td> <input type="hidden" name="max_size" value="5000000">
    <input type="file" name="picture" size="30">
    <br> <font size=2 color = #FF3300>นามสกุล .gif หรือ .jpg (เท่าน้ัน)</font></td>
    </tr>
    </table>
    <br>
    <div align = "center">
    <input type="submit" name="Submit" value="บันทึกข้อมูล" style="cursor:hand">
    
    
    </form>
    <button><a href="game.php">กลับ</a></button></div>
    </body>
    </html>
</body>
</html>