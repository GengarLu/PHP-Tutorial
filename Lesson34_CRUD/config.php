<?php
    $host = "localhost";
    $username = "root";
    $password = "";
    $dbname = "mydb";
    $port = "8887";

    $conn = new mysqli($host, $username, $password, $dbname, $port);
    if ($conn->connect_error){
        die("Connection Failed" . $conn->connect_error);
    }
?>