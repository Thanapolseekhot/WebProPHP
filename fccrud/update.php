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
        <h1 class="mt-5">update page</h1>
        <hr>
        <?php

                $userid = $_GET['id'];
                $updateuser = new DB_con();
                $sql = $updateuser->fetchonerecord($userid);
                while($row = mysqli_fetch_array($sql)){
        ?>
                <form action="" method="post">
                            <div class="mb-3">
                                <label for="firstname" class="form-lable">firstname</label>
                                <input type="text" class="form-control" name="firstname" 
                                    value="<?php echo $row['firstname']; ?>" require>
                            </div>
                            <div class="mb-3">
                                <label for="lastname" class="form-lable">lastname</label>
                                <input type="text" class="form-control" name="lastname" 
                                value="<?php echo $row['lastname']; ?>"require>
                            </div>
                            <div class="mb-3">
                                <label for="email">email</label>
                                <input type="email" class="form-control" name="email" 
                                value="<?php echo $row['email']; ?>"require>
                            </div>
                            <div class="mb-3">
                                <label for="phonenumber">phonenumber</label>
                                <input type="text" class="form-control" name="phonenumber" 
                                value="<?php echo $row['phonenumber']; ?>"require>
                            </div>
                            <div class="mb-3">
                                <label for="address">address</label>
                                <textarea name="address" cols="30" rows="10" class="form-control" require><?php echo $row['address']; ?></textarea>
                            </div> 
                            <?php 
                            }
                            
                            ?>
                            <button type="sumbit" name="insert" class="btn btn-success">Insert</button>
                        </form>
                    
                    </div>
        
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" 
crossorigin="anonymous"></script>
</body>
</html>