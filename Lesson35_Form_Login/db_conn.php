<?php
    $host = "localhost";
    $username = "root";
    $password = "";
    $dbname = "test_db";
    $port = "8887";

    $conn = mysqli_connect($host, $username, $password, $dbname, $port);
    if (!$conn){
        echo "Connection Failed";
    }
?>