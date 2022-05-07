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
        <!-- type="password"時打出的字元或數字都顯示(點點) -->
        Get_Password: <input type="password" name="password"><br>
        <input type="submit">
    </form>
    <br>
    <!-- method="post"時URL不會顯示出參數，醬相對安全 -->
    <form action="<?php $_PHP_SELF ?>" method="post">
        <!-- type="password"時打出的字元或數字都顯示(點點) -->
        Post_Password: <input type="password" name="password"><br>
        <input type="submit">
    </form>
    <br>
    <?php
        echo $_GET["password"] . "<br>";
        echo $_POST["password"] . "<br>";
        echo $_REQUEST["password"] . "<br>"; //$_REQUEST能取得前端method="get"和"post"傳來的參數param
    ?>
    <a href='15_Arrays.php'>按此可連結下一篇</a>
</body>
</html>