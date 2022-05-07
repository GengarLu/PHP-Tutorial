<?php
    //整數 integer
    $thisIsInt = 10;
    var_dump($thisIsInt);
    echo $thisIsInt; //echo有做轉型的動作=>int轉string
    echo "<br/>";

    //負整數
    $thisIsInt2 = -20;
    var_dump($thisIsInt2);
    echo $thisIsInt2;
    echo "<br/>";

    //整數的十六進制表示
    $thisIsHexInt = 0xff; //255
    var_dump($thisIsHexInt);
    echo $thisIsHexInt;
    echo "<br/>";

    //小數點 => 浮點數 float = double (PHP裡是一樣的)
    //在PHP中通常只用到float，位數較少。但如果要用到位數較長的計算也不會用double，因為不精準，解決辦法是演算法
    $thisIsFloat = 1.58907312;
    var_dump($thisIsFloat);
    echo $thisIsFloat;
    echo "<br/>";

    //float 處理
    $thisIsFloat2 = ceil(9.567); //無條件進位，但在PHP只會顯示整數部分，type卻依然是float，建議不要用
    $thisIsFloat3 = floor(9.567); //無條件捨去，但在PHP只會顯示整數部分，type卻依然是float，建議不要用
    $thisIsFloat4 = round(9.567, 2); //顯示小數點後兩位
    $thisIsFloat5 = intval(9.567); //轉整數，無條件捨去
    $thisIsFloat6 = floatval(9); //type轉浮點數
    var_dump($thisIsFloat2);
    echo "<br/>";
    var_dump($thisIsFloat3);
    echo "<br/>";
    var_dump($thisIsFloat4);
    echo "<br/>";
    var_dump($thisIsFloat5);
    echo "<br/>";
    var_dump($thisIsFloat6);
    echo "<br/>";

    //字串與數字組合
    echo "數字1:" . 1 . "結束<br/>";
    echo "數字2:" . 2.95 . "結束<br/>";
    // echo "數字2:".2.95."結束<br/>"; //全部黏在一起會出錯
    echo "數字3:" . 1 . "&" . 2 . "結束<br/>";
    echo "數字4:" . 1.2 . "結束<br/>";
?>
<a href='05-2_Working_with_digital.php'>按此可連結下一篇</a>