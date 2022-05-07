<?php
    $host = "localhost";
    $username = "root";
    $password = "";
    $dbname = "api";
    $port = "8887";

    $conn = mysqli_connect($host, $username, $password, $dbname, $port);

    $response = array();

    if ($conn){
        $sql = "SELECT * FROM users";

        $result = mysqli_query($conn, $sql);

        if ($result){
            $x = 0; //counter

            while ($row = mysqli_fetch_assoc($result)){
                $response[$x]['id'] = $row['id'];
                $response[$x]['name'] = $row['name'];
                $response[$x]['age'] = $row['age'];
                $response[$x]['email'] = $row['email'];
                $x++;
            }
            /*
                PHP可藉由 json_encode()與json_decode()來編碼與解碼JSON格式的資料，
            在一般情況下不需要特別給予任何參數，但如果將JSON格式資料直接儲存的話，
            預設是儲存一行文，在不靠任何工具的前提下僅以肉眼辨識會顯得有點吃力。
                如果想要提升 JSON 格式資料的可讀性，只需要將 json_encode()的第二個
            參數設為 JSON_PRETTY_PRINT 即可。
            */
            echo json_encode($response, JSON_PRETTY_PRINT);
        }
    }
    else {
        echo "Database Connection Failed!";
    }
?>