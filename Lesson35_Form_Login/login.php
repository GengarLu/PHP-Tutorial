<!-- Session介紹 : https://www.webtech.tw/info.php?tid=33 -->
<?php
    session_start(); 

    include "db_conn.php";

    if (isset($_POST['uname']) && isset($_POST['password'])) {
        //驗證表單輸入的資料
        function validate($data){
            //用來刪除字串前後的空白區域，對於字串過濾使用上相當方便。
            $data = trim($data);
            //消去字串中的反斜線，通常用於整理從資料庫撈出來的資料
            $data = stripslashes($data);
            /*
            用來轉換 HTML 特殊符號為僅能顯示用的編碼，舉例來說，HTML 的大於（>）小於（<）符號、
            單引號（'）或雙引號（""）都可以轉換為僅能閱讀的 HTML 符號，這是什麼意思呢？
            就是將 HTML 符號變成不可執行的符號，例如有人利用網站表單輸入一些清除資料庫的語法或
            塞入後門程式，通常都會用到一些特殊符號，為了安全起見，所有表單傳遞的資料都應該利用
            htmlspecialchars函數做第一層的把關。
            */
            $data = htmlspecialchars($data);
            return $data;
        }

        //用來驗證username & password有無任何拼寫錯誤的變數
        $uname = validate($_POST['uname']);
        $pass = validate($_POST['password']);

        if (empty($uname)) {
            header("Location: index.php?error=User Name is required");
            exit();

        }else if(empty($pass)){
            header("Location: index.php?error=Password is required");
            exit();
        }else{
            $sql = "SELECT * FROM users WHERE user_name='$uname' AND password='$pass'";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) === 1) {
                $row = mysqli_fetch_assoc($result);

                if ($row['user_name'] === $uname && $row['password'] === $pass) {
                    echo "Logged in!";
                    $_SESSION['user_name'] = $row['user_name'];
                    $_SESSION['name'] = $row['name'];
                    $_SESSION['id'] = $row['id'];
                    header("Location: home.php");
                    exit();

                }else{
                    header("Location: index.php?error=Incorect User name or password");
                    exit();
                }

            }else{
                header("Location: index.php?error=Incorect User name or password");
                exit();
            }

        }

    }else{
        header("Location: index.php");
        exit();
    }
?>