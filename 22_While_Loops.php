<?php
    $index = 1;
    while($index <= 5){
        echo $index;
        $index++;
    }
    echo "<br>";

    //index=6的話while執行完無任何顯示
    //do while至少會執行一次do的內容
    $index = 6;
    do {
        echo "$index <br>";
        $index++;
    }while($index <= 5)
?>
<a href='23_For_Loops.php'>按此可連結下一篇</a>