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
        <h1 class="my=5">INformation Page</h1>
        <table id="mytable" class="table table-border table=striped">
            <thead>
                <th>#</th>
                <th>first name</th>
                <th>last name</th>
                <th>email</th>
                <th>phone number</th>
                <th>address</th>
                <th>posting</th>
                <th>edit</th>
                <th>delete</th>
            </thead>
            <tbody>
                <?php
                    include_once('functions.php');
                    $fetchdata = new DB_con();
                    $sql = $fetchdata->fetchdata();
                    while($row = mysqli_fetch_array($sql)){
                    ?>
                        <tr>
                            <td><?php echo $row['id']; ?></td>
                            <td><?php echo $row['firstname']; ?></td>
                            <td><?php echo $row['lastname']; ?></td>
                            <td><?php echo $row['email']; ?></td>
                            <td><?php echo $row['phonenumber']; ?></td>
                            <td><?php echo $row['address']; ?></td>
                            <td><?php echo $row['postingdate']; ?></td>
                            <td><a href="update.php?id=<?php echo $row['id']?>"class="btn btn-primary">Edit</a></td>
                            <td><a href="delete.php?del=<?php echo $row['id']?>"class="btn btn-primary">Edit</a></td>
                        </tr>
                    <?php
                    }
                ?>
            </tbody>
        </table>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" 
crossorigin="anonymous"></script>
</body>
</html>