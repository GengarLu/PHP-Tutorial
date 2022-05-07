<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- http://localhost:8888/13_URL_Parameters.php?name=Allen -->
    <!-- 執行完以下程式，網址會呈現以上那樣，method="get"會顯示出name的內容
    醬相對不安全，所以下一篇會介紹method="post" -->
    <!-- PHP_SELF 是一個變量，它返回當前正在執行的腳本。此變量返回當前文件的名稱和路徑（來自根文件夾）。 -->
    <form action="<?php $_PHP_SELF ?>" method="get">
        Name: <input type="text" name="name"><br>
        <input type="submit">
    </form>
    <br>
    <?php
        echo $_GET["name"];
    ?>
    <a href='14_POST_vs_GET.php'>按此可連結下一篇</a>
</body>
</html>