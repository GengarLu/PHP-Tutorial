<?php
    // isset()函數用於檢測變量是否已設置並且非NULL。
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])){
        //mysqli_connect() 函數打開一個到 MySQL服務器的新連接。
        //mysqli_connect(host,username,password,dbname,port,socket);
        $conn = mysqli_connect('localhost', 'root', '', 'test1', '8887') or die("Connection Failed:" .mysqli_connect_error());
        if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['bgroup'])){
            $name = $_POST['name'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $bgroup = $_POST['bgroup'];

            $sql = "INSERT INTO `users` (`name`, `email`, `phone`, `bgroup`) VALUES ('$name', '$email', '$phone', '$bgroup')";

            //mysqli_query() 函數在 PHP 中是常用的 MySQL資料庫語法，用來判斷資料庫查詢是否成功
            $query = mysqli_query($conn, $sql);
            if ($query){
                echo "Entry Successful";
            }else{
                echo "Error Occurred";
            }
        }
    }
?>