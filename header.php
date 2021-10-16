<?php require_once("control\otdo-panel\includes/config.php"); ?>
<?php require_once("control\otdo-panel\includes/functions.php"); ?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Template</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="telephone=no" name="format-detection">
    <meta name="HandheldFriendly" content="true">
    <link rel="stylesheet" href="assets/css/master.css">
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="assets/css/custom.css" rel="stylesheet" type="text/css">
    <!--[if lt IE 9 ]>
<script src="/assets/js/separate-js/html5shiv-3.7.2.min.js" type="text/javascript"></script><meta content="no" http-equiv="imagetoolbar">
<![endif]-->
</head>

<body class="page">


    <!-- Loader-->
    <div id="page-preloader"><span class="spinner border-t_second_b border-t_prim_a"></span></div>
    <!-- Loader end-->


    <div class="l-theme animated-css animsition" data-header="sticky" data-header-top="200">
        <!-- ==========================-->
        <!-- MOBILE MENU-->
        <!-- ==========================-->
        <div data-off-canvas="mobile-slidebar left overlay">
            <a class="navbar-brand scroll" href="index.php"><img class="scroll-logo" src="assets/media/general/logo-light.png" alt="logo"></a>


            <ul class="navbar-nav">
                <li class="nav-item active"><a class="nav-link" href="index.php">Home<span class="sr-only">(current)</span></a></li>
                <li class="nav-item "><a class="nav-link">Inventory</a>


                    <ul>
                        <li><a class="dropdown-item" href="inventory-list.php">Inventory list</a></li>
                        <li><a class="dropdown-item" href="inventory-grid.php">Inventory grid</a><a class="dropdown-item" href="dealers.php">Dealers list</a></li>
                        <li><a class="dropdown-item" href="dealers-info.php">Dealers info</a></li>
                    </ul>


                </li>
                <li class="nav-item"><a class="nav-link" href="about.php">About</a></li>

                <li class="nav-item "><a class="nav-link" href="#">Pages</a>

                    <ul>
                        <li><a class="dropdown-item" href="typography.php">Typography</a></li>

                    </ul>
                </li>
                <li class="nav-item"><a class="nav-link" href="#">News</a>

                    <ul>
                        <li><a class="dropdown-item" href="blog-main.php">Blog main</a></li>
                        <li><a class="dropdown-item" href="blog-post.php">Blog post</a></li>
                    </ul>
                </li>
                <li class="nav-item"><a class="nav-link" href="contacts.php">Contact</a></li>
            </ul>

        </div>
        <div data-canvas="container">

            <header class="header">
                <div class="top-bar d-none d-xl-block">
                    <div class="container">
                        <div class="row">
                            <div class="col offset-2">
                                <div class="top-bar__inner row justify-content-between align-items-center">
                                    <ul class="top-bar__list list-unstyled col">
                                        <li class="top-bar__item"><a class="top-bar__link" href="mailto:support@domain.com">support@domain.com</a></li>
                                        <li class="top-bar__item">Mon to Fri : 9:00am to 6:00pm</li>
                                        <li class="top-bar__item">Fairview Ave, El Monte, CA 91732</li>
                                    </ul><a class="btn btn-primary btn-sm col-auto" href="#"><i class="ic icon-list"></i> Add Listings</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header-main">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-2 col-auto">
                                <a class="navbar-brand scroll" href="index.php"><img class="normal-logo" src="assets/media/general/logo.png" alt="logo"></a>
                            </div>
                            <div class="col-lg-auto col">
                                <div class="header-contacts d-none d-md-block d-lg-none d-xl-block"><i class="ic text-primary icon-call-in"></i><span class="header-contacts__inner">Call Us Today!<a class="header-contacts__number" href="tel:+17553028549">+1 755 302 8549</a></span></div>
                                <!-- Mobile Trigger Start-->
                                <button class="menu-mobile-button js-toggle-mobile-slidebar toggle-menu-button d-lg-none"><i class="toggle-menu-button-icon"><span></span><span></span><span></span><span></span><span></span><span></span></i></button>
                                <!-- Mobile Trigger End-->
                            </div>
                            <div class="col-lg d-none d-lg-block">
                                <nav class="navbar navbar-expand-md justify-content-end" id="nav">
                                    <ul class="yamm main-menu navbar-nav">
                                        <li class="nav-item active"><a class="nav-link" href="index.php">Home<span class="sr-only">(current)</span></a></li>
                                        <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" id="navbarDropdown2" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Inventory</a>
                                            <div class="dropdown-menu" aria-labelledby="navbarDropdown2"><a class="dropdown-item" href="inventory-list.php">Inventory list</a><a class="dropdown-item" href="inventory-grid.php">Inventory grid</a><a class="dropdown-item" href="dealers.php">Dealers list</a><a class="dropdown-item" href="dealers-info.php">Dealers info</a></div>
                                        </li>

                                        <li class="nav-item"><a class="nav-link" href="about.php">About</a></li>

                                        <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" id="navbarDropdown1" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pages</a>
                                            <div class="dropdown-menu" aria-labelledby="navbarDropdown1"><a class="dropdown-item" href="typography.php">Typography</a></div>
                                        </li>
                                        <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" id="navbarDropdown4" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">News</a>
                                            <div class="dropdown-menu" aria-labelledby="navbarDropdown4"><a class="dropdown-item" href="blog-main.php">Blog main</a><a class="dropdown-item" href="blog-post.php">Blog post</a></div>
                                        </li>
                                        <li class="nav-item"><a class="nav-link" href="contacts.php">Contact</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </header>