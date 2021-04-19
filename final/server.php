<?php
    $servername="localhost";
    $username="root";
    $password="12345";
    $dbname="store";

    $conn = mysqli_connect($servername,$username,$password,$dbname);

    if(!$conn){
        echo("Connrct failed".mysqli_connect_error());
    }else{

    }

?>