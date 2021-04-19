<?php
    session_start();
    include('server.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="bg-image">
<div class="bg-text">
  <h1>CJ STORE</h1>
</div>
    
    <div class="header">
    <h2>LOGIN</h2>
    </div>

    <form action="login_db.php" method="post">
        <?php if(isset($_SESSION['error'])) : ?>
        <div class="error">
            <h3>
                <?php
                    echo $_SESSION['error'];
                    unset($_SESSION['error']);
                ?>
            </h3>
        </div>
        <?php endif ?>
        <div class="input-group">
            <label for="username">USERNAME</label>
            <input type="text" name= "username">
        </div>
        <div class="input-group">
            <label for="password">PASSWORD</label>
            <input type="password" name= "password">
        </div>
        <div class="input-group">
            <button type="submit" name="login_user" class="btn">Login</button>
        </div>
        <div class="notmember">
        <p>Not yet a member? <a href="register.php"style="color:#A9F5D0">Sign Up</a></p>
        </div>
    </form>
    
</div>
</body>
</html>