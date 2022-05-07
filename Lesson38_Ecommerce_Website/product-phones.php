<?php
    $host = "localhost";
    $username = "root";
    $password = "";
    $dbname = "ecommerce";
    $port = "8887";

    $conn = mysqli_connect($host, $username, $password, $dbname, $port);

    $sql = "SELECT * FROM products WHERE featured = 3 OR featured = 4";

    $featured = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tech E-commerce</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- jQuery是一套跨瀏覽器的JavaScript函式庫，用於簡化HTML與JavaScript之間的操作。 -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>

<body>
    <!-- 可由這抓取源碼:https://bootstrap5.hexschool.com/docs/5.0/components/navbar/ -->
    <!-- Navbar是Bootstrap 強大的響應式導覽列(功能選單)之文件和範例。 -->
    <!--light改成dark-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <!-- Navbar改成Tech E-commerce -->
        <a class="navbar-brand" href="#">Tech E-commerce</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-2">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <!-- Dropdown改成Products -->
                        Products
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <!-- 改成 Laptops & Phones -->
                        <a class="dropdown-item" href="product-laptops.php">Laptops</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="product-phones.php">Phones</a>
                    </div>
                </li>
            </ul>
            <!-- Search的textbox和Search的button 
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form> -->
        </div>
    </nav>

    <div class="col-md-2"></div>

    <div class="col-md-8">
        <div class="row">
            <h2 class="text-center">Top Products</h2><br><br>
            <?php
            while ($product = mysqli_fetch_assoc($featured)) :

            ?>
                <div class="col-md-5">
                    <h4><?= $product['title']; ?></h4>
                    <img src="<?= $product['image']; ?>" alt="<?= $product['image']; ?>" width="500" height="350" />
                    <p class="lprice">NT$ <?= $product['price']; ?></p>
                    <?php
                    if ($product['featured'] == 3) :
                    ?>
                        <a href="details3.php">
                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#details-1">More</button>
                        </a>
                    <?php
                    else :
                    ?>
                        <a href="details4.php">
                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#details-1">More</button>
                        </a>
                    <?php endif; ?>
                </div>
            <?php endwhile; ?>
        </div>
    </div>
</body>

</html>