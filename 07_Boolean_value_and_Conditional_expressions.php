<?php
    $a = true; //True,TRUE,TRue,TruE都行
    echo $a; //true會轉成 1
    echo "<br/>";

    $b = false;
    echo $b; //false啥都不顯示
    echo "<br/>";

    // $var = null; //是Bye World!!!
    // $var;        //是Bye World!!!
    // $var = -1;   //負數(包含浮點數)是Hello World!!!
    // $var = 10;   //正數(包含浮點數)是Hello World!!!

    if ($a){ //$var、$b
        echo "Hello World!!!";
        echo "<br/>";
    }else{
        echo "Bye World!!!";
        echo "<br/>";
    }
?>
<a href='08_Comparison_and_Logical_Operators.php'>按此可連結下一篇</a>