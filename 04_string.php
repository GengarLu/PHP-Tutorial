<?php
    //0.
    echo "Progress Bar </br>";

    //1. Concatenation Operator 串聯運算子=javascript的+
    echo "Progress"." "."Bar"."</br>";

    //2.
    $string = "Progress"." ";
    echo $string."Bar"."</br>";

    //3.
    echo $string."</br>";
    $string = $string."Bar"."</br>";
    echo $string;

    //4.
    echo "<p>學生列表</p>";
    echo "<ul>";
    echo "<li>小明</li>";
    echo "<li>小美</li>";
    echo "</ul>";
    echo "<hr>";

    //5.
    $listTitle = "學生列表";
    $firstStudentName = "小明";
    $secondStudentName = "小美";
    echo "<p>".$listTitle."</p>";
    echo "<ul>";
    echo "<li>".$firstStudentName."</li>";
    echo "<li>".$secondStudentName."</li>";
    echo "</ul>";
    echo "<hr>";

    //6. 字串轉大小寫
    $phrase = "Hello World!";
    echo strtoupper($phrase);
    echo "<br>";
    echo strtolower($phrase);
    echo "<br>";

    //7. 字串長度
    echo strlen($phrase);
    echo "<br>";

    //8. 藉由索引值更改並顯示所選字元
    $phrase[0] = "B";
    $phrase[1] = "y";
    $phrase[2] = "e";
    $phrase[3] = " ";
    $phrase[4] = " ";
    echo $phrase;
    echo "<br>";

    //9. 藉由str_replace更改
    echo str_replace("World", "Country", $phrase);
    echo "<br>";

    //10. 抓取字串中特定字元substr(字串, 索引值起始, 要抓幾個(數值要多+1))
    echo substr($phrase, 0, 4);
    echo "<br>";
?>
<a href='05-1_Digital_Introduction_and_Handling.php'>按此可連結下一篇</a>