<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Photo Gallery</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <!-- jQuery library -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Photo Gallery</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
                            Categories
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#nature">Nature</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#architecture">Architecture</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#travel">Travel</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                </ul>
                <!-- Search的textbox和Search的button
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form> -->
            </div>
        </div>
    </nav>

    <div class="bd-example">
        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="images/architecture_4.jpg" class="d-block w-100" alt="Architecture">
                    <div class="carousel-caption d-none d-md-block">
                        <h3>Architecture</h3>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="images/nature_4.jpg" class="d-block w-100" alt="Nature">
                    <div class="carousel-caption d-none d-md-block">
                        <h3>Nature</h3>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="images/travel_4.jpg" class="d-block w-100" alt="Travel">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Travel</h5>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

    <a id="architecture">
        <section class="my-4">
            <div class="py-4">
                <h2 class="text-center">Architecture</h2>
            </div>
            <!--流線型-->
            <div class="container-fluid">
                <!--以列排序-->
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-12">
                        <!-- pb-3底部填充3 -->
                        <img src="images/architecture_1.jpg" class="img-fluid pb-3">
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                        <img src="images/architecture_2.jpg" class="img-fluid pb-3">
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                        <img src="images/architecture_3.jpg" class="img-fluid pb-3">
                    </div>
                </div>
            </div>
        </section>
    </a>

    <a id="nature">
        <section class="my-4">
            <div class="py-4">
                <h2 class="text-center">Nature</h2>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-12">
                        <img src="images/nature_1.jpg" class="img-fluid pb-3">
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                        <img src="images/nature_2.jpg" class="img-fluid pb-3">
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                        <img src="images/nature_3.jpg" class="img-fluid pb-3">
                    </div>
                </div>
            </div>
        </section>
    </a>

    <a id="travel">
        <section class="my-4">
            <div class="py-4">
                <h2 class="text-center">Travel</h2>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-12">
                        <img src="images/travel_1.jpg" class="img-fluid pb-3">
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                        <img src="images/travel_2.jpg" class="img-fluid pb-3">
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                        <img src="images/travel_3.jpg" class="img-fluid pb-3">
                    </div>
                </div>
            </div>
        </section>
    </a>

    <a id="contact">
        <section class="my-4">
            <div class="py-4">
                <h2 class="text-center">Contact Us</h2>
            </div>
            <!-- 管理列的寬度和邊距 -->
            <div class="w-50 m-auto">
                <form action="about.php" method="post">
                    <div class="form-group">
                        <label>Name:</label>
                        <input type="text" name="name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Email:</label>
                        <input type="email" name="email" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Number:</label>
                        <input type="text" name="number" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-success">Submit</button>
                </form>
            </div>
        </section>
    </a>

    <a id="about">
        <section class="my-4">
            <div class="py-4">
                <h2 class="text-center">About</h2>
            </div>
            <div class="container-fluid">
                <h3 class="text-center">Author: Allen</h3><br>
                <p class="text-center">
                    <b>I am a passionate photographer interested in working in Architecture, Nature and Travel Photography.<br>I am a student but interested in photography.</b>
                </p>
            </div>
        </section>
    </a>
</body>

</html>