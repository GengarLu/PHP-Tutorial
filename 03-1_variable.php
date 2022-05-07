<?php
    echo "直接顯示</br>";

    //錢字符號dollar sign
    $string = "這是變數</br>";
    echo $string;

    //可用_開頭命名
    $_value = "1.也可用底線命名</br>";
    $value = "2.這個沒底線</br>";
    echo $_value;
    echo $value;
    echo $_value;

    //可用英文大小寫開頭命名
    $A1 = "英文大寫開頭 - 可以</br>";
    $a1 = "英文小寫開頭 - 可以</br>";
    // $1b = "數字開頭 - 不可以</br>"
    echo $A1;
    echo $a1;
    $A1 = "變數可變換裡面內容</br>";
    echo $A1;
?>
<a href='03-2_Variable_Naming_and_writing_style.php'>按此可連結下一篇</a>