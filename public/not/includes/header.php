<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Favicon Ico -->
    <link rel="icon" type="image/jpeg" href="img/gamdlp.jpeg" />
    <title>Tambolacteo | G.A.M.L.P.</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="css/custom.css" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Humberger Begin -->
    <div class="humberger__menu__overlay"></div>
    <div class="humberger__menu__wrapper">
        <div class="humberger__menu__logo">
            <a href="index.php">
                <h3>TamboLacteo</h3>
            </a>
        </div>
        <div class="humberger__menu__cart">
            <!-- <ul>
                <li><a href="#"><i class="fa fa-shopping-bag"></i> <span id="total-carrito">3</span></a></li>
            </ul>
            <div class="header__cart__price">Total: <span>BS. 150.00</span></div> -->
        </div>
        <div class="humberger__menu__widget">
            <!-- <div class="header__top__right__language">
                <img src="img/language.png" alt="">
                <div>English</div>
                <span class="arrow_carrot-down"></span>
                <ul>
                    <li><a href="#">Spanis</a></li>
                    <li><a href="#">English</a></li>
                </ul>
            </div> -->
            <div class="header__top__right__auth">
                <a href="#"><i class="fa fa-user"></i> Acceder</a>
            </div>
        </div>
        <?php
        $url = $_SERVER['REQUEST_URI'];
        // echo $url;
        ?>
        <nav class="humberger__menu__nav mobile-menu">
            <ul>
                <li class="<?= $url === '/' ? 'active' : '' ?>"><a href="index.php">Inicio</a></li>
                <li class="<?= $url === '/tienda.php' ? 'active' : '' ?>"><a href="tienda.php">Tienda</a>
                    <ul class="header__menu__dropdown">
                        <li><a href="./shop-details.html">Leches</a></li>
                        <li><a href="./shoping-cart.html">Yogures</a></li>
                        <li><a href="./checkout.html">Quesos</a></li>
                        <li><a href="./blog-details.html">Otros</a></li>
                    </ul>
                </li>
                <li class="<?= $url === '/proveedores.php' ? 'active' : '' ?>"><a href="proveedores.php">Proveedores</a></li>
                <li><a href="./blog.html">Nosotros</a></li>
                <li><a href="./contact.html">Contacto</a></li>
            </ul>
        </nav>
        <div id="mobile-menu-wrap"></div>
        <div class="header__top__right__social">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-linkedin"></i></a>
            <a href="#"><i class="fa fa-pinterest-p"></i></a>
        </div>
        <div class="humberger__menu__contact">
            <ul>
                <li><i class="fa fa-envelope"></i> tambolacteo@gmail.com</li>
                <!-- <li>Escribenos a nuestro correo electrónico</li> -->
            </ul>
        </div>
    </div>
    <!-- Humberger End -->

    <!-- Header Section Begin -->
    <header class="header shadow-lg p-3 mb-5 bg-white rounded fixed-top navbar-shrink">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__left">
                            <ul>
                                <li><i class="fa fa-envelope"></i> tambolacteo@gmail.com</li>
                                <!-- <li>Escribenos a nuestro correo electrónico</li> -->
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__right">
                            <div class="header__top__right__social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                <a href="#"><i class="fa fa-pinterest-p"></i></a>
                            </div>
                            <!-- <div class="header__top__right__language">
                                <img src="img/language.png" alt="">
                                <div>English</div>
                                <span class="arrow_carrot-down"></span>
                                <ul>
                                    <li><a href="#">Spanis</a></li>
                                    <li><a href="#">English</a></li>
                                </ul>
                            </div> -->
                            <div class="header__top__right__auth">
                                <a href="#"><i class="fa fa-user"></i> Acceder</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row d-flex justify-content-between align-items-center">
                <div class="col-lg-3">
                    <div class="header__logo">
                        <h3><strong>TamboLacteo</strong></h3>
                    </div>
                </div>
                <div class="col-lg-7">
                    <nav class="header__menu w-100">
                        <ul class="w-100">
                            <li class="<?= $url === '/' || $url === '/index.php' ? 'active' : '' ?>"><a href="index.php">Inicio</a></li>
                            <li class="<?= $url === '/tienda.php' ? 'active' : '' ?>"><a href="tienda.php">Tienda</a>
                                <ul class="header__menu__dropdown">
                                    <li><a href="#">Leches</a></li>
                                    <li><a href="#">Yogures</a></li>
                                    <li><a href="#">Quesos</a></li>
                                    <li><a href="#">Otros</a></li>
                                </ul>
                            </li>

                            <li class="<?= $url === '/proveedores.php' ? 'active' : '' ?>"><a href="proveedores.php">Proveedores</a></li>
                            <li><a href="./blog.html">Nosotros</a></li>
                            <li class="<?= $url === '/contacto.php' ? 'active' : '' ?>"><a href="contacto.php">Contacto</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-2 d-none d-lg-block">
                    <img src="img/gamdlp.jpeg" alt="" class="logo-gamdpl">
                </div>
                <!-- <div class="col-lg-1">
                    <div class="header__cart">
                        <ul>
                            <li><a href="#"><i class="fa fa-heart"></i> <span>1</span></a></li>
                            <li><a href="#"><i class="fa fa-shopping-bag"></i> <span>3</span></a></li>
                            <li class="header__cart__price text-center">Total: <span>$150.00</span></li>
                        </ul>

                    </div>
                </div> -->
            </div>
            <div class="humberger__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>
    <!-- Header Section End -->