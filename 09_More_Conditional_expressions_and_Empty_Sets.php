<?php
    $userAge = 20;

    if ($userAge < 3){
        echo "免費";
    }else if ($userAge < 18){
        echo "半票";
    }else if ($userAge < 60){
        echo "半票";
    }else {
        echo "敬老票";
    }
    echo "<br/>";

    $result = null;

    //用作初始化
    if ($result == null){
        $result = 0;
    }

    // if ($result != null){
    //     echo "不是null空集合<br>";
    // }else {
    //     echo "是null空集合<br>";
    // }
?>
<a href='10_Getting_User_input.php'>按此可連結下一篇</a>