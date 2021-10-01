<?php
    $host= "localhost";
    $username= "root";
    $password= "";
    $database= "web";

    $conn = new mysqli($host, $username,$password,$databse);
    if($conn->connect_errno):
        echo "Database Connection Failed:" . $conn->connect_error;
        exit();
    endif;
?>
