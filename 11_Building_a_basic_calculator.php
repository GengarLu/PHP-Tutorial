<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- PHP_SELF 是一個變量，它返回當前正在執行的腳本。此變量返回當前文件的名稱和路徑（來自根文件夾）。 -->
    <form action="<?php $_PHP_SELF ?>" method="get">
        <!-- type="number"代表textbox只能打數字 -->
        數字1: <input type="number" name="num1">
        <br>
        數字2: <input type="number" name="num2">
        <input type="submit">
    </form>
    <br>

    <?php
        echo "相加的答案:";
        echo $_GET["num1"] + $_GET["num2"];
        echo "<br>";
        echo "相減的答案:";
        echo $_GET["num1"] - $_GET["num2"];
        echo "<br>";
        echo "相乘的答案:";
        echo $_GET["num1"] * $_GET["num2"];
        echo "<br>";
        echo "相除的答案:";
        echo $_GET["num1"] / $_GET["num2"];
        echo "<br>";
    ?>
    <a href='12_Building_a_Mad_Libs_Game.php'>按此可連結下一篇</a>
</body>
</html>