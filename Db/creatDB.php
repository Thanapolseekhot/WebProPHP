
<?php include('connectDB.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // Create database
    if(isset($_POST["delete"])){
        $creatDB =$_POST['creatDB'];
        //$delete = $_POST["delete"];
        $sql = "DROP DATABASE $creatDB";
        if (mysqli_query($conn, $sql)) {
        echo "Database delete successfully";
        } else {
        echo "Error delete database: " . mysqli_error($conn)."<br>";
        }
        mysqli_close($conn);
    }
    else if(isset($_POST['create'])){
        $creatDB =$_POST['creatDB'];
        $sql = "CREATE DATABASE $creatDB";
        if (mysqli_query($conn, $sql)) {
        echo "Database created successfully";
        } else {
        echo "Error creating database: " . mysqli_error($conn)."<br>";
        }
        mysqli_close($conn);
    }
    

?>
<form action ="fromCreateDB.php" method = "post">
<input type = "submit" value = "back">
</form>
<form action ="insertdb.php" method = "post">
<input type = "submit" value = "INSERTDATA">
</form>
</body>
</html>
