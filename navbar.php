<?php require_once("control\dashboard\includes\config.php"); ?>
<?php require_once("control\dashboard\includes/functions.php"); ?>
<?php $headOfficeDetails = get_head_office_details() ?>
<!-- ==========================-->
        <!-- MOBILE MENU-->
        <!-- ==========================-->
        <div data-off-canvas="mobile-slidebar left overlay">
            <a class="navbar-brand scroll" href="./"><img class="scroll-logo" src="assets/media/general/logo-light.png" alt="logo"></a>


            <ul class="navbar-nav">
                <li class="nav-item active"><a class="nav-link" href="index.php">Home<span class="sr-only">(current)</span></a></li>
                <!-- <li class="nav-item "><a class="nav-link">Inventory</a>


                    <ul>
                        <li><a class="dropdown-item" href="inventory-list.php">Inventory list</a></li>
                        <li><a class="dropdown-item" href="inventory-grid.php">Inventory grid</a><a class="dropdown-item" href="dealers.php">Dealers list</a></li>
                        <li><a class="dropdown-item" href="dealers-info.php">Dealers info</a></li>
                    </ul>


                </li> -->
                <li class="nav-item"><a class="nav-link" href="inventory-list.php">Search</a></li>
                <li class="nav-item"><a class="nav-link" href="about.php">About</a></li>

                <!-- <li class="nav-item "><a class="nav-link" href="#">Pages</a>

                    <ul>
                        <li><a class="dropdown-item" href="typography.php">Typography</a></li>

                    </ul>
                </li>
                <li class="nav-item"><a class="nav-link" href="#">News</a>

                    <ul>
                        <li><a class="dropdown-item" href="blog-main.php">Blog main</a></li>
                        <li><a class="dropdown-item" href="blog-post.php">Blog post</a></li>
                    </ul>
                </li> -->
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
                                        <li class="top-bar__item"><a class="top-bar__link" href="mailto:support@domain.com"><?php echo($headOfficeDetails['first_email']) ?></a></li>
                                        <li class="top-bar__item">Mon to Fri : 9:00am to 6:00pm</li>
                                        <li class="top-bar__item"><?php echo($headOfficeDetails['address']) ?></li>
                                    </ul><a class="btn btn-primary btn-sm col-auto" href="./control/dashboard/user-add-listing.php"><i class="ic icon-list"></i> Add Listings</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header-main">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-2 col-auto">
                                <a class="navbar-brand scroll" href="index.php"><img class="normal-logo" src="assets/media/general/print_logo (1).png" alt="logo"></a>
                            </div>
                            <div class="col-lg-auto col">
                                <div class="header-contacts d-none d-md-block d-lg-none d-xl-block"><i class="ic text-primary icon-call-in"></i><span class="header-contacts__inner">Call Us Today!<a class="header-contacts__number" href="tel:<?php echo($headOfficeDetails['first_phone_no']) ?>">+91 <?php echo($headOfficeDetails['first_phone_no']) ?></a></span></div>
                                <!-- Mobile Trigger Start-->
                                <button class="menu-mobile-button js-toggle-mobile-slidebar toggle-menu-button d-lg-none"><i class="toggle-menu-button-icon"><span></span><span></span><span></span><span></span><span></span><span></span></i></button>
                                <!-- Mobile Trigger End-->
                            </div>
                            <div class="col-lg d-none d-lg-block">
                                <nav class="navbar navbar-expand-md justify-content-end" id="nav">
                                    <ul class="yamm main-menu navbar-nav">
                                        <li class="nav-item active"><a class="nav-link" href="index.php">Home<span class="sr-only">(current)</span></a></li>
                                        <!-- <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" id="navbarDropdown2" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Inventory</a>
                                            <div class="dropdown-menu" aria-labelledby="navbarDropdown2">
                                                <a class="dropdown-item" href="inventory-list.php">Inventory list</a>
                                                <a class="dropdown-item" href="inventory-grid.php">Inventory grid</a>
                                                <a class="dropdown-item" href="vehicle-details.php">Vehicle details</a>
                                                <a class="dropdown-item" href="dealers.php">Dealers list</a>
                                                <a class="dropdown-item" href="dealers-info.php">Dealers info</a></div>
                                        </li> -->

                                        <li class="nav-item"><a class="nav-link" href="inventory-list.php">Search</a></li>
                                        <li class="nav-item"><a class="nav-link" href="about.php">About</a></li>

                                        <!-- <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" id="navbarDropdown1" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pages</a>
                                            <div class="dropdown-menu" aria-labelledby="navbarDropdown1"><a class="dropdown-item" href="typography.php">Typography</a></div>
                                        </li> -->
                                        <!-- <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" id="navbarDropdown4" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">News</a>
                                            <div class="dropdown-menu" aria-labelledby="navbarDropdown4"><a class="dropdown-item" href="blog-main.php">Blog main</a><a class="dropdown-item" href="blog-post.php">Blog post</a></div>
                                        </li> -->
                                        <li class="nav-item"><a class="nav-link" href="contacts.php">Contact</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- end .header-->