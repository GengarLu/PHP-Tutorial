<?php
    $host = "localhost";
    $username = "root";
    $password = "";
    $dbname = "ecommerce";
    $port = "8887";

    $conn = mysqli_connect($host, $username, $password, $dbname, $port);

    $sql = "SELECT * FROM products WHERE featured = 3";

    $featured = $conn->query($sql);
?>

<div class="col-md-2"></div>

<div class="col-md-8">
    <div class="row">
        <h2 class="text-center">Products Detail:</h2>
        <?php
        while ($product = mysqli_fetch_assoc($featured)) :

        ?>
            <div class="col-md-5">
                <h4><b><?= $product['title']; ?></b></h4>
                <img src="<?= $product['image']; ?>" alt="<?= $product['image']; ?>" width="500" height="400" />
                <p class="lprice">價格: NT$ <?= $product['price']; ?></p>
                <p class="desc">描述: <?= $product['description']; ?></p>
                <p class="bname">品牌: <?= $product['brandname']; ?></p>
            </div>
        <?php endwhile; ?>
    </div>
</div>