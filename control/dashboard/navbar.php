<header class="header">
    <div class="header__inner">
        <div class="container-fluid">
            <div class="header__row row justify-content-between">
                <div class="header__col-left col d-flex align-items-center">
                    <div class="header__left-toggle">
                        <button class="header__toggle-menu toggle-sidebar" type="button">
                            <svg class="icon-icon-menu">
                                <use xlink:href="#icon-menu"></use>
                            </svg>
                        </button>
                        <button class="header__toggle-search toggle-search">
                            <svg class="icon-icon-search">
                                <use xlink:href="#icon-search"></use>
                            </svg>
                        </button>
                    </div>
                    <div class="header__search">
                        <!-- <form class="form-search" action="#" method="GET">
                            <div class="form-search__container"><span class="form-search__icon-left">
                                    <svg class="icon-icon-search">
                                        <use xlink:href="#icon-search"></use>
                                    </svg></span>
                                <input class="form-search__input" type="text" placeholder="Search..." />
                            </div>
                        </form> -->
                    </div>
                </div>
                <div class="header__col-right col d-flex align-items-center">
                    <div class="header__language dropdown">
                        <button class="header__toggle-language" type="button" data-toggle="dropdown" data-tippy-content="Language" data-tippy-placement="bottom">
                            <svg class="icon-icon-language">
                                <use xlink:href="#icon-language"></use>
                            </svg> <span class="icon-arrow-down">
                                <svg class="icon-icon-arrow-down">
                                    <use xlink:href="#icon-arrow-down"></use>
                                </svg></span>
                        </button>
                        <div class="lang-menu dropdown-menu">
                            <button class="lang-menu__button dropdown-menu__item" tabindex="0">
                                <img class="lang-menu__icon" src="img/content/flags/us.svg" alt="#" /><span class="lang-menu__text">En</span>
                            </button>
                            <button class="lang-menu__button dropdown-menu__item" tabindex="0">
                                <img class="lang-menu__icon" src="img/content/flags/gb.svg" alt="#" /><span class="lang-menu__text">Gb</span>
                            </button>
                            <button class="lang-menu__button dropdown-menu__item" tabindex="0">
                                <img class="lang-menu__icon" src="img/content/flags/ru.svg" alt="#" /><span class="lang-menu__text">Ru</span>
                            </button>
                            <button class="lang-menu__button dropdown-menu__item" tabindex="0">
                                <img class="lang-menu__icon" src="img/content/flags/cn.svg" alt="#" /><span class="lang-menu__text">Cn</span>
                            </button>
                            <div class="lang-menu__separate"></div><a class="lang-menu__button lang-menu__button--all dropdown-menu__item" href="#" tabindex="0">Learn</a>
                        </div>
                    </div>
                    <div class="header__tools">
                        <div class="header__notes header__tools-item">
                            <a class="header__tools-toggle header__tools-toggle--message" href="#" data-tippy-content="Notifications" data-tippy-placement="bottom" data-toggle="dropdown">
                                <svg class="icon-icon-message">
                                    <use xlink:href="#icon-message"></use>
                                </svg> <span class="badge-signal"></span>
                            </a>
                            <div class="dropdown-menu">
                                <div class="dropdown-menu__top dropdown-menu__item"><span class="dropdown-menu__title">Notifications</span><span class="badge badge--red">5</span><a class="dropdown-menu__clear-all" href="#" role="button">Clear All</a>
                                </div>
                                <div class="dropdown-menu__items scrollbar-thin scrollbar-visible" data-simplebar="data-simplebar">
                                    <div class="dropdown-menu__item">
                                        <a class="dropdown-menu__item-remove" href="#">
                                            <svg class="icon-icon-cross">
                                                <use xlink:href="#icon-cross"></use>
                                            </svg>
                                        </a>
                                        <a class="dropdown-menu__item-block dropdown-menu__note" href="#">
                                            <div class="dropdown-menu__item-left">
                                                <div class="dropdown-menu__item-icon color-green">
                                                    <svg class="icon-icon-cart">
                                                        <use xlink:href="#icon-cart"></use>
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="dropdown-menu__item-right">
                                                <h4 class="dropdown-menu__item-title">New Order Received</h4>
                                                <span class="dropdown-menu__item-time">25 min ago</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="dropdown-menu__item">
                                        <a class="dropdown-menu__item-remove" href="#">
                                            <svg class="icon-icon-cross">
                                                <use xlink:href="#icon-cross"></use>
                                            </svg>
                                        </a>
                                        <a class="dropdown-menu__item-block dropdown-menu__note" href="#">
                                            <div class="dropdown-menu__item-left">
                                                <div class="dropdown-menu__item-icon color-orange">
                                                    <svg class="icon-icon-bill">
                                                        <use xlink:href="#icon-bill"></use>
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="dropdown-menu__item-right">
                                                <h4 class="dropdown-menu__item-title">New invoice received</h4>
                                                <span class="dropdown-menu__item-time">5 hours ago</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="dropdown-menu__item">
                                        <a class="dropdown-menu__item-remove" href="#">
                                            <svg class="icon-icon-cross">
                                                <use xlink:href="#icon-cross"></use>
                                            </svg>
                                        </a>
                                        <a class="dropdown-menu__item-block dropdown-menu__note" href="#">
                                            <div class="dropdown-menu__item-left">
                                                <div class="dropdown-menu__item-icon color-teal">
                                                    <svg class="icon-icon-truck">
                                                        <use xlink:href="#icon-truck"></use>
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="dropdown-menu__item-right">
                                                <h4 class="dropdown-menu__item-title">new batch is shipped</h4>
                                                <span class="dropdown-menu__item-time">10 hours ago</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="dropdown-menu__item">
                                        <a class="dropdown-menu__item-remove" href="#">
                                            <svg class="icon-icon-cross">
                                                <use xlink:href="#icon-cross"></use>
                                            </svg>
                                        </a>
                                        <a class="dropdown-menu__item-block dropdown-menu__note" href="#">
                                            <div class="dropdown-menu__item-left">
                                                <div class="dropdown-menu__item-icon color-green">
                                                    <svg class="icon-icon-cart">
                                                        <use xlink:href="#icon-cart"></use>
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="dropdown-menu__item-right">
                                                <h4 class="dropdown-menu__item-title">New Order Received</h4>
                                                <span class="dropdown-menu__item-time">25 min ago</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="dropdown-menu__item">
                                        <a class="dropdown-menu__item-remove" href="#">
                                            <svg class="icon-icon-cross">
                                                <use xlink:href="#icon-cross"></use>
                                            </svg>
                                        </a>
                                        <a class="dropdown-menu__item-block dropdown-menu__note" href="#">
                                            <div class="dropdown-menu__item-left">
                                                <div class="dropdown-menu__item-icon color-orange">
                                                    <svg class="icon-icon-bill">
                                                        <use xlink:href="#icon-bill"></use>
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="dropdown-menu__item-right">
                                                <h4 class="dropdown-menu__item-title">New invoice received</h4>
                                                <span class="dropdown-menu__item-time">5 hours ago</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="dropdown-menu__divider"></div><a class="dropdown-menu__item dropdown-menu__link-all" href="#">View all
                                    Notifications
                                    <svg class="icon-icon-keyboard-right">
                                        <use xlink:href="#icon-keyboard-right"></use>
                                    </svg></a>
                            </div>
                        </div>
                        <div class="header__messages header__tools-item">
                            <a class="header__tools-toggle header__tools-toggle--bell" href="#" data-tippy-content="Messages" data-tippy-placement="bottom" data-toggle="dropdown">
                                <svg class="icon-icon-bell">
                                    <use xlink:href="#icon-bell"></use>
                                </svg> <span class="badge-signal"></span>
                            </a>
                            <div class="dropdown-menu">
                                <div class="dropdown-menu__top dropdown-menu__item"><span class="dropdown-menu__title">Messages</span><span class="badge badge--red">7</span><a class="dropdown-menu__clear-all" href="#" role="button">Clear All</a>
                                </div>
                                <div class="dropdown-menu__items scrollbar-thin scrollbar-visible" data-simplebar="data-simplebar">
                                    <div class="dropdown-menu__item">
                                        <a class="dropdown-menu__item-remove" href="#">
                                            <svg class="icon-icon-cross">
                                                <use xlink:href="#icon-cross"></use>
                                            </svg>
                                        </a>
                                        <a class="dropdown-menu__item-block dropdown-menu__message" href="#">
                                            <div class="dropdown-menu__item-left">
                                                <div class="dropdown-menu__item-icon color-teal">
                                                    <div class="dropdown-menu__item-icon-text">MA</div>
                                                    <img src="img/content/humans/item-4.jpg" alt="#" />
                                                </div>
                                                <div class="badge-signal badge-signal--green"></div>
                                            </div>
                                            <div class="dropdown-menu__item-right">
                                                <div class="dropdown-menu__item-column">
                                                    <h4 class="dropdown-menu__item-title">Mark Anderson</h4>
                                                    <p class="dropdown-menu__text">Nemo enim ipsam voluptatem
                                                        Nemo enim ipsam voluptatem</p>
                                                </div><span class="dropdown-menu__item-time">25 min ago</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="dropdown-menu__item">
                                        <a class="dropdown-menu__item-remove" href="#">
                                            <svg class="icon-icon-cross">
                                                <use xlink:href="#icon-cross"></use>
                                            </svg>
                                        </a>
                                        <a class="dropdown-menu__item-block dropdown-menu__message" href="#">
                                            <div class="dropdown-menu__item-left">
                                                <div class="dropdown-menu__item-icon color-orange-dark">
                                                    <div class="dropdown-menu__item-icon-text">JT</div>
                                                    <img src="img/content/humans/item-1.jpg" alt="#" />
                                                </div>
                                                <div class="badge-signal badge-signal--green"></div>
                                            </div>
                                            <div class="dropdown-menu__item-right">
                                                <div class="dropdown-menu__item-column">
                                                    <h4 class="dropdown-menu__item-title">Jennifer Tang</h4>
                                                    <p class="dropdown-menu__text">Nemo enim ipsam voluptatem
                                                        Nemo enim ipsam voluptatem</p>
                                                </div><span class="dropdown-menu__item-time">3 hours ago</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="dropdown-menu__item">
                                        <a class="dropdown-menu__item-remove" href="#">
                                            <svg class="icon-icon-cross">
                                                <use xlink:href="#icon-cross"></use>
                                            </svg>
                                        </a>
                                        <a class="dropdown-menu__item-block dropdown-menu__message" href="#">
                                            <div class="dropdown-menu__item-left">
                                                <div class="dropdown-menu__item-icon color-orange">
                                                    <div class="dropdown-menu__item-icon-text">SA</div>
                                                    <img src="img/content/humans/item-5.jpg" alt="#" />
                                                </div>
                                                <div class="badge-signal"></div>
                                            </div>
                                            <div class="dropdown-menu__item-right">
                                                <div class="dropdown-menu__item-column">
                                                    <h4 class="dropdown-menu__item-title">Stephen Allen</h4>
                                                    <p class="dropdown-menu__text">Nemo enim ipsam voluptatem
                                                        Nemo enim ipsam voluptatem</p>
                                                </div><span class="dropdown-menu__item-time">10 hours ago</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="dropdown-menu__item">
                                        <a class="dropdown-menu__item-remove" href="#">
                                            <svg class="icon-icon-cross">
                                                <use xlink:href="#icon-cross"></use>
                                            </svg>
                                        </a>
                                        <a class="dropdown-menu__item-block dropdown-menu__message" href="#">
                                            <div class="dropdown-menu__item-left">
                                                <div class="dropdown-menu__item-icon color-red">
                                                    <div class="dropdown-menu__item-icon-text">WS</div>
                                                    <img src="img/content/humans/item-6.jpg" alt="#" />
                                                </div>
                                                <div class="badge-signal badge-signal--red"></div>
                                            </div>
                                            <div class="dropdown-menu__item-right">
                                                <div class="dropdown-menu__item-column">
                                                    <h4 class="dropdown-menu__item-title">Walter Sanders</h4>
                                                    <p class="dropdown-menu__text">Nemo enim ipsam voluptatem
                                                        Nemo enim ipsam voluptatem</p>
                                                </div><span class="dropdown-menu__item-time">30 min ago</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="dropdown-menu__item">
                                        <a class="dropdown-menu__item-remove" href="#">
                                            <svg class="icon-icon-cross">
                                                <use xlink:href="#icon-cross"></use>
                                            </svg>
                                        </a>
                                        <a class="dropdown-menu__item-block dropdown-menu__message" href="#">
                                            <div class="dropdown-menu__item-left">
                                                <div class="dropdown-menu__item-icon color-blue">
                                                    <div class="dropdown-menu__item-icon-text">SA</div>
                                                    <img src="img/content/humans/item-5.jpg" alt="#" />
                                                </div>
                                                <div class="badge-signal badge-signal--green"></div>
                                            </div>
                                            <div class="dropdown-menu__item-right">
                                                <div class="dropdown-menu__item-column">
                                                    <h4 class="dropdown-menu__item-title">Stephen Allen</h4>
                                                    <p class="dropdown-menu__text">Nemo enim ipsam voluptatem
                                                        Nemo enim ipsam voluptatem</p>
                                                </div><span class="dropdown-menu__item-time">2h hours ago</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="dropdown-menu__item">
                                        <a class="dropdown-menu__item-remove" href="#">
                                            <svg class="icon-icon-cross">
                                                <use xlink:href="#icon-cross"></use>
                                            </svg>
                                        </a>
                                        <a class="dropdown-menu__item-block dropdown-menu__message" href="#">
                                            <div class="dropdown-menu__item-left">
                                                <div class="dropdown-menu__item-icon color-green">
                                                    <div class="dropdown-menu__item-icon-text">JH</div>
                                                    <img src="img/content/humans/item-7.jpg" alt="#" />
                                                </div>
                                                <div class="badge-signal"></div>
                                            </div>
                                            <div class="dropdown-menu__item-right">
                                                <div class="dropdown-menu__item-column">
                                                    <h4 class="dropdown-menu__item-title">John Hendrix</h4>
                                                    <p class="dropdown-menu__text">Nemo enim ipsam voluptatem
                                                        Nemo enim ipsam voluptatem</p>
                                                </div><span class="dropdown-menu__item-time">8 hours ago</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="dropdown-menu__item">
                                        <a class="dropdown-menu__item-remove" href="#">
                                            <svg class="icon-icon-cross">
                                                <use xlink:href="#icon-cross"></use>
                                            </svg>
                                        </a>
                                        <a class="dropdown-menu__item-block dropdown-menu__message" href="#">
                                            <div class="dropdown-menu__item-left">
                                                <div class="dropdown-menu__item-icon color-orange">
                                                    <div class="dropdown-menu__item-icon-text">RH</div>
                                                    <img src="img/content/humans/item-8.jpg" alt="#" />
                                                </div>
                                                <div class="badge-signal badge-signal--red"></div>
                                            </div>
                                            <div class="dropdown-menu__item-right">
                                                <div class="dropdown-menu__item-column">
                                                    <h4 class="dropdown-menu__item-title">Ryan Henderson</h4>
                                                    <p class="dropdown-menu__text">Nemo enim ipsam voluptatem
                                                        Nemo enim ipsam voluptatem</p>
                                                </div><span class="dropdown-menu__item-time">5 min ago</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="dropdown-menu__divider"></div><a class="dropdown-menu__item dropdown-menu__link-all" href="#">View all
                                    Messages
                                    <svg class="icon-icon-keyboard-right">
                                        <use xlink:href="#icon-keyboard-right"></use>
                                    </svg></a>
                            </div>
                        </div>
                    </div>
                    <div class="header__profile dropdown">
                        <a class="header__profile-toggle dropdown__toggle" href="#" data-toggle="dropdown">
                            <div class="header__profile-image"><span class="header__profile-image-text">MA</span>
                                <img src="img/content/humans/item-4.jpg" alt="#" />
                            </div>
                            <div class="header__profile-text"><span>Mark Anderson</span>
                            </div><span class="icon-arrow-down">
                                <svg class="icon-icon-arrow-down">
                                    <use xlink:href="#icon-arrow-down"></use>
                                </svg></span>
                        </a>
                        <div class="profile-dropdown dropdown-menu dropdown-menu--right">
                            <a class="profile-dropdown__item dropdown-menu__item" href="#" tabindex="0">
                                <span class="profile-dropdown__icon">
                                    <svg class="icon-icon-user">
                                        <use xlink:href="#icon-user"></use>
                                    </svg>
                                </span><span>My Profile</span>
                            </a>
                            <!-- <a class="profile-dropdown__item dropdown-menu__item" href="#" tabindex="0"><span class="profile-dropdown__icon">
                                    <svg class="icon-icon-chat">
                                        <use xlink:href="#icon-chat"></use>
                                    </svg></span><span>My chat</span></a>
                            <a class="profile-dropdown__item dropdown-menu__item" href="#" tabindex="0"><span class="profile-dropdown__icon">
                                    <svg class="icon-icon-task">
                                        <use xlink:href="#icon-task"></use>
                                    </svg></span><span>Tasks</span></a>
                            <a class="profile-dropdown__item dropdown-menu__item" href="#" tabindex="0"><span class="profile-dropdown__icon">
                                    <svg class="icon-icon-settings">
                                        <use xlink:href="#icon-settings"></use>
                                    </svg></span><span>Settings</span></a> -->
                            <div class="dropdown-menu__divider"></div><a class="profile-dropdown__item dropdown-menu__item" href="./execution/logout.php" tabindex="0"><span class="profile-dropdown__icon">
                                    <svg class="icon-icon-logout">
                                        <use xlink:href="#icon-logout"></use>
                                    </svg></span><span>Logout</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<aside class="sidebar">
    <div class="sidebar__backdrop"></div>
    <div class="sidebar__container">
        <div class="sidebar__top">
            <div class="container container--sm">
                <a class="sidebar__logo" href="index.php">
                    <img class="sidebar__logo-icon" src="img/content/logotype.svg" alt="#" width="44" />
                    <div class="sidebar__logo-text">AvailCar</div>
                </a>
            </div>
        </div>
        <div class="sidebar__content" data-simplebar="data-simplebar">
            <nav class="sidebar__nav">
                <ul class="sidebar__menu">
                    <li class="sidebar__menu-item"><a class="sidebar__link" href="dashboard.php" aria-expanded="false"><span class="sidebar__link-icon">
                                <svg class="icon-icon-dashboard">
                                    <use xlink:href="#icon-dashboard"></use>
                                </svg></span><span class="sidebar__link-text">Dashboard</span></a>
                    </li>

                    <!-- <li class="sidebar__menu-item"><a class="sidebar__link " href="" data-toggle="collapse" data-target="#E-Commerce" aria-expanded="false"><span class="sidebar__link-icon">
                                <svg class="icon-icon-cart">
                                    <use xlink:href="#icon-cart"></use>
                                </svg></span><span class="sidebar__link-text">E-Commerce</span><span class="sidebar__link-arrow">
                                <svg class="icon-icon-keyboard-down">
                                    <use xlink:href="#icon-keyboard-down"></use>
                                </svg></span></a>
                        <div class="collapse" id="E-Commerce">
                            <ul class="sidebar__collapse-menu">
                                <li class="sidebar__menu-item"><a class="sidebar__link " href="products.php"><span class="sidebar__link-signal"></span><span class="sidebar__link-text">Products</span></a>
                                </li>
                                <li class="sidebar__menu-item"><a class="sidebar__link" href="product-add.php"><span class="sidebar__link-signal"></span><span class="sidebar__link-text">Add Product</span></a>
                                </li>
                                <li class="sidebar__menu-item"><a class="sidebar__link" href="orders.php"><span class="sidebar__link-signal"></span><span class="sidebar__link-text">Orders</span></a>
                                </li>
                                <li class="sidebar__menu-item"><a class="sidebar__link" href="order-details.php"><span class="sidebar__link-signal"></span><span class="sidebar__link-text">Order Details</span></a>
                                </li>
                                <li class="sidebar__menu-item"><a class="sidebar__link" href="order-invoice.php"><span class="sidebar__link-signal"></span><span class="sidebar__link-text">Order Invoice</span></a>
                                </li>
                                <li class="sidebar__menu-item"><a class="sidebar__link" href="order-status.php"><span class="sidebar__link-signal"></span><span class="sidebar__link-text">Order Status</span></a>
                                </li>
                                <li class="sidebar__menu-item"><a class="sidebar__link" href="order-history.php"><span class="sidebar__link-signal"></span><span class="sidebar__link-text">Order History</span></a>
                                </li>
                                <li class="sidebar__menu-item"><a class="sidebar__link" href="order-history.php"><span class="sidebar__link-signal"></span><span class="sidebar__link-text">Order History V.2</span></a>
                                </li>
                                <li class="sidebar__menu-item"><a class="sidebar__link" href="order-notes.php"><span class="sidebar__link-signal"></span><span class="sidebar__link-text">Order Notes</span></a>
                                </li>
                                <li class="sidebar__menu-item"><a class="sidebar__link" href="order-messages.php"><span class="sidebar__link-signal"></span><span class="sidebar__link-text">Order Messages</span></a>
                                </li>
                                <li class="sidebar__menu-item"><a class="sidebar__link" href="order-messages.php"><span class="sidebar__link-signal"></span><span class="sidebar__link-text">Order Messages V.2</span></a>
                                </li>
                                <li class="sidebar__menu-item"><a class="sidebar__link" href="customers.php"><span class="sidebar__link-signal"></span><span class="sidebar__link-text">Customers</span></a>
                                </li>
                                <li class="sidebar__menu-item"><a class="sidebar__link" href="customer-account.php"><span class="sidebar__link-signal"></span><span class="sidebar__link-text">Account</span></a>
                                </li>
                                <li class="sidebar__menu-item"><a class="sidebar__link" href="customer-account.php"><span class="sidebar__link-signal"></span><span class="sidebar__link-text">Account V.2</span></a>
                                </li>
                                <li class="sidebar__menu-item"><a class="sidebar__link" href="customer-wishlist.php"><span class="sidebar__link-signal"></span><span class="sidebar__link-text">Wish List</span></a>
                                </li>
                                <li class="sidebar__menu-item"><a class="sidebar__link" href="reviews.php"><span class="sidebar__link-signal"></span><span class="sidebar__link-text">Reviews</span></a>
                                </li>
                            </ul>
                        </div>
                    </li> -->
                    <!-- Inventory -->
                    <li class="sidebar__menu-item"><a class="sidebar__link" href="" data-toggle="collapse" data-target="#Inventory" aria-expanded="false"><span class="sidebar__link-icon">
                                <svg class="icon-icon-cart">
                                    <use xlink:href="#icon-cart"></use>
                                </svg></span><span class="sidebar__link-text">Inventory</span><span class="sidebar__link-arrow">
                                <svg class="icon-icon-keyboard-down">
                                    <use xlink:href="#icon-keyboard-down"></use>
                                </svg></span></a>
                        <div class="collapse" id="Inventory">
                            <ul class="sidebar__collapse-menu">
                                <li class="sidebar__menu-item"><a class="sidebar__link " href="./manage-make.php"><span class="sidebar__link-signal"></span><span class="sidebar__link-text">Manage Make</span></a>
                                </li>
                                <li class="sidebar__menu-item"><a class="sidebar__link" href="./manage-model.php"><span class="sidebar__link-signal"></span><span class="sidebar__link-text">Manage Model</span></a>
                                </li>
                                <li class="sidebar__menu-item"><a class="sidebar__link" href="./manage-variant.php"><span class="sidebar__link-signal"></span><span class="sidebar__link-text">Manage Variant</span></a>
                                </li>
                                <li class="sidebar__menu-item"><a class="sidebar__link" href="./manage-feature.php"><span class="sidebar__link-signal"></span><span class="sidebar__link-text">Manage Feature</span></a>
                                </li>
                                <li class="sidebar__menu-item"><a class="sidebar__link" href="./manage-listing.php"><span class="sidebar__link-signal"></span><span class="sidebar__link-text">Manage Listing </span></a>
                                </li>
                                <li class="sidebar__menu-item"><a class="sidebar__link" href="./manage-packages.php"><span class="sidebar__link-signal"></span><span class="sidebar__link-text">Manage Packages </span></a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="sidebar__menu-item"><a class="sidebar__link" href="" data-toggle="collapse" data-target="#Accounts" aria-expanded="false"><span class="sidebar__link-icon">
                                <svg class="icon-icon-cart">
                                    <use xlink:href="#icon-cart"></use>
                                </svg></span><span class="sidebar__link-text">Accounts</span><span class="sidebar__link-arrow">
                                <svg class="icon-icon-keyboard-down">
                                    <use xlink:href="#icon-keyboard-down"></use>
                                </svg></span></a>
                        <div class="collapse" id="Accounts">
                            <ul class="sidebar__collapse-menu">
                                <li class="sidebar__menu-item"><a class="sidebar__link " href="./add-user.php"><span class="sidebar__link-signal"></span><span class="sidebar__link-text">Add User</span></a>
                                </li>
                                <li class="sidebar__menu-item"><a class="sidebar__link " href="./manage-users.php"><span class="sidebar__link-signal"></span><span class="sidebar__link-text">Manage Users</span></a>
                                </li>
                                

                            </ul>
                        </div>
                    </li>
                    <!-- <li class="sidebar__menu-item"><a class="sidebar__link" href="calendar.php" aria-expanded="false"><span class="sidebar__link-icon">
                                <svg class="icon-icon-calendar">
                                    <use xlink:href="#icon-calendar"></use>
                                </svg></span><span class="sidebar__link-text">Calendar</span></a>
                    </li>
                    <li class="sidebar__menu-item"><a class="sidebar__link" href="mail.php" aria-expanded="false"><span class="sidebar__link-icon">
                                <svg class="icon-icon-email">
                                    <use xlink:href="#icon-email"></use>
                                </svg></span><span class="sidebar__link-text">Mail</span><span class="badge badge--red">20</span></a>
                    </li>
                    <li class="sidebar__menu-item"><a class="sidebar__link" href="chat.php" aria-expanded="false"><span class="sidebar__link-icon">
                                <svg class="icon-icon-chat">
                                    <use xlink:href="#icon-chat"></use>
                                </svg></span><span class="sidebar__link-text">Chat</span></a>
                    </li> -->
                    <li class="sidebar__menu-item"><a class="sidebar__link" href="contacts.php" aria-expanded="false"><span class="sidebar__link-icon">
                                <svg class="icon-icon-contacts">
                                    <use xlink:href="#icon-contacts"></use>
                                </svg></span><span class="sidebar__link-text">Manage Contact</span></a>
                    </li>
                    <li class="sidebar__menu-item"><a class="sidebar__link" href="manage-reviews.php" aria-expanded="false"><span class="sidebar__link-icon">
                                <svg class="icon-icon-todo">
                                    <use xlink:href="#icon-todo"></use>
                                </svg></span><span class="sidebar__link-text">Manage Reviews</span></a>
                    </li>
                    <li class="sidebar__menu-item"><a class="sidebar__link" href="file-manager.php" aria-expanded="false"><span class="sidebar__link-icon">
                                <svg class="icon-icon-folder">
                                    <use xlink:href="#icon-folder"></use>
                                </svg></span><span class="sidebar__link-text">File Manager</span></a>
                    </li>
                    <!-- <li class="sidebar__menu-item"><a class="sidebar__link" href="timeline.php" aria-expanded="false"><span class="sidebar__link-icon">
                                <svg class="icon-icon-clock">
                                    <use xlink:href="#icon-clock"></use>
                                </svg></span><span class="sidebar__link-text">Timeline</span></a>
                    </li> -->
                    <!-- <li class="sidebar__menu-item"><a class="sidebar__link" href="#" data-toggle="collapse" data-target="#Auth" aria-expanded="false"><span class="sidebar__link-icon">
                                <svg class="icon-icon-password">
                                    <use xlink:href="#icon-password"></use>
                                </svg></span><span class="sidebar__link-text">Authentication</span><span class="sidebar__link-arrow">
                                <svg class="icon-icon-keyboard-down">
                                    <use xlink:href="#icon-keyboard-down"></use>
                                </svg></span></a>
                        <div class="collapse" id="Auth">
                            <ul class="sidebar__collapse-menu">
                                <li class="sidebar__menu-item"><a class="sidebar__link" href="auth-login.php"><span class="sidebar__link-signal"></span><span class="sidebar__link-text">Login</span></a>
                                </li>
                                <li class="sidebar__menu-item"><a class="sidebar__link" href="auth-login.php"><span class="sidebar__link-signal"></span><span class="sidebar__link-text">Login V.2</span></a>
                                </li>
                                <li class="sidebar__menu-item"><a class="sidebar__link" href="auth-login.php"><span class="sidebar__link-signal"></span><span class="sidebar__link-text">Login V.3</span></a>
                                </li>
                                <li class="sidebar__menu-item"><a class="sidebar__link" href="auth-create.php"><span class="sidebar__link-signal"></span><span class="sidebar__link-text">Create Account</span></a>
                                </li>
                                <li class="sidebar__menu-item"><a class="sidebar__link" href="auth-create-v2.php"><span class="sidebar__link-signal"></span><span class="sidebar__link-text">Create Account V.2</span></a>
                                </li>
                                <li class="sidebar__menu-item"><a class="sidebar__link" href="auth-create.php"><span class="sidebar__link-signal"></span><span class="sidebar__link-text">Create Account V.3</span></a>
                                </li>
                                <li class="sidebar__menu-item"><a class="sidebar__link" href="auth-lock.php"><span class="sidebar__link-signal"></span><span class="sidebar__link-text">Lock</span></a>
                                </li>
                                <li class="sidebar__menu-item"><a class="sidebar__link" href="auth-lock.php"><span class="sidebar__link-signal"></span><span class="sidebar__link-text">Lock V.2</span></a>
                                </li>
                                <li class="sidebar__menu-item"><a class="sidebar__link" href="auth-lock.php"><span class="sidebar__link-signal"></span><span class="sidebar__link-text">Lock V.3</span></a>
                                </li>
                                <li class="sidebar__menu-item"><a class="sidebar__link" href="auth-forgot.php"><span class="sidebar__link-signal"></span><span class="sidebar__link-text">Forgot</span></a>
                                </li>
                                <li class="sidebar__menu-item"><a class="sidebar__link" href="auth-forgot.php"><span class="sidebar__link-signal"></span><span class="sidebar__link-text">Forgot V.2</span></a>
                                </li>
                                <li class="sidebar__menu-item"><a class="sidebar__link" href="auth-forgot.php"><span class="sidebar__link-signal"></span><span class="sidebar__link-text">Forgot V.3</span></a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="sidebar__menu-item"><a class="sidebar__link" href="404.php" aria-expanded="false"><span class="sidebar__link-icon"></span><span class="sidebar__link-text">404</span></a>
                    </li>
                    <li class="sidebar__menu-item"><a class="sidebar__link" href="ui-kit.php" aria-expanded="false"><span class="sidebar__link-icon">
                                <svg class="icon-icon-settings">
                                    <use xlink:href="#icon-settings"></use>
                                </svg></span><span class="sidebar__link-text">UI Kit</span></a>
                    </li> -->
                </ul>
            </nav>
        </div>
    </div>
</aside>