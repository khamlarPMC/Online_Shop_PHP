<?php
    $servername = "localhost:4306";
    $username = "root";
    $password = "";
    $database = "onlineshop";
    $conn = mysqli_connect($servername, $username, $password, $database);
    mysqli_query($conn, "SET CHARACTER SET 'utf8'");
    mysqli_query($conn, "SET SESSION collation_connection = 'utf8_unicode_ci'");
    if($conn->connect_error){
        echo "ERROR". $conn->connect_error;
    }
    else{
        //echo "connect database success !";
    }
?>