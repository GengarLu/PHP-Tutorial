<?php
    //立方，return一定是在function的最後一行
    //有時return後不會放東西，只是為了跳脫出function
    function cube($num){
        return $num * $num * $num;
    }
    $getResult = cube(3);
    echo $getResult . "<br>";
    echo cube(4);
?>
<a href='20_If_Statements.php'>按此可連結下一篇</a>
