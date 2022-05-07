<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <style>
    body {
        background-image:url("blood_denote_background.jpg");
    }

    h1 {
        font-family: ‘cwTeXYen’, sans-serif;
        color: #ff007f;
    }

    h2 {
        font-family: "Comic Sans MS";
        color: #ff007f;
    }

    label {
        color: #ce680d;
    }
    </style>
</head>

<h1> Blood Donation Camp</h1>
<body>
    <div><h2>Registration Form</h2></div>
    <form action="33-1_Connect.php" method="POST">
        <label for="user"><b>Name: </b></label><br>
        <input type="text" name="name" id="name" required> <br> <br> <!-- required代表強制填寫這個textbox -->

        <label for="email"><b>Email: </b></label><br>
        <input type="email" name="email" id="email" required> <br> <br> <!-- 注意type是email -->

        <label for="phone"><b>Phone: </b></label><br>
        <input type="text" name="phone" id="phone" required> <br> <br>

        <label for="bgroup"><b>Blood Group: </b></label><br>
        <input type="text" name="bgroup" id="bgroup" required> <br> <br>

        <input type="submit" name="submit" id="submit" />
    </form>
</body>
</html>