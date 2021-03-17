<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Welcome </h1>
    <?php
    echo $_GET["name"];
    ?>
    <br>
    Your email address is:
    <?php
        echo $_GET["email"]
    ?>
</body>
</html>