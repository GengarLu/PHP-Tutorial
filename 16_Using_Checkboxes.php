<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="16_Using_Checkboxes.php" method="post">
        <!-- checkbox =>複選框 -->
        <!-- fruits[]是顯示Apples，Oranges，Pears。
        fruits是顯示a，o，p，也就是各元素的第一個字
        所以才要加[] -->
        Apples: <input type="checkbox" name="fruits[]" value="apples"><br>
        Oranges: <input type="checkbox" name="fruits[]" value="oranges"><br>
        Pears: <input type="checkbox" name="fruits[]" value="pears"><br>
        <input type="submit">
    </form>
    <br>
    <?php
        $fruits = $_POST["fruits"];
        echo $fruits[0]; //不管單選或多選，顯示的都是排序第一個元素，[1][2]依此類推
    ?>
    <a href='17_Associative_Arrays.php'>按此可連結下一篇</a>
</body>
</html>