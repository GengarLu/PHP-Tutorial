<?php
    include ("config.php"); //用來連接config.php和create.php的連接

    //id會自動實現
    if (isset($_POST['submit'])){
        $first_name = $_POST['firstname'];
        $last_name = $_POST['lastname'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $gender = $_POST['gender'];

        $sql = "INSERT INTO users (firstname, lastname, email, password, gender) VALUE ('$first_name', '$last_name', '$email', '$password', '$gender')";

        $result = $conn->query($sql);

        if ($result == TRUE){
            echo "New record created successfully.";
        }else{
            echo "Error:" . $sql . "<br>" . $conn->error;
        }

        $conn->close();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Page</title>
</head>
<body>
    <h2>Signup Form</h2>

    <form action="" method="POST">
        <!-- <fieldset>標籤(tag)用來對表單(form)中的控制元件做分組 (group)，
        而<legend>標籤通常是<fieldset>裡面的第一個元素作為該分組的標題(caption)。 -->
        <fieldset>
            <legend> Personal Information:</legend>
            First name:<br>
            <input type="text" name="firstname" id="firstname">
            <br>
            Last name:<br>
            <input type="text" name="lastname" id="lastname">
            <br>
            Email:<br>
            <input type="email" name="email" id="email">
            <br>
            Password:<br>
            <input type="password" name="password" id="password">
            <br>
            Gender:<br>
            <input type="radio" name="gender" value="Male">Male
            <input type="radio" name="gender" value="Female">Female
            <br><br>
            <input type="submit" name="submit" value="submit">
        </fieldset>
    </form>
    <a href='read.php'>Back to Read</a>
</body>
</html>