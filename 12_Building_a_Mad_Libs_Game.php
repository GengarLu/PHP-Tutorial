<!-- Mad Libs Game就是可以輸入一堆隨機單詞，
接下來把這些詞分散在一個文章中，有點像填空 -->

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
        顏色: <input type="text" name="color"><br>
        複數名詞: <input type="text" name="pluralNoun"><br>
        名字: <input type="text" name="Name"><br>
        <input type="submit">
    </form>
    <br>
    <?php
        $color = $_GET["color"];
        $pluralNoun = $_GET["pluralNoun"];
        $Name = $_GET["Name"];
        echo "玫瑰是$color<br>";
        echo $pluralNoun . "是藍色<br>";
        echo "我喜歡$Name<br>";
    ?>
    <a href='13_URL_Parameters.php'>按此可連結下一篇</a>
</body>
</html>