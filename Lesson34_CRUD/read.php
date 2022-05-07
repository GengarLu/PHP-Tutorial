<?php
    include ("config.php");

    $sql = "SELECT * FROM users"; //從用戶表中獲取資料

    $result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Read Page</title>
    <link rel="stylesheet" 
    href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2>users</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Gender</th>
                    <th>Action</th> //操作、動作
                </tr>
            </thead>
            <tbody>
                <?php
                    //檢查資料庫中是否存在資料，如果有將獲取它們
                    if ($result->num_rows>0){
                        while($row = $result->fetch_assoc()){
                ?>
                            <tr>
                                <td><?php echo $row['id']; ?></td>
                                <td><?php echo $row['firstname']; ?></td>
                                <td><?php echo $row['lastname']; ?></td>
                                <td><?php echo $row['email']; ?></td>
                                <td><?php echo $row['gender']; ?></td>
                                <td>
                                    <!-- btn-info是淺藍色button，btn-danger是紅色button -->
                                    <a class="btn btn-info" href="update.php?id=<?php echo $row['id']; ?>">Edit</a>
                                    &nbsp;
                                    <a class="btn btn-danger" href="delete.php?id=<?php echo $row['id']; ?>">Delete</a>
                                </td>
                            </tr>
                <?php
                        }
                    }
                ?>
            </tbody>
        </table>
        <a href='create.php'>Create Data</a>
    </div>
</body>
</html>