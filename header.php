<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./assets/css/swiper-bundle.min.css" />
    <link rel="stylesheet" href="./assets/css/slick.css"/>
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/reset.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/responsive.css">
    <link rel="shortcut icon" href="./assets/images/fev-icon.png" type="image/x-icon">
    <title>Geovanni</title>
</head>
<body>



<header class="header">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="header-inner">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-4 col-lg-2">
                            <a class="text-decoration-none" href=".">
                                <img class="img-fluid header-logo" src="./assets/images/logo.png" alt="">
                            </a>
                        </div>
                        <div class="col-12 col-lg-6 res-order-1">
                            <nav class="header-navigation">
                                <button class="navigation-cls-btn" type="button">
                                    <i class="fa-solid fa-xmark"></i>
                                </button>
                                <ul class="header-link-area">
                                    <li class="header-link first-li">
                                        <a class="text-decoration-none" href=".">
                                            Home
                                        </a>
                                    </li>
                                    <li class="header-link">
                                        <a class="text-decoration-none" href="about-us.php">
                                            About Us
                                        </a>
                                    </li>
                                    <li class="header-link">
                                        <a class="text-decoration-none" href="our-services.php">
                                            Services
                                        </a>
                                    </li>
                                    <li class="header-link">
                                        <a class="text-decoration-none" href="#">
                                            Blogs
                                        </a>
                                    </li>
                                    <li class="header-link">
                                        <a class="text-decoration-none" href="products.php">
                                            Products
                                        </a>
                                    </li>
                                    <li class="header-link">
                                        <a class="text-decoration-none" href="reviews.php">
                                            Reviews
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <div class="col-8 col-lg-2">
                            <div class="header-right-area">
                                <div class="">
                                    <button type="button" class="cart-search-btn srch-opn-btn">
                                        <i class="fa-solid fa-magnifying-glass"></i>
                                    </button>
                                </div>
                                <div class="">
                                    <a class="text-decoration-none cart-search-btn" href="#">
                                        <i class="fa-solid fa-cart-plus"></i>
                                    </a>
                                </div>
                                <div class="">
                                    <a class="text-decoration-none login-link" href="#">
                                        <i class="fa-solid fa-user"></i>
                                        Log In
                                    </a>
                                </div>
                                <div class="">
                                    <button class="menu-btn" type="button">
                                        <i class="fa-solid fa-bars"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>


<script>
    const menuBtn = document.querySelector('.menu-btn')
    const menuBar = document.querySelector('.header-navigation')
    const menuClsBtn = document.querySelector('.navigation-cls-btn')

    menuBtn.addEventListener('click' , () => {
        menuBar.classList.add('active')
    })
    menuClsBtn.addEventListener('click' , () => {
        menuBar.classList.remove('active')
    })
</script>