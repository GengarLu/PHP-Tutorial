<?php
    include ("config.php");

    if (isset($_POST['update'])){
        $user_id = $_GET['id']; //注意要用GET
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $gender = $_POST['gender'];
        $password = $_POST['password'];

        $sql = "UPDATE users SET firstname = '$firstname', lastname = '$lastname', email = '$email', password = '$password', gender = '$gender' WHERE id = '$user_id'";

        $result = $conn->query($sql);

        if ($result == TRUE){
            echo "Record Updated Successfully";
        }else{
            echo "Error:" . $sql . "<br>" . $conn->error;
        }
    }

    if (isset($_GET['id'])){
        $user_id = $_GET['id'];
        $sql = "SELECT * FROM users WHERE id = '$user_id'";
        $result = $conn->query($sql);

        //檢查資料庫中是否存在資料，如果有將獲取它們
        if ($result->num_rows>0){
            while($row = $result->fetch_assoc()){
                $first_name = $row['firstname'];
                $last_name = $row['lastname'];
                $email = $row['email'];
                $password = $row['password'];
                $gender = $row['gender'];
                $id = $row['id'];
            }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Page</title>
</head>
<body>
    <h2>User Update Form</h2>

    <form action="" method="POST">
        <!-- <fieldset>標籤(tag)用來對表單(form)中的控制元件做分組 (group)，
        而<legend>標籤通常是<fieldset>裡面的第一個元素作為該分組的標題(caption)。 -->
        <fieldset>
            <legend> Personal Information:</legend>
            First name:<br>
            <input type="text" name="firstname" value="<?php echo $first_name; ?>">
            <input type="hidden" name="user_id" value="<?php echo $id; ?>">
            <br>
            Last name:<br>
            <input type="text" name="lastname" value="<?php echo $last_name; ?>">
            <br>
            Email:<br>
            <input type="email" name="email" value="<?php echo $email; ?>">
            <br>
            Password:<br>
            <input type="password" name="password" value="<?php echo $password; ?>">
            <br>
            Gender:<br>
            <input type="radio" name="gender" value="Male" <?php if($gender == "Male"){echo "checked";} ?>>Male
            <input type="radio" name="gender" value="Female" <?php if($gender == "Female"){echo "checked";} ?>>Female
            <br><br>
            <input type="submit" name="update" value="update">
        </fieldset>
    </form>
    <a href='read.php'>Back to Read</a>
</body>
</html>

<?php
        } else{
            //if the 'id' value isn't valid, redirect the user back to read.php page
            header("Location: read.php");
        }
    }
?>