<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="21_Switch_Statements.php" method="post">
        What was your grade?
        <input type="text" name="grade"><br>
        <input type="submit">
    </form>
    <br>
    <?php
        $grade = $_POST["grade"];
        switch($grade){
            case "A":
                echo "You did amazing!";
                break;
            case "B":
                echo "You did good!";
                break;
            case "C":
                echo "You did poorly!";
                break;
            case "D":
                echo "You did bad!";
                break;
            case "E":
                echo "You Failed!";
                break;
            default:
                echo "Invalid Grade";
        }
    ?>
    <a href='22_While_Loops.php'>按此可連結下一篇</a>
</body>
</html>