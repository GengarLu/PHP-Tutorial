<?php
    $host = "localhost";
    $username = "root";
    $password = "";
    $dbname = "photography";
    $port = "8887";

    $conn = mysqli_connect($host, $username, $password, $dbname, $port);

    if ($conn) {
        echo "Connection Successful";
    }else{
        echo "Connection Failed";
    }

    $name = $_POST['name'];
    $email = $_POST['email'];
    $number = $_POST['number'];

    $sql = "INSERT INTO users (name, email, number) VALUES ('$name', '$email', '$number')";

    mysqli_query($conn, $sql);

    header("Location: index.php#contact");
?>