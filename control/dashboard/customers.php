<?php require_once("./header.php")?>
<?php require_once("./svg.php")?>
<?php confirm_logged_in(); ?>
<?php if(!confirm_admin()){ redirect("404.php"); } ?>
<body>
    <?php require_once("./navbar.php")?>
    <div class="sidebar-backdrop"></div>
    <div class="page-wrapper">
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
                                <form class="form-search" action="#" method="GET">
                                    <div class="form-search__container"><span class="form-search__icon-left">
                        <svg class="icon-icon-search">
                          <use xlink:href="#icon-search"></use>
                        </svg></span>
                                        <input class="form-search__input" type="text" placeholder="Search..." />
                                    </div>
                                </form>
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
                                                        <h4 class="dropdown-menu__item-title">New Order Received</h4><span class="dropdown-menu__item-time">25 min ago</span>
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
                                                        <h4 class="dropdown-menu__item-title">New invoice received</h4><span class="dropdown-menu__item-time">5 hours ago</span>
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
                                                        <h4 class="dropdown-menu__item-title">new batch is shipped</h4><span class="dropdown-menu__item-time">10 hours ago</span>
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
                                                        <h4 class="dropdown-menu__item-title">New Order Received</h4><span class="dropdown-menu__item-time">25 min ago</span>
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
                                                        <h4 class="dropdown-menu__item-title">New invoice received</h4><span class="dropdown-menu__item-time">5 hours ago</span>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="dropdown-menu__divider"></div><a class="dropdown-menu__item dropdown-menu__link-all" href="#">View all Notifications
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
                                                            <p class="dropdown-menu__text">Nemo enim ipsam voluptatem Nemo enim ipsam voluptatem</p>
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
                                                            <p class="dropdown-menu__text">Nemo enim ipsam voluptatem Nemo enim ipsam voluptatem</p>
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
                                                            <p class="dropdown-menu__text">Nemo enim ipsam voluptatem Nemo enim ipsam voluptatem</p>
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
                                                            <p class="dropdown-menu__text">Nemo enim ipsam voluptatem Nemo enim ipsam voluptatem</p>
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
                                                            <p class="dropdown-menu__text">Nemo enim ipsam voluptatem Nemo enim ipsam voluptatem</p>
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
                                                            <p class="dropdown-menu__text">Nemo enim ipsam voluptatem Nemo enim ipsam voluptatem</p>
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
                                                            <p class="dropdown-menu__text">Nemo enim ipsam voluptatem Nemo enim ipsam voluptatem</p>
                                                        </div><span class="dropdown-menu__item-time">5 min ago</span>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="dropdown-menu__divider"></div><a class="dropdown-menu__item dropdown-menu__link-all" href="#">View all Messages
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
                                <div class="profile-dropdown dropdown-menu dropdown-menu--right"><a class="profile-dropdown__item dropdown-menu__item" href="#" tabindex="0"><span class="profile-dropdown__icon">
                        <svg class="icon-icon-user">
                          <use xlink:href="#icon-user"></use>
                        </svg></span><span>My Profile</span></a><a class="profile-dropdown__item dropdown-menu__item" href="#" tabindex="0"><span class="profile-dropdown__icon">
                        <svg class="icon-icon-chat">
                          <use xlink:href="#icon-chat"></use>
                        </svg></span><span>My chat</span></a><a class="profile-dropdown__item dropdown-menu__item" href="#" tabindex="0"><span class="profile-dropdown__icon">
                        <svg class="icon-icon-task">
                          <use xlink:href="#icon-task"></use>
                        </svg></span><span>Tasks</span></a><a class="profile-dropdown__item dropdown-menu__item" href="#" tabindex="0"><span class="profile-dropdown__icon">
                        <svg class="icon-icon-settings">
                          <use xlink:href="#icon-settings"></use>
                        </svg></span><span>Settings</span></a>
                                    <div class="dropdown-menu__divider"></div><a class="profile-dropdown__item dropdown-menu__item" href="#" tabindex="0"><span class="profile-dropdown__icon">
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
                        <a class="sidebar__logo" href="index.html">
                            <img class="sidebar__logo-icon" src="img/content/logotype.svg" alt="#" width="44" />
                            <div class="sidebar__logo-text">arion</div>
                        </a>
                    </div>
                </div>
                <div class="sidebar__content" data-simplebar="data-simplebar">
                    <nav class="sidebar__nav">
                        <ul class="sidebar__menu">
                            <li class="sidebar__menu-item"><a class="sidebar__link" href="index.html" aria-expanded="false"><span class="sidebar__link-icon">
                      <svg class="icon-icon-dashboard">
                        <use xlink:href="#icon-dashboard"></use>
                      </svg></span><span class="sidebar__link-text">Dashboard</span></a>
                            </li>
                            <li class="sidebar__menu-item"><a class="sidebar__link active" href="products.html" data-toggle="collapse" data-target="#E-Commerce" aria-expanded="true"><span class="sidebar__link-icon">
                      <svg class="icon-icon-cart">
                        <use xlink:href="#icon-cart"></use>
                      </svg></span><span class="sidebar__link-text">E-Commerce</span><span class="sidebar__link-arrow">
                      <svg class="icon-icon-keyboard-down">
                        <use xlink:href="#icon-keyboard-down"></use>
                      </svg></span></a>
                                <div class="collapse show" id="E-Commerce">
                                    <ul class="sidebar__collapse-menu">
                                        <li class="sidebar__menu-item"><a class="sidebar__link" href="products.html"><span class="sidebar__link-signal"></span><span class="sidebar__link-text">Products</span></a>
                                        </li>
                                        <li class="sidebar__menu-item"><a class="sidebar__link" href="product-add.html"><span class="sidebar__link-signal"></span><span class="sidebar__link-text">Add Product</span></a>
                                        </li>
                                        <li class="sidebar__menu-item"><a class="sidebar__link" href="orders.html"><span class="sidebar__link-signal"></span><span class="sidebar__link-text">Orders</span></a>
                                        </li>
                                        <li class="sidebar__menu-item"><a class="sidebar__link" href="order-details.html"><span class="sidebar__link-signal"></span><span class="sidebar__link-text">Order Details</span></a>
                                        </li>
                                        <li class="sidebar__menu-item"><a class="sidebar__link" href="order-invoice.html"><span class="sidebar__link-signal"></span><span class="sidebar__link-text">Order Invoice</span></a>
                                        </li>
                                        <li class="sidebar__menu-item"><a class="sidebar__link" href="order-status.html"><span class="sidebar__link-signal"></span><span class="sidebar__link-text">Order Status</span></a>
                                        </li>
                                        <li class="sidebar__menu-item"><a class="sidebar__link" href="order-history.html"><span class="sidebar__link-signal"></span><span class="sidebar__link-text">Order History</span></a>
                                        </li>
                                        <li class="sidebar__menu-item"><a class="sidebar__link" href="order-history-v2.html"><span class="sidebar__link-signal"></span><span class="sidebar__link-text">Order History V.2</span></a>
                                        </li>
                                        <li class="sidebar__menu-item"><a class="sidebar__link" href="order-notes.html"><span class="sidebar__link-signal"></span><span class="sidebar__link-text">Order Notes</span></a>
                                        </li>
                                        <li class="sidebar__menu-item"><a class="sidebar__link" href="order-messages.html"><span class="sidebar__link-signal"></span><span class="sidebar__link-text">Order Messages</span></a>
                                        </li>
                                        <li class="sidebar__menu-item"><a class="sidebar__link" href="order-messages-v2.html"><span class="sidebar__link-signal"></span><span class="sidebar__link-text">Order Messages V.2</span></a>
                                        </li>
                                        <li class="sidebar__menu-item"><a class="sidebar__link active" href="customers.html"><span class="sidebar__link-signal"></span><span class="sidebar__link-text">Customers</span></a>
                                        </li>
                                        <li class="sidebar__menu-item"><a class="sidebar__link" href="customer-account.html"><span class="sidebar__link-signal"></span><span class="sidebar__link-text">Account</span></a>
                                        </li>
                                        <li class="sidebar__menu-item"><a class="sidebar__link" href="customer-account-v2.html"><span class="sidebar__link-signal"></span><span class="sidebar__link-text">Account V.2</span></a>
                                        </li>
                                        <li class="sidebar__menu-item"><a class="sidebar__link" href="customer-wishlist.html"><span class="sidebar__link-signal"></span><span class="sidebar__link-text">Wish List</span></a>
                                        </li>
                                        <li class="sidebar__menu-item"><a class="sidebar__link" href="reviews.html"><span class="sidebar__link-signal"></span><span class="sidebar__link-text">Reviews</span></a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="sidebar__menu-item"><a class="sidebar__link" href="calendar.html" aria-expanded="false"><span class="sidebar__link-icon">
                      <svg class="icon-icon-calendar">
                        <use xlink:href="#icon-calendar"></use>
                      </svg></span><span class="sidebar__link-text">Calendar</span></a>
                            </li>
                            <li class="sidebar__menu-item"><a class="sidebar__link" href="mail.html" aria-expanded="false"><span class="sidebar__link-icon">
                      <svg class="icon-icon-email">
                        <use xlink:href="#icon-email"></use>
                      </svg></span><span class="sidebar__link-text">Mail</span><span class="badge badge--red">20</span></a>
                            </li>
                            <li class="sidebar__menu-item"><a class="sidebar__link" href="chat.html" aria-expanded="false"><span class="sidebar__link-icon">
                      <svg class="icon-icon-chat">
                        <use xlink:href="#icon-chat"></use>
                      </svg></span><span class="sidebar__link-text">Chat</span></a>
                            </li>
                            <li class="sidebar__menu-item"><a class="sidebar__link" href="contacts.html" aria-expanded="false"><span class="sidebar__link-icon">
                      <svg class="icon-icon-contacts">
                        <use xlink:href="#icon-contacts"></use>
                      </svg></span><span class="sidebar__link-text">Contacts</span></a>
                            </li>
                            <li class="sidebar__menu-item"><a class="sidebar__link" href="todo.html" aria-expanded="false"><span class="sidebar__link-icon">
                      <svg class="icon-icon-todo">
                        <use xlink:href="#icon-todo"></use>
                      </svg></span><span class="sidebar__link-text">ToDo</span></a>
                            </li>
                            <li class="sidebar__menu-item"><a class="sidebar__link" href="file-manager.html" aria-expanded="false"><span class="sidebar__link-icon">
                      <svg class="icon-icon-folder">
                        <use xlink:href="#icon-folder"></use>
                      </svg></span><span class="sidebar__link-text">File Manager</span></a>
                            </li>
                            <li class="sidebar__menu-item"><a class="sidebar__link" href="timeline.html" aria-expanded="false"><span class="sidebar__link-icon">
                      <svg class="icon-icon-clock">
                        <use xlink:href="#icon-clock"></use>
                      </svg></span><span class="sidebar__link-text">Timeline</span></a>
                            </li>
                            <li class="sidebar__menu-item"><a class="sidebar__link" href="#" data-toggle="collapse" data-target="#Auth" aria-expanded="false"><span class="sidebar__link-icon">
                      <svg class="icon-icon-password">
                        <use xlink:href="#icon-password"></use>
                      </svg></span><span class="sidebar__link-text">Authentication</span><span class="sidebar__link-arrow">
                      <svg class="icon-icon-keyboard-down">
                        <use xlink:href="#icon-keyboard-down"></use>
                      </svg></span></a>
                                <div class="collapse" id="Auth">
                                    <ul class="sidebar__collapse-menu">
                                        <li class="sidebar__menu-item"><a class="sidebar__link" href="auth-login.html"><span class="sidebar__link-signal"></span><span class="sidebar__link-text">Login</span></a>
                                        </li>
                                        <li class="sidebar__menu-item"><a class="sidebar__link" href="auth-login-v2.html"><span class="sidebar__link-signal"></span><span class="sidebar__link-text">Login V.2</span></a>
                                        </li>
                                        <li class="sidebar__menu-item"><a class="sidebar__link" href="auth-login-v3.html"><span class="sidebar__link-signal"></span><span class="sidebar__link-text">Login V.3</span></a>
                                        </li>
                                        <li class="sidebar__menu-item"><a class="sidebar__link" href="auth-create.html"><span class="sidebar__link-signal"></span><span class="sidebar__link-text">Create Account</span></a>
                                        </li>
                                        <li class="sidebar__menu-item"><a class="sidebar__link" href="auth-create-v2.html"><span class="sidebar__link-signal"></span><span class="sidebar__link-text">Create Account V.2</span></a>
                                        </li>
                                        <li class="sidebar__menu-item"><a class="sidebar__link" href="auth-create-v3.html"><span class="sidebar__link-signal"></span><span class="sidebar__link-text">Create Account V.3</span></a>
                                        </li>
                                        <li class="sidebar__menu-item"><a class="sidebar__link" href="auth-lock.html"><span class="sidebar__link-signal"></span><span class="sidebar__link-text">Lock</span></a>
                                        </li>
                                        <li class="sidebar__menu-item"><a class="sidebar__link" href="auth-lock-v2.html"><span class="sidebar__link-signal"></span><span class="sidebar__link-text">Lock V.2</span></a>
                                        </li>
                                        <li class="sidebar__menu-item"><a class="sidebar__link" href="auth-lock-v3.html"><span class="sidebar__link-signal"></span><span class="sidebar__link-text">Lock V.3</span></a>
                                        </li>
                                        <li class="sidebar__menu-item"><a class="sidebar__link" href="auth-forgot.html"><span class="sidebar__link-signal"></span><span class="sidebar__link-text">Forgot</span></a>
                                        </li>
                                        <li class="sidebar__menu-item"><a class="sidebar__link" href="auth-forgot-v2.html"><span class="sidebar__link-signal"></span><span class="sidebar__link-text">Forgot V.2</span></a>
                                        </li>
                                        <li class="sidebar__menu-item"><a class="sidebar__link" href="auth-forgot-v3.html"><span class="sidebar__link-signal"></span><span class="sidebar__link-text">Forgot V.3</span></a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="sidebar__menu-item"><a class="sidebar__link" href="404.html" aria-expanded="false"><span class="sidebar__link-icon"></span><span class="sidebar__link-text">404</span></a>
                            </li>
                            <li class="sidebar__menu-item"><a class="sidebar__link" href="ui-kit.html" aria-expanded="false"><span class="sidebar__link-icon">
                      <svg class="icon-icon-settings">
                        <use xlink:href="#icon-settings"></use>
                      </svg></span><span class="sidebar__link-text">UI Kit</span></a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </aside>
        <main class="page-content">
            <div class="container">
                <div class="page-header">
                    <h1 class="page-header__title">Customers <span class="text-grey">(50)</span></h1>
                </div>
                <div class="page-tools">
                    <div class="page-tools__breadcrumbs">
                        <div class="breadcrumbs">
                            <div class="breadcrumbs__container">
                                <ol class="breadcrumbs__list">
                                    <li class="breadcrumbs__item">
                                        <a class="breadcrumbs__link" href="index.html">
                                            <svg class="icon-icon-home breadcrumbs__icon">
                                                <use xlink:href="#icon-home"></use>
                                            </svg>
                                            <svg class="icon-icon-keyboard-right breadcrumbs__arrow">
                                                <use xlink:href="#icon-keyboard-right"></use>
                                            </svg>
                                        </a>
                                    </li>
                                    <li class="breadcrumbs__item disabled"><a class="breadcrumbs__link" href="#"><span>E-commerce</span>
                        <svg class="icon-icon-keyboard-right breadcrumbs__arrow">
                          <use xlink:href="#icon-keyboard-right"></use>
                        </svg></a>
                                    </li>
                                    <li class="breadcrumbs__item active"><span class="breadcrumbs__link">Customers</span>
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <div class="page-tools__right">
                        <div class="page-tools__right-row">
                            <div class="page-tools__right-item"><a class="button-icon" href="#"><span class="button-icon__icon">
                      <svg class="icon-icon-print">
                        <use xlink:href="#icon-print"></use>
                      </svg></span></a>
                            </div>
                            <div class="page-tools__right-item"><a class="button-icon" href="#"><span class="button-icon__icon">
                      <svg class="icon-icon-import">
                        <use xlink:href="#icon-import"></use>
                      </svg></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="toolbox">
                    <div class="toolbox__row row gutter-bottom-xs">
                        <div class="toolbox__left col-12 col-lg">
                            <div class="toolbox__left-row row row--xs gutter-bottom-xs">
                                <div class="form-group form-group--inline col-12 col-sm-auto">
                                    <label class="form-label">Show</label>
                                    <div class="input-group input-group--white input-group--append">
                                        <input class="input input--select" type="text" value="10" size="1" data-toggle="dropdown" readonly><span class="input-group__arrow">
                        <svg class="icon-icon-keyboard-down">
                          <use xlink:href="#icon-keyboard-down"></use>
                        </svg></span>
                                        <div class="dropdown-menu dropdown-menu--right dropdown-menu--fluid js-dropdown-select"><a class="dropdown-menu__item active" href="#" tabindex="0" data-value="10">10</a><a class="dropdown-menu__item" href="#" tabindex="0" data-value="15">15</a><a class="dropdown-menu__item" href="#" tabindex="0" data-value="20">20</a>
                                            <a
                                            class="dropdown-menu__item" href="#" tabindex="0" data-value="25">25</a><a class="dropdown-menu__item" href="#" tabindex="0" data-value="50">50</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group form-group--inline col col-sm-auto">
                                    <div class="input-group input-group--white input-group--prepend input-group--append">
                                        <div class="input-group__prepend">
                                            <svg class="icon-icon-calendar">
                                                <use xlink:href="#icon-calendar"></use>
                                            </svg>
                                        </div>
                                        <input class="input input--select" type="text" value="01.12.18 / 07.12.18" readonly><span class="input-group__arrow">
                        <svg class="icon-icon-keyboard-down">
                          <use xlink:href="#icon-keyboard-down"></use>
                        </svg></span>
                                    </div>
                                </div>
                                <div class="form-group form-group--inline col-12 col-sm-auto d-none d-sm-block">
                                    <div class="toolbox__status input-group input-group--white input-group--append">
                                        <input class="input input--select" type="text" value="All status" data-toggle="dropdown" readonly><span class="input-group__arrow">
                        <svg class="icon-icon-keyboard-down">
                          <use xlink:href="#icon-keyboard-down"></use>
                        </svg></span>
                                        <div class="dropdown-menu dropdown-menu--right dropdown-menu--fluid js-dropdown-select"><a class="dropdown-menu__item active" href="#" tabindex="0" data-value="All status"><span class="marker-item"></span> All status</a>
                                            <a class="dropdown-menu__item" href="#" tabindex="0" data-value="Active"><span class="marker-item color-green"></span> Active</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="toolbox__right col-12 col-lg-auto">
                            <div class="toolbox__right-row row row--xs flex-nowrap">
                                <div class="col col-lg-auto">
                                    <form class="toolbox__search" method="GET">
                                        <div class="input-group input-group--white input-group--prepend">
                                            <div class="input-group__prepend">
                                                <svg class="icon-icon-search">
                                                    <use xlink:href="#icon-search"></use>
                                                </svg>
                                            </div>
                                            <input class="input" type="text" placeholder="Search Customer">
                                        </div>
                                    </form>
                                </div>
                                <div class="col-auto">
                                    <button class="button-add button-add--blue" data-modal="#"><span class="button-add__icon">
                        <svg class="icon-icon-plus">
                          <use xlink:href="#icon-plus"></use>
                        </svg></span><span class="button-add__text"></span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="table-wrapper">
                    <div class="table-wrapper__content table-collapse scrollbar-thin scrollbar-visible" data-simplebar>
                        <table class="table table--spaces">
                            <colgroup>
                                <col width="70px">
                                    <col>
                                        <col>
                                            <col>
                                                <col>
                                                    <col>
                                                        <col>
                            </colgroup>
                            <thead class="table__header">
                                <tr class="table__header-row">
                                    <th>
                                        <div class="table__checkbox table__checkbox--all">
                                            <label class="checkbox">
                                                <input class="js-checkbox-all" type="checkbox" data-checkbox-all="product"><span class="checkbox__marker"><span class="checkbox__marker-icon">
                              <svg class="icon-icon-checked">
                                <use xlink:href="#icon-checked"></use>
                              </svg></span></span>
                                            </label>
                                        </div>
                                    </th>
                                    <th class="table__th-sort"><span class="align-middle">Customer Name</span><span class="sort sort--down"></span>
                                    </th>
                                    <th class="table__th-sort"><span class="align-middle">Location</span><span class="sort sort--down"></span>
                                    </th>
                                    <th class="table__th-sort"><span class="align-middle">Orders</span><span class="sort sort--down"></span>
                                    </th>
                                    <th class="table__th-sort"><span class="align-middle">Registered</span><span class="sort sort--down"></span>
                                    </th>
                                    <th class="table__th-sort d-none d-sm-table-cell"><span class="align-middle">Status</span><span class="sort sort--down"></span>
                                    </th>
                                    <th class="table__actions"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="table__row">
                                    <td class="table__td">
                                        <div class="table__checkbox table__checkbox--all">
                                            <label class="checkbox">
                                                <input type="checkbox" data-checkbox="product"><span class="checkbox__marker"><span class="checkbox__marker-icon">
                              <svg class="icon-icon-checked">
                                <use xlink:href="#icon-checked"></use>
                              </svg></span></span>
                                            </label>
                                        </div>
                                    </td>
                                    <td class="table__td">
                                        <div class="media-item media-item--medium">
                                            <a class="media-item__icon color-red" href="customer-account.html">
                                                <div class="media-item__icon-text">FB</div>
                                                <img class="media-item__thumb" src="img/content/humans/item-1.jpg" alt="#">
                                            </a>
                                            <div class="media-item__right">
                                                <h5 class="media-item__title"><a href="customer-account.html">Felecia Burke</a></h5><a class="text-sm text-grey" href="mailto:#">example@mail.com</a>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="table__td text-light-theme">Hong Kong, China</td>
                                    <td class="table__td text-dark-theme">1000</td>
                                    <td class="table__td text-light-theme">12.07.2018</td>
                                    <td class="table__td d-none d-sm-table-cell">
                                        <div class="table__status"><span class="table__status-icon color-green"></span> Active</div>
                                    </td>
                                    <td class="table__td table__actions">
                                        <div class="items-more">
                                            <button class="items-more__button">
                                                <svg class="icon-icon-more">
                                                    <use xlink:href="#icon-more"></use>
                                                </svg>
                                            </button>
                                            <div class="dropdown-items dropdown-items--right">
                                                <div class="dropdown-items__container">
                                                    <ul class="dropdown-items__list">
                                                        <li class="dropdown-items__item"><a class="dropdown-items__link" href="order-details.html"><span class="dropdown-items__link-icon">
                                    <svg class="icon-icon-view">
                                      <use xlink:href="#icon-view"></use>
                                    </svg></span>Details</a>
                                                        </li>
                                                        <li class="dropdown-items__item"><a class="dropdown-items__link"><span class="dropdown-items__link-icon">
                                    <svg class="icon-icon-duplicate">
                                      <use xlink:href="#icon-duplicate"></use>
                                    </svg></span>Duplicate</a>
                                                        </li>
                                                        <li class="dropdown-items__item"><a class="dropdown-items__link"><span class="dropdown-items__link-icon">
                                    <svg class="icon-icon-archive">
                                      <use xlink:href="#icon-archive"></use>
                                    </svg></span>Archive</a>
                                                        </li>
                                                        <li class="dropdown-items__item"><a class="dropdown-items__link"><span class="dropdown-items__link-icon">
                                    <svg class="icon-icon-trash">
                                      <use xlink:href="#icon-trash"></use>
                                    </svg></span>Delete</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="table__space">
                                    <td colspan="7"></td>
                                </tr>
                                <tr class="table__row">
                                    <td class="table__td">
                                        <div class="table__checkbox table__checkbox--all">
                                            <label class="checkbox">
                                                <input type="checkbox" data-checkbox="product"><span class="checkbox__marker"><span class="checkbox__marker-icon">
                              <svg class="icon-icon-checked">
                                <use xlink:href="#icon-checked"></use>
                              </svg></span></span>
                                            </label>
                                        </div>
                                    </td>
                                    <td class="table__td">
                                        <div class="media-item media-item--medium">
                                            <a class="media-item__icon color-red" href="customer-account.html">
                                                <div class="media-item__icon-text">SH</div>
                                                <img class="media-item__thumb" src="img/content/humans/item-2.jpg" alt="#">
                                            </a>
                                            <div class="media-item__right">
                                                <h5 class="media-item__title"><a href="customer-account.html">Sophia Hale</a></h5><a class="text-sm text-grey" href="mailto:#">example@mail.com</a>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="table__td text-light-theme">New York, USA</td>
                                    <td class="table__td text-dark-theme">1000</td>
                                    <td class="table__td text-light-theme">12.07.2018</td>
                                    <td class="table__td d-none d-sm-table-cell">
                                        <div class="table__status"><span class="table__status-icon color-green"></span> Active</div>
                                    </td>
                                    <td class="table__td table__actions">
                                        <div class="items-more">
                                            <button class="items-more__button">
                                                <svg class="icon-icon-more">
                                                    <use xlink:href="#icon-more"></use>
                                                </svg>
                                            </button>
                                            <div class="dropdown-items dropdown-items--right">
                                                <div class="dropdown-items__container">
                                                    <ul class="dropdown-items__list">
                                                        <li class="dropdown-items__item"><a class="dropdown-items__link" href="order-details.html"><span class="dropdown-items__link-icon">
                                    <svg class="icon-icon-view">
                                      <use xlink:href="#icon-view"></use>
                                    </svg></span>Details</a>
                                                        </li>
                                                        <li class="dropdown-items__item"><a class="dropdown-items__link"><span class="dropdown-items__link-icon">
                                    <svg class="icon-icon-duplicate">
                                      <use xlink:href="#icon-duplicate"></use>
                                    </svg></span>Duplicate</a>
                                                        </li>
                                                        <li class="dropdown-items__item"><a class="dropdown-items__link"><span class="dropdown-items__link-icon">
                                    <svg class="icon-icon-archive">
                                      <use xlink:href="#icon-archive"></use>
                                    </svg></span>Archive</a>
                                                        </li>
                                                        <li class="dropdown-items__item"><a class="dropdown-items__link"><span class="dropdown-items__link-icon">
                                    <svg class="icon-icon-trash">
                                      <use xlink:href="#icon-trash"></use>
                                    </svg></span>Delete</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="table__space">
                                    <td colspan="7"></td>
                                </tr>
                                <tr class="table__row">
                                    <td class="table__td">
                                        <div class="table__checkbox table__checkbox--all">
                                            <label class="checkbox">
                                                <input type="checkbox" data-checkbox="product"><span class="checkbox__marker"><span class="checkbox__marker-icon">
                              <svg class="icon-icon-checked">
                                <use xlink:href="#icon-checked"></use>
                              </svg></span></span>
                                            </label>
                                        </div>
                                    </td>
                                    <td class="table__td">
                                        <div class="media-item media-item--medium">
                                            <a class="media-item__icon color-red" href="customer-account.html">
                                                <div class="media-item__icon-text">PG</div>
                                                <img class="media-item__thumb" src="img/content/humans/item-3.jpg" alt="#">
                                            </a>
                                            <div class="media-item__right">
                                                <h5 class="media-item__title"><a href="customer-account.html">Pamela Garza</a></h5><a class="text-sm text-grey" href="mailto:#">example@mail.com</a>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="table__td text-light-theme">Boston, USA</td>
                                    <td class="table__td text-dark-theme">1000</td>
                                    <td class="table__td text-light-theme">12.07.2018</td>
                                    <td class="table__td d-none d-sm-table-cell">
                                        <div class="table__status"><span class="table__status-icon color-green"></span> Active</div>
                                    </td>
                                    <td class="table__td table__actions">
                                        <div class="items-more">
                                            <button class="items-more__button">
                                                <svg class="icon-icon-more">
                                                    <use xlink:href="#icon-more"></use>
                                                </svg>
                                            </button>
                                            <div class="dropdown-items dropdown-items--right">
                                                <div class="dropdown-items__container">
                                                    <ul class="dropdown-items__list">
                                                        <li class="dropdown-items__item"><a class="dropdown-items__link" href="order-details.html"><span class="dropdown-items__link-icon">
                                    <svg class="icon-icon-view">
                                      <use xlink:href="#icon-view"></use>
                                    </svg></span>Details</a>
                                                        </li>
                                                        <li class="dropdown-items__item"><a class="dropdown-items__link"><span class="dropdown-items__link-icon">
                                    <svg class="icon-icon-duplicate">
                                      <use xlink:href="#icon-duplicate"></use>
                                    </svg></span>Duplicate</a>
                                                        </li>
                                                        <li class="dropdown-items__item"><a class="dropdown-items__link"><span class="dropdown-items__link-icon">
                                    <svg class="icon-icon-archive">
                                      <use xlink:href="#icon-archive"></use>
                                    </svg></span>Archive</a>
                                                        </li>
                                                        <li class="dropdown-items__item"><a class="dropdown-items__link"><span class="dropdown-items__link-icon">
                                    <svg class="icon-icon-trash">
                                      <use xlink:href="#icon-trash"></use>
                                    </svg></span>Delete</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="table__space">
                                    <td colspan="7"></td>
                                </tr>
                                <tr class="table__row">
                                    <td class="table__td">
                                        <div class="table__checkbox table__checkbox--all">
                                            <label class="checkbox">
                                                <input type="checkbox" data-checkbox="product"><span class="checkbox__marker"><span class="checkbox__marker-icon">
                              <svg class="icon-icon-checked">
                                <use xlink:href="#icon-checked"></use>
                              </svg></span></span>
                                            </label>
                                        </div>
                                    </td>
                                    <td class="table__td">
                                        <div class="media-item media-item--medium">
                                            <a class="media-item__icon color-red" href="customer-account.html">
                                                <div class="media-item__icon-text">AJ</div>
                                                <img class="media-item__thumb" src="img/content/humans/item-4.jpg" alt="#">
                                            </a>
                                            <div class="media-item__right">
                                                <h5 class="media-item__title"><a href="customer-account.html">Addison James</a></h5><a class="text-sm text-grey" href="mailto:#">example@mail.com</a>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="table__td text-light-theme">Sydney, Australia</td>
                                    <td class="table__td text-dark-theme">1000</td>
                                    <td class="table__td text-light-theme">12.07.2018</td>
                                    <td class="table__td d-none d-sm-table-cell">
                                        <div class="table__status"><span class="table__status-icon color-green"></span> Active</div>
                                    </td>
                                    <td class="table__td table__actions">
                                        <div class="items-more">
                                            <button class="items-more__button">
                                                <svg class="icon-icon-more">
                                                    <use xlink:href="#icon-more"></use>
                                                </svg>
                                            </button>
                                            <div class="dropdown-items dropdown-items--right">
                                                <div class="dropdown-items__container">
                                                    <ul class="dropdown-items__list">
                                                        <li class="dropdown-items__item"><a class="dropdown-items__link" href="order-details.html"><span class="dropdown-items__link-icon">
                                    <svg class="icon-icon-view">
                                      <use xlink:href="#icon-view"></use>
                                    </svg></span>Details</a>
                                                        </li>
                                                        <li class="dropdown-items__item"><a class="dropdown-items__link"><span class="dropdown-items__link-icon">
                                    <svg class="icon-icon-duplicate">
                                      <use xlink:href="#icon-duplicate"></use>
                                    </svg></span>Duplicate</a>
                                                        </li>
                                                        <li class="dropdown-items__item"><a class="dropdown-items__link"><span class="dropdown-items__link-icon">
                                    <svg class="icon-icon-archive">
                                      <use xlink:href="#icon-archive"></use>
                                    </svg></span>Archive</a>
                                                        </li>
                                                        <li class="dropdown-items__item"><a class="dropdown-items__link"><span class="dropdown-items__link-icon">
                                    <svg class="icon-icon-trash">
                                      <use xlink:href="#icon-trash"></use>
                                    </svg></span>Delete</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="table__space">
                                    <td colspan="7"></td>
                                </tr>
                                <tr class="table__row">
                                    <td class="table__td">
                                        <div class="table__checkbox table__checkbox--all">
                                            <label class="checkbox">
                                                <input type="checkbox" data-checkbox="product"><span class="checkbox__marker"><span class="checkbox__marker-icon">
                              <svg class="icon-icon-checked">
                                <use xlink:href="#icon-checked"></use>
                              </svg></span></span>
                                            </label>
                                        </div>
                                    </td>
                                    <td class="table__td">
                                        <div class="media-item media-item--medium">
                                            <a class="media-item__icon color-red" href="customer-account.html">
                                                <div class="media-item__icon-text">JR</div>
                                                <img class="media-item__thumb" src="img/content/humans/item-5.jpg" alt="#">
                                            </a>
                                            <div class="media-item__right">
                                                <h5 class="media-item__title"><a href="customer-account.html">Jamie Rhodes</a></h5><a class="text-sm text-grey" href="mailto:#">example@mail.com</a>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="table__td text-light-theme">Los Angeles, USA</td>
                                    <td class="table__td text-dark-theme">1000</td>
                                    <td class="table__td text-light-theme">12.07.2018</td>
                                    <td class="table__td d-none d-sm-table-cell">
                                        <div class="table__status"><span class="table__status-icon color-green"></span> Active</div>
                                    </td>
                                    <td class="table__td table__actions">
                                        <div class="items-more">
                                            <button class="items-more__button">
                                                <svg class="icon-icon-more">
                                                    <use xlink:href="#icon-more"></use>
                                                </svg>
                                            </button>
                                            <div class="dropdown-items dropdown-items--right">
                                                <div class="dropdown-items__container">
                                                    <ul class="dropdown-items__list">
                                                        <li class="dropdown-items__item"><a class="dropdown-items__link" href="order-details.html"><span class="dropdown-items__link-icon">
                                    <svg class="icon-icon-view">
                                      <use xlink:href="#icon-view"></use>
                                    </svg></span>Details</a>
                                                        </li>
                                                        <li class="dropdown-items__item"><a class="dropdown-items__link"><span class="dropdown-items__link-icon">
                                    <svg class="icon-icon-duplicate">
                                      <use xlink:href="#icon-duplicate"></use>
                                    </svg></span>Duplicate</a>
                                                        </li>
                                                        <li class="dropdown-items__item"><a class="dropdown-items__link"><span class="dropdown-items__link-icon">
                                    <svg class="icon-icon-archive">
                                      <use xlink:href="#icon-archive"></use>
                                    </svg></span>Archive</a>
                                                        </li>
                                                        <li class="dropdown-items__item"><a class="dropdown-items__link"><span class="dropdown-items__link-icon">
                                    <svg class="icon-icon-trash">
                                      <use xlink:href="#icon-trash"></use>
                                    </svg></span>Delete</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="table__space">
                                    <td colspan="7"></td>
                                </tr>
                                <tr class="table__row">
                                    <td class="table__td">
                                        <div class="table__checkbox table__checkbox--all">
                                            <label class="checkbox">
                                                <input type="checkbox" data-checkbox="product"><span class="checkbox__marker"><span class="checkbox__marker-icon">
                              <svg class="icon-icon-checked">
                                <use xlink:href="#icon-checked"></use>
                              </svg></span></span>
                                            </label>
                                        </div>
                                    </td>
                                    <td class="table__td">
                                        <div class="media-item media-item--medium">
                                            <a class="media-item__icon color-red" href="customer-account.html">
                                                <div class="media-item__icon-text">AJ</div>
                                                <img class="media-item__thumb" src="img/content/humans/item-6.jpg" alt="#">
                                            </a>
                                            <div class="media-item__right">
                                                <h5 class="media-item__title"><a href="customer-account.html">Addison Jones</a></h5><a class="text-sm text-grey" href="mailto:#">example@mail.com</a>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="table__td text-light-theme">Miami, USA</td>
                                    <td class="table__td text-dark-theme">1000</td>
                                    <td class="table__td text-light-theme">12.07.2018</td>
                                    <td class="table__td d-none d-sm-table-cell">
                                        <div class="table__status"><span class="table__status-icon color-green"></span> Active</div>
                                    </td>
                                    <td class="table__td table__actions">
                                        <div class="items-more">
                                            <button class="items-more__button">
                                                <svg class="icon-icon-more">
                                                    <use xlink:href="#icon-more"></use>
                                                </svg>
                                            </button>
                                            <div class="dropdown-items dropdown-items--right">
                                                <div class="dropdown-items__container">
                                                    <ul class="dropdown-items__list">
                                                        <li class="dropdown-items__item"><a class="dropdown-items__link" href="order-details.html"><span class="dropdown-items__link-icon">
                                    <svg class="icon-icon-view">
                                      <use xlink:href="#icon-view"></use>
                                    </svg></span>Details</a>
                                                        </li>
                                                        <li class="dropdown-items__item"><a class="dropdown-items__link"><span class="dropdown-items__link-icon">
                                    <svg class="icon-icon-duplicate">
                                      <use xlink:href="#icon-duplicate"></use>
                                    </svg></span>Duplicate</a>
                                                        </li>
                                                        <li class="dropdown-items__item"><a class="dropdown-items__link"><span class="dropdown-items__link-icon">
                                    <svg class="icon-icon-archive">
                                      <use xlink:href="#icon-archive"></use>
                                    </svg></span>Archive</a>
                                                        </li>
                                                        <li class="dropdown-items__item"><a class="dropdown-items__link"><span class="dropdown-items__link-icon">
                                    <svg class="icon-icon-trash">
                                      <use xlink:href="#icon-trash"></use>
                                    </svg></span>Delete</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="table__space">
                                    <td colspan="7"></td>
                                </tr>
                                <tr class="table__row">
                                    <td class="table__td">
                                        <div class="table__checkbox table__checkbox--all">
                                            <label class="checkbox">
                                                <input type="checkbox" data-checkbox="product"><span class="checkbox__marker"><span class="checkbox__marker-icon">
                              <svg class="icon-icon-checked">
                                <use xlink:href="#icon-checked"></use>
                              </svg></span></span>
                                            </label>
                                        </div>
                                    </td>
                                    <td class="table__td">
                                        <div class="media-item media-item--medium">
                                            <a class="media-item__icon color-red" href="customer-account.html">
                                                <div class="media-item__icon-text">AD</div>
                                                <img class="media-item__thumb" src="img/content/humans/item-7.jpg" alt="#">
                                            </a>
                                            <div class="media-item__right">
                                                <h5 class="media-item__title"><a href="customer-account.html">Allen Dunn</a></h5><a class="text-sm text-grey" href="mailto:#">example@mail.com</a>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="table__td text-light-theme">Cape Town, South Africa</td>
                                    <td class="table__td text-dark-theme">1000</td>
                                    <td class="table__td text-light-theme">12.07.2018</td>
                                    <td class="table__td d-none d-sm-table-cell">
                                        <div class="table__status"><span class="table__status-icon color-green"></span> Active</div>
                                    </td>
                                    <td class="table__td table__actions">
                                        <div class="items-more">
                                            <button class="items-more__button">
                                                <svg class="icon-icon-more">
                                                    <use xlink:href="#icon-more"></use>
                                                </svg>
                                            </button>
                                            <div class="dropdown-items dropdown-items--right">
                                                <div class="dropdown-items__container">
                                                    <ul class="dropdown-items__list">
                                                        <li class="dropdown-items__item"><a class="dropdown-items__link" href="order-details.html"><span class="dropdown-items__link-icon">
                                    <svg class="icon-icon-view">
                                      <use xlink:href="#icon-view"></use>
                                    </svg></span>Details</a>
                                                        </li>
                                                        <li class="dropdown-items__item"><a class="dropdown-items__link"><span class="dropdown-items__link-icon">
                                    <svg class="icon-icon-duplicate">
                                      <use xlink:href="#icon-duplicate"></use>
                                    </svg></span>Duplicate</a>
                                                        </li>
                                                        <li class="dropdown-items__item"><a class="dropdown-items__link"><span class="dropdown-items__link-icon">
                                    <svg class="icon-icon-archive">
                                      <use xlink:href="#icon-archive"></use>
                                    </svg></span>Archive</a>
                                                        </li>
                                                        <li class="dropdown-items__item"><a class="dropdown-items__link"><span class="dropdown-items__link-icon">
                                    <svg class="icon-icon-trash">
                                      <use xlink:href="#icon-trash"></use>
                                    </svg></span>Delete</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="table__space">
                                    <td colspan="7"></td>
                                </tr>
                                <tr class="table__row">
                                    <td class="table__td">
                                        <div class="table__checkbox table__checkbox--all">
                                            <label class="checkbox">
                                                <input type="checkbox" data-checkbox="product"><span class="checkbox__marker"><span class="checkbox__marker-icon">
                              <svg class="icon-icon-checked">
                                <use xlink:href="#icon-checked"></use>
                              </svg></span></span>
                                            </label>
                                        </div>
                                    </td>
                                    <td class="table__td">
                                        <div class="media-item media-item--medium">
                                            <a class="media-item__icon color-red" href="customer-account.html">
                                                <div class="media-item__icon-text">JM</div>
                                                <img class="media-item__thumb" src="img/content/humans/item-8.jpg" alt="#">
                                            </a>
                                            <div class="media-item__right">
                                                <h5 class="media-item__title"><a href="customer-account.html">Jim Murphy</a></h5><a class="text-sm text-grey" href="mailto:#">example@mail.com</a>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="table__td text-light-theme">Los Angeles, USA</td>
                                    <td class="table__td text-dark-theme">1000</td>
                                    <td class="table__td text-light-theme">12.07.2018</td>
                                    <td class="table__td d-none d-sm-table-cell">
                                        <div class="table__status"><span class="table__status-icon color-green"></span> Active</div>
                                    </td>
                                    <td class="table__td table__actions">
                                        <div class="items-more">
                                            <button class="items-more__button">
                                                <svg class="icon-icon-more">
                                                    <use xlink:href="#icon-more"></use>
                                                </svg>
                                            </button>
                                            <div class="dropdown-items dropdown-items--right dropdown-items--up">
                                                <div class="dropdown-items__container">
                                                    <ul class="dropdown-items__list">
                                                        <li class="dropdown-items__item"><a class="dropdown-items__link" href="order-details.html"><span class="dropdown-items__link-icon">
                                    <svg class="icon-icon-view">
                                      <use xlink:href="#icon-view"></use>
                                    </svg></span>Details</a>
                                                        </li>
                                                        <li class="dropdown-items__item"><a class="dropdown-items__link"><span class="dropdown-items__link-icon">
                                    <svg class="icon-icon-duplicate">
                                      <use xlink:href="#icon-duplicate"></use>
                                    </svg></span>Duplicate</a>
                                                        </li>
                                                        <li class="dropdown-items__item"><a class="dropdown-items__link"><span class="dropdown-items__link-icon">
                                    <svg class="icon-icon-archive">
                                      <use xlink:href="#icon-archive"></use>
                                    </svg></span>Archive</a>
                                                        </li>
                                                        <li class="dropdown-items__item"><a class="dropdown-items__link"><span class="dropdown-items__link-icon">
                                    <svg class="icon-icon-trash">
                                      <use xlink:href="#icon-trash"></use>
                                    </svg></span>Delete</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="table__space">
                                    <td colspan="7"></td>
                                </tr>
                                <tr class="table__row">
                                    <td class="table__td">
                                        <div class="table__checkbox table__checkbox--all">
                                            <label class="checkbox">
                                                <input type="checkbox" data-checkbox="product"><span class="checkbox__marker"><span class="checkbox__marker-icon">
                              <svg class="icon-icon-checked">
                                <use xlink:href="#icon-checked"></use>
                              </svg></span></span>
                                            </label>
                                        </div>
                                    </td>
                                    <td class="table__td">
                                        <div class="media-item media-item--medium">
                                            <a class="media-item__icon color-red" href="customer-account.html">
                                                <div class="media-item__icon-text">LG</div>
                                                <img class="media-item__thumb" src="img/content/humans/item-9.jpg" alt="#">
                                            </a>
                                            <div class="media-item__right">
                                                <h5 class="media-item__title"><a href="customer-account.html">Lynn George</a></h5><a class="text-sm text-grey" href="mailto:#">example@mail.com</a>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="table__td text-light-theme">Shanghai, China</td>
                                    <td class="table__td text-dark-theme">1000</td>
                                    <td class="table__td text-light-theme">12.07.2018</td>
                                    <td class="table__td d-none d-sm-table-cell">
                                        <div class="table__status"><span class="table__status-icon color-green"></span> Active</div>
                                    </td>
                                    <td class="table__td table__actions">
                                        <div class="items-more">
                                            <button class="items-more__button">
                                                <svg class="icon-icon-more">
                                                    <use xlink:href="#icon-more"></use>
                                                </svg>
                                            </button>
                                            <div class="dropdown-items dropdown-items--right dropdown-items--up">
                                                <div class="dropdown-items__container">
                                                    <ul class="dropdown-items__list">
                                                        <li class="dropdown-items__item"><a class="dropdown-items__link" href="order-details.html"><span class="dropdown-items__link-icon">
                                    <svg class="icon-icon-view">
                                      <use xlink:href="#icon-view"></use>
                                    </svg></span>Details</a>
                                                        </li>
                                                        <li class="dropdown-items__item"><a class="dropdown-items__link"><span class="dropdown-items__link-icon">
                                    <svg class="icon-icon-duplicate">
                                      <use xlink:href="#icon-duplicate"></use>
                                    </svg></span>Duplicate</a>
                                                        </li>
                                                        <li class="dropdown-items__item"><a class="dropdown-items__link"><span class="dropdown-items__link-icon">
                                    <svg class="icon-icon-archive">
                                      <use xlink:href="#icon-archive"></use>
                                    </svg></span>Archive</a>
                                                        </li>
                                                        <li class="dropdown-items__item"><a class="dropdown-items__link"><span class="dropdown-items__link-icon">
                                    <svg class="icon-icon-trash">
                                      <use xlink:href="#icon-trash"></use>
                                    </svg></span>Delete</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="table__space">
                                    <td colspan="7"></td>
                                </tr>
                                <tr class="table__row">
                                    <td class="table__td">
                                        <div class="table__checkbox table__checkbox--all">
                                            <label class="checkbox">
                                                <input type="checkbox" data-checkbox="product"><span class="checkbox__marker"><span class="checkbox__marker-icon">
                              <svg class="icon-icon-checked">
                                <use xlink:href="#icon-checked"></use>
                              </svg></span></span>
                                            </label>
                                        </div>
                                    </td>
                                    <td class="table__td">
                                        <div class="media-item media-item--medium">
                                            <a class="media-item__icon color-red" href="customer-account.html">
                                                <div class="media-item__icon-text">CL</div>
                                                <img class="media-item__thumb" src="img/content/humans/item-10.jpg" alt="#">
                                            </a>
                                            <div class="media-item__right">
                                                <h5 class="media-item__title"><a href="customer-account.html">Christine Lewis</a></h5><a class="text-sm text-grey" href="mailto:#">example@mail.com</a>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="table__td text-light-theme">Sydney, Australia</td>
                                    <td class="table__td text-dark-theme">1000</td>
                                    <td class="table__td text-light-theme">12.07.2018</td>
                                    <td class="table__td d-none d-sm-table-cell">
                                        <div class="table__status"><span class="table__status-icon color-green"></span> Active</div>
                                    </td>
                                    <td class="table__td table__actions">
                                        <div class="items-more">
                                            <button class="items-more__button">
                                                <svg class="icon-icon-more">
                                                    <use xlink:href="#icon-more"></use>
                                                </svg>
                                            </button>
                                            <div class="dropdown-items dropdown-items--right dropdown-items--up">
                                                <div class="dropdown-items__container">
                                                    <ul class="dropdown-items__list">
                                                        <li class="dropdown-items__item"><a class="dropdown-items__link" href="order-details.html"><span class="dropdown-items__link-icon">
                                    <svg class="icon-icon-view">
                                      <use xlink:href="#icon-view"></use>
                                    </svg></span>Details</a>
                                                        </li>
                                                        <li class="dropdown-items__item"><a class="dropdown-items__link"><span class="dropdown-items__link-icon">
                                    <svg class="icon-icon-duplicate">
                                      <use xlink:href="#icon-duplicate"></use>
                                    </svg></span>Duplicate</a>
                                                        </li>
                                                        <li class="dropdown-items__item"><a class="dropdown-items__link"><span class="dropdown-items__link-icon">
                                    <svg class="icon-icon-archive">
                                      <use xlink:href="#icon-archive"></use>
                                    </svg></span>Archive</a>
                                                        </li>
                                                        <li class="dropdown-items__item"><a class="dropdown-items__link"><span class="dropdown-items__link-icon">
                                    <svg class="icon-icon-trash">
                                      <use xlink:href="#icon-trash"></use>
                                    </svg></span>Delete</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="table-wrapper__footer">
                        <div class="row">
                            <div class="table-wrapper__show-result col text-grey"><span class="d-none d-sm-inline-block">Showing</span> 1 to 10 <span class="d-none d-sm-inline-block">of 50 items</span>
                            </div>
                            <div class="table-wrapper__pagination col-auto">
                                <ol class="pagination">
                                    <li class="pagination__item">
                                        <a class="pagination__arrow pagination__arrow--prev" href="#">
                                            <svg class="icon-icon-keyboard-left">
                                                <use xlink:href="#icon-keyboard-left"></use>
                                            </svg>
                                        </a>
                                    </li>
                                    <li class="pagination__item active"><a class="pagination__link" href="#">1</a>
                                    </li>
                                    <li class="pagination__item"><a class="pagination__link" href="#">2</a>
                                    </li>
                                    <li class="pagination__item"><a class="pagination__link" href="#">3</a>
                                    </li>
                                    <li class="pagination__item pagination__item--dots">...</li>
                                    <li class="pagination__item"><a class="pagination__link" href="#">10</a>
                                    </li>
                                    <li class="pagination__item">
                                        <a class="pagination__arrow pagination__arrow--next" href="#">
                                            <svg class="icon-icon-keyboard-right">
                                                <use xlink:href="#icon-keyboard-right"></use>
                                            </svg>
                                        </a>
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
    <?php require_once("./footer.php")?>