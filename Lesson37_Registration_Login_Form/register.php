<?php
    $host = "localhost";
    $username = "root";
    $password = "";
    $dbname = "form";
    $port = "8887";

    $conn = mysqli_connect($host, $username, $password, $dbname, $port);

    if (mysqli_connect_error()){
        exit("Error connecting to the database" . mysqli_connect_error());
    }

    if (!isset($_POST['username'], $_POST['email'], $_POST['password'])){
        exit("Empty field(s)");
    }

    if (empty($_POST['username']) || empty($_POST['email']) || empty($_POST['password'])){
        exit("Values Empty");
    }

    //PDO::prepare()準備要執行的SQL語句並返回一個 PDOStatement對象
    /*
    PDO (PHP Data Object)資料庫抽象層
    PDO 的特性之一，就是把存取資料庫的動作抽象化（data-access abstraction layer），
    讓使用者可以用一致的介面來處理與資料庫相關作業。
    PDO 在 PHP 5.1 才正式被支援，在 PHP 5.0 時是被當作 PECL 擴充，
    在 PHP 5.0 之前無法使用 PDO。
    */
    if ($stmt = $conn->prepare("SELECT id, password FROM users WHERE username = ?")){
        //bind_param()從字面上不難理解，繫結的參數
        // 該函式繫結了 SQL 的引數，且告訴資料庫引數的值。
        /*
        引數有以下四種型別:
        i – integer（整型）
        d – double（雙精度浮點型）
        s – string（字串）
        b – BLOB（布林值）
        */
        //通過告訴資料庫引數的資料型別，可以降低 SQL 注入的風險。
        $stmt->bind_param('s', $_POST['username']);
        $stmt->execute();
        $stmt->store_result();

        if ($stmt->num_rows>0){
            echo "Username already exists. Try again";
        }else{
            if ($stmt = $conn->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)")){
                /*
                    使用 password_hash 可以直接用最簡單的方式實踐複雜的加密在使用時，
                需要搭配第二個參數，推薦直接使用 PASSWORD_DEFAULT 每次處理時，
                都會在背後產生隨機的SALT， 當然，也可以手動指定要使用哪一個SALT，
                但最好不要，就交給PASSWORD_DEFAULT來隨機處理，會更加安全。
                    鹽（Salt），在密碼學中，是指在雜湊之前將雜湊內容（例如：密碼）
                的任意固定位置插入特定的字串。這個在雜湊中加入字串的方式稱為「加鹽」。
                    **{所以在phpmyadmin裡會看到密碼是亂碼}**
                */
                $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
                $stmt->bind_param('sss', $_POST['username'], $_POST['email'], $password);
                $stmt->execute();
                echo "Successfully Registered";
            }else{
                echo "Error Occurred";
            }
        }
        $stmt->close();
    }else{
        echo "Error Occurred";
    }
    $conn->close();
?>