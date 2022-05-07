<?php
    //加減法
    $number = 15.5;
    $value = $number - 2 + 1.5;
    var_dump ($value); //雖然type是float，但真正實作網頁時只要看的到正確數值就行
    echo $value;
    echo "<br/>";

    //乘法
    $number2 = 10;
    $value2 = $number2 * 5;
    var_dump ($value2);
    echo $value2;
    echo "<br/>";

    //除法
    $number3 = 12;
    $value3 = $number3 / 5;
    var_dump ($value3);
    echo $value3;
    echo "<br/>";

    //餘數
    $number4 = 12;
    $value4 = $number4 % 5;
    var_dump ($value4);
    echo $value4;
    echo "<br/>";

    //符號優先性
    $result1 = 3 + 2 * 5;
    $result2 = (3 + 2) * 5;
    echo $result1;
    echo "<br/>";
    echo $result2;
    echo "<br/>";

    //練習 => 時間換算
    $total_seconds = 95000;

    $days = intval($total_seconds / (24 * 60 * 60));

    $hours = intval($total_seconds / 24 / 60) % 60;

    $minutes = intval($total_seconds / 60) % 60; //如果除第二次60會包含hours的時間，所以要用餘數的方式去除

    $seconds = $total_seconds % 60;

    echo $days . "天" . $hours . "小時" . $minutes . "分鐘" . $seconds . "秒<br/>";

    //建議不要醬做
    echo "1" + "2";
    echo "<br/>";
    var_dump ("1" + "2");
    echo "<br/>";

?>
<a href='07_Boolean_value_and_Conditional_expressions.php'>按此可連結下一篇</a>