<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- method="get"是用來從user那獲取信息並使用它 -->
    <!-- type="text"是一個textbox -->
    <!-- Name: 是文本提示，告訴我們這個textbox是用來做什麼的 -->
    <!-- type="submit"是提交按鈕，能將信息提交給php -->
    <!-- action="<?php $_PHP_SELF ?>"，action也能寫成醬 -->
    <!-- PHP_SELF 是一個變量，它返回當前正在執行的腳本。此變量返回當前文件的名稱和路徑（來自根文件夾）。 -->
    <form action="10_Getting_User_input.php" method="get">
        Name: <input type="text" name="Username">
        <br>
        Age: <input type="text" name="Userage">
        <input type="submit">
    </form>
    <br>
    <?php
        //得到提交的名字
        echo "Your name is ";
        echo $_GET["Username"];
        echo "<br>";
        echo "Your age is ";
        echo $_GET["Userage"];
        echo "<br>";
    ?>
    <a href='11_Building_a_basic_calculator.php'>按此可連結下一篇</a>
</body>

</html>