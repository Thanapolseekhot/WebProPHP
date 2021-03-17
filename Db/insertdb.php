<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<center>
<form method="post">
nameDATABASE : <input type = "text" name = "data" ><br>
USERNAME : <input type = "text" name = "name" ><br>
SURNAME  : <input type = "text" name = "surname" ><br>
E-MAIL   : <input type = "text" name = "email" ><br>
Dmname   : <input type = "text" name = "dbname" ><br>
<input type = "submit" name = "submit" value = "submit">
</form>
<form action ="fromCreateDB.php" method = "post">
<input type = "submit" value = "INSERTFORM">
</form>
</body>
</html>
<?php
    if(isset($_POST['submit']))
    {
        $servername = "localhost";
        $username = "root";
        $password = "12345";
        $daname =$_POST['data'];
        $conn = mysqli_connect($servername, $username, $password, $daname);
        if($conn === false){
            die("ERROR: Could not connect. " . mysqli_connect_error());
        }

    
        $name= mysqli_real_escape_string($conn,$_POST['name']);
        $sname= mysqli_real_escape_string($conn,$_POST['surname']);
        $email= mysqli_real_escape_string($conn,$_POST['email']);
        $Dbname=$_POST['dbname'];

    
        $errors= array();
        if(empty($name)){
            echo"username is requlred";
        }
        else if(empty($sname)){
            echo"surname is requlred";
        }else {
            $sql ="INSERT INTO $Dbname (firstname,lastname,email)
            VALUES('$name','$sname','$email')";
            mysqli_query($conn,$sql);
        }
        
        
    }
    
?>