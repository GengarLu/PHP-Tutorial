<?php
    $number = 10;
    $string = "10";

    //1.相等Equal比較
    if ($number == 10){
        echo "1. True!<br/>";
    }else {
        echo "1. False!<br/>";
    }

    //2.相等Equal比較，連同型態一起比較
    if ($number === $string){
        echo "2. True!<br/>";
    }else {
        echo "2. False!<br/>";
    }

    //3.1不等於Not Equal比較
    if ($number != 9){
        echo "3.1: True!<br/>";
    }else {
        echo "3.1: False!<br/>";
    }

    //3.2不等於Not Equal比較，建議不要用這個，跟其他程式語言差比較多
    if ($number <> 9){
        echo "3.2: True!<br/>";
    }else {
        echo "3.2: False!<br/>";
    }

    //4.不等於Not Equal比較，連同型態一起比較
    if ($number !== $string){
        echo "4. True!<br/>";
    }else {
        echo "4. False!<br/>";
    }

    //5.大於等於比較
    if ($number >= 10){
        echo "5. True!<br/>";
    }else {
        echo "5. False!<br/>";
    }

    //6.小於等於比較
    if ($number <= 10){
        echo "6. True!<br/>";
    }else {
        echo "6. False!<br/>";
    }

    //巢狀比較
    $money = 200;
    $good_price = 10;
    if($money > 100){
        if($good_price < 50){
            echo "買下來<br/>";
        }
    }

    // echo (true and true); //1
    // echo (true and false); //0=沒顯示
    // echo (false and true); //0=沒顯示
    // echo (false && false); //0=沒顯示
    // echo "<br/>";

    // echo (true or true); //1
    // echo (true or false); //1
    // echo (false or true); //1
    // echo (false || false); //0=沒顯示
    // echo "<br/>";

    // echo (true xor true); //0
    // echo (true xor false); //1
    // echo (false xor true); //1
    // echo (false xor false); //0=沒顯示
    // echo "<br/>";

    if ($money > 100 && $good_price < 50){
        echo "買下來<br/>";
    }
?>
<a href='09_More_Conditional_expressions_and_Empty_Sets.php'>按此可連結下一篇</a>