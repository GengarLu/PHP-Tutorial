<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="17_Associative_Arrays.php" method="post">
        請輸入學生姓名: <input type="text" name="student">
        <input type="submit">
    </form>
    <br>
    <?php
        // Associative_array就類似python的distionary字典，key對應value
        $grades = array("Jim"=>"A+", "Pam"=>"B-", "Oscar"=>"C+");
        echo $grades[$_POST["student"]];
    ?>
    <a href='18_Functions.php'>按此可連結下一篇</a>
</body>
</html>