<?php
        include_once('functions.php');

        $insertdata = new DB_con();

        if(isset($_POST['insert'])){
            $fname = $_POST['firstname'];
            $lname = $_POST['lastname'];
            $emil = $_POST['email'];
            $phonenumber = $_POST['phonenumber'];
            $address = $_POST['address'];

            $sql = $insertdata->insert($fname,$lname,$emil,$phonenumber,$address);

            if($sql){
                echo"<script>alert('Record inserted Successfully!');</script>";
                echo"<script>window.location.href='index.php'</script>";
            }else{
                echo"<script>alert('something went wrong! please try again!');</script>";
                echo"<script>window.location.href='insert.php'</script>";
            }
        }
    
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" 
    crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <a href="index.php" class="btn btn-primary mt-3">go back</a>
        <hr>
        <h1 class="mt-5">insert page</h1>
        <hr>
        <form action="" method="post">
            <div class="mb-4">
                <label for="firstname" class="form-lable">firstname</label>
                <input type="text" class="form-control" name="firstname" require>
            </div>
            <div class="mb-4">
                <label for="lastname" class="form-lable">lastname</label>
                <input type="text" class="form-control" name="lastname" require>
            </div>
            <div class="mb-4">
                <label for="email">email</label>
                <input type="email" class="form-control" name="email" require>
            </div>
            <div class="mb-4">
                <label for="phonenumber">phonenumber</label>
                <input type="text" class="form-control" name="phonenumber" require>
            </div>
            <div class="mb-4">
                <label for="address">address</label>
                <textarea name="address" cols="30" rows="10" class="form-control" require></textarea>
            </div> 
            <button type="sumbit" name="insert" class="btn btn-success">Insert</button>
        </form>
       
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" 
crossorigin="anonymous"></script>
</body>
</html>