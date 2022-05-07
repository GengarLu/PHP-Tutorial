<?php
    session_start();

    session_unset(); //是登出所有的session變數,並且結束session會話

    session_destroy(); //並不登出session變數,但把所有的session變數的值清空

    header("location: index.php");
?>