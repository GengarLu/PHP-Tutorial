<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="20_Building_a_Better_Calculator.php" method="post">
        <!-- step="0.1"代表可打數字最多到小數點第一位，(可持續增加) -->
        num1: <input type="number" step="0.1" name="num1"><br>
        operator: <input type="text" name="op"><br>
        num2: <input type="number" name="num2"><br>
        <input type="submit">
    </form>
    <br>
    <?php
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        $operator = $_POST["op"];

        if($operator == "+"){
            echo "相加的答案:" . $num1 + $num2 . "<br>";
        }elseif($operator == "-"){
            echo "相減的答案:" . $num1 - $num2 . "<br>";
        }elseif($operator == "*"){
            echo "相乘的答案:" . $num1 * $num2 . "<br>";
        }elseif($operator == "/"){
            echo "相除的答案:" . $num1 / $num2 . "<br>";
        }else{
            echo "Invalid Operator!!!<br>";
        }
    ?>
    <a href='21_Switch_Statements.php'>按此可連結下一篇</a>
</body>
</html>