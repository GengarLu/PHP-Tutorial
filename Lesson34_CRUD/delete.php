<?php
    include "config.php";

    if (isset($_GET['id'])){
        $user_id = $_GET['id'];

        $sql = "DELETE FROM users WHERE id = '$user_id'";

        $result = $conn->query($sql);

        if ($result == TRUE){
            echo "Record Deleted Successfully" . "<br>";
        }else{
            echo "Error:" . $sql . "<br>" . $conn->error;
        }
    }
?>
<a href='read.php'>Back to Read</a>