
<?php require_once("./header.php") ?>
<?php confirm_logged_in(); ?>
<?php if($_SESSION['user_type'] == 'admin'){ redirect('dashboard.php'); } ?>
<?php require_once("./svg.php") ?>
<?php get_user_details($_SESSION['user_id']); ?>

<body class="page-home">
    <div class="sidebar-backdrop"></div>
    <div class="page-wrapper">
        <?php require_once("./user-navbar.php") ?>
        <main class="page-content">
            <div class="container">
                <div style="display : <?php if (get_user_active_status($_SESSION['user_id'])) {
                                            echo "none";
                                        } ?>;">
                    <h3>Your account is now padding for active. For more Query you can contact with admin.</h3>
                </div>
                <div style="display : <?php if (!get_user_active_status($_SESSION['user_id'])) {
                                            echo "none";
                                        } ?>;">
                    <div class="widgets">
                        <div class="widgets__row row gutter-bottom-xl">
                            <div class="col-12 col-md-6 col-xl-4 d-flex">
                                <div class="widget">
                                    <div class="widget__wrapper">
                                        <div class="widget__row">
                                            <div class="widget__left">
                                                <h3 class="widget__title">Listings</h3>
                                                <div class="widget__status-title text-grey">Total Listings. </div>
                                                <div class="widget__trade"><span class="widget__trade-count"><?php echo get_user_listing_count($_SESSION['user_id']) ?></span><span class="trade-icon trade-icon--up">
                                                        <svg class="icon-icon-trade-up">
                                                            <use xlink:href="#icon-trade-up"></use>
                                                        </svg></span><span class="badge badge--sm badge--green">7%</span>
                                                </div>
                                                <!-- <div class="widget__details"><a class="link-under text-grey" href="#">Detail</a>
                                                </div> -->
                                            </div>
                                            <div class="widget__chart">
                                                <div class="widget__chart-inner">
                                                    <div class="widget__chart-percentage">50<small>%</small>
                                                    </div>
                                                    <div class="widget__chart-caption">Listings</div>
                                                </div>
                                                <div class="widget__chart-canvas js-progress-circle" data-value="0.5" data-color="#22CCE2"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-xl-4 d-flex">
                                <div class="widget">
                                    <div class="widget__wrapper">
                                        <div class="widget__row">
                                            <div class="widget__left">
                                                <h3 class="widget__title">Pending Listing</h3>
                                                <div class="widget__status-title text-grey">Total Pending</div>
                                                <div class="widget__trade"><span class="widget__trade-count"><?php echo get_user_pending_listing_count($_SESSION['user_id']); ?></span><span class="trade-icon trade-icon--down">
                                                        <!-- <svg class="icon-icon-trade-down">
                                                            <use xlink:href="#icon-trade-down"></use>
                                                        </svg> -->
                                                    </span>
                                                    <span class="badge badge--sm badge--red"><?php echo get_percent(get_user_pending_listing_count($_SESSION['user_id']), get_user_listing_count($_SESSION['user_id'])); ?>%</span>
                                                </div>
                                                <!-- <div class="widget__details"><a class="link-under text-grey" href="#">Detail</a>
                                                </div> -->
                                            </div>
                                            <div class="widget__chart">
                                                <div class="widget__chart-inner">
                                                    <div class="widget__chart-percentage"><?php echo get_percent(get_user_pending_listing_count($_SESSION['user_id']), get_user_listing_count($_SESSION['user_id'])); ?><small>%</small>
                                                    </div>
                                                    <div class="widget__chart-caption">Panding</div>
                                                </div>
                                                <div class="widget__chart-canvas js-progress-circle" data-value="<?php echo (get_user_pending_listing_count($_SESSION['user_id']) / get_user_listing_count($_SESSION['user_id'])); ?>" data-color="#FDBF5E"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-xl-4 d-flex">
                                <div class="widget">
                                    <div class="widget__wrapper">
                                        <div class="widget__row">
                                            <div class="widget__left">
                                                <h3 class="widget__title"><?php $package_details = get_user_package_details($_SESSION['user_id']); echo ucfirst($package_details['name']); ?> Package</h3>
                                                <div class="widget__status-title text-grey">Max Listings</div>
                                                <div class="widget__trade"><span class="widget__trade-count"><?php echo $package_details['package_listing'] ?></span>
                                                </div>
                                                
                                            </div>
                                            <div class="widget__chart">
                                                <div class="widget__chart-inner">
                                                    <div class="widget__chart-percentage"><?php echo get_percent(get_user_listing_count($_SESSION['user_id']),$package_details['package_listing']); ?><small>%</small>
                                                    </div>
                                                    <div class="widget__chart-caption">Listed</div>
                                                </div>
                                                <div class="widget__chart-canvas js-progress-circle" data-value="<?php echo(get_user_listing_count($_SESSION['user_id'])/$package_details['package_listing']) ?>" data-color="#FF3D57"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <section class="section">
                        <div class="section__title d-none">
                            <h2>Section</h2>
                        </div>
                        <div class="row gutter-bottom-xl">
                            <div class="col-12 d-flex">
                                <div class="card pb-0">
                                    <div class="card__wrapper">
                                        <div class="card__container">
                                            <div class="card__header">
                                                <div class="card__header-left">
                                                    <h3 class="card__header-title">Transactions</h3>
                                                </div>
                                                <div class="card__tools-more">
                                                    <button class="items-more__button">
                                                        <svg class="icon-icon-more">
                                                            <use xlink:href="#icon-more"></use>
                                                        </svg>
                                                    </button>
                                                    <div class="dropdown-items">
                                                        <div class="dropdown-items__container">
                                                            <ul class="dropdown-items__list">
                                                                <li class="dropdown-items__item"><a class="dropdown-items__link"><span class="dropdown-items__link-icon">
                                                                            <svg class="icon-icon-refresh">
                                                                                <use xlink:href="#icon-refresh"></use>
                                                                            </svg></span>Refresh</a>
                                                                </li>
                                                                <li class="dropdown-items__item"><a class="dropdown-items__link"><span class="dropdown-items__link-icon">
                                                                            <svg class="icon-icon-settings">
                                                                                <use xlink:href="#icon-settings"></use>
                                                                            </svg></span>Settings</a>
                                                                </li>
                                                                <li class="dropdown-items__item"><a class="dropdown-items__link"><span class="dropdown-items__link-icon">
                                                                            <svg class="icon-icon-download">
                                                                                <use xlink:href="#icon-download"></use>
                                                                            </svg></span>Download</a>
                                                                </li>
                                                                <li class="dropdown-items__item"><a class="dropdown-items__link"><span class="dropdown-items__link-icon">
                                                                            <svg class="icon-icon-action">
                                                                                <use xlink:href="#icon-action"></use>
                                                                            </svg></span>Action</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card__body">
                                                <div class="card__scrollbar card__table">
                                                    <div class="card__table-transactions scrollbar-thin scrollbar-visible" data-simplebar="data-simplebar">
                                                        <table class="table table--lines table--striped">
                                                            <colgroup>
                                                                <col class="colgroup-1" />
                                                                <col class="colgroup-2" />
                                                                <col class="colgroup-3" />
                                                                <col class="colgroup-4" />
                                                                <col class="colgroup-5" />
                                                                <col class="colgroup-6" />
                                                                <col />
                                                            </colgroup>
                                                            <thead class="table__header table__header--sticky">
                                                                <tr>
                                                                    <th><span class="text-nowrap">Order No.</span>
                                                                    </th>
                                                                    <th><span>Name</span>
                                                                    </th>
                                                                    <th><span>Date</span>
                                                                    </th>
                                                                    <th><span>Amount</span>
                                                                    </th>
                                                                    <th><span>Address</span>
                                                                    </th>
                                                                    <th><span>Status</span>
                                                                    </th>
                                                                    <th class="table__actions"></th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr class="table__row">
                                                                    <td class="table__td"><span class="text-grey">#790841</span>
                                                                    </td>
                                                                    <td class="table__td">
                                                                        <div class="media-item">
                                                                            <div class="media-item__icon color-orange">
                                                                                <div class="media-item__icon-text">WS</div>
                                                                                <img class="media-item__thumb" src="img/content/humans/item-4.jpg" alt="#" />
                                                                            </div>
                                                                            <div class="media-item__right">
                                                                                <h5 class="media-item__title">Walter Sanders</h5>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td class="table__td"><span class="text-grey">12.07.2018</span>
                                                                    </td>
                                                                    <td class="table__td"><span>$700</span>
                                                                    </td>
                                                                    <td class="table__td"><span class="text-grey">Winding Way West, RI 3261, US</span>
                                                                    </td>
                                                                    <td class="table__td">
                                                                        <div class="table__status"><span class="table__status-icon color-green"></span> Paid</div>
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
                                                                                        <li class="dropdown-items__item"><a class="dropdown-items__link"><span class="dropdown-items__link-icon">
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
                                                                <tr class="table__row">
                                                                    <td class="table__td"><span class="text-grey">#781208</span>
                                                                    </td>
                                                                    <td class="table__td">
                                                                        <div class="media-item">
                                                                            <div class="media-item__icon color-blue">
                                                                                <div class="media-item__icon-text">MA</div>
                                                                                <img class="media-item__thumb" src="img/content/humans/item-6.jpg" alt="#" />
                                                                            </div>
                                                                            <div class="media-item__right">
                                                                                <h5 class="media-item__title">Mark Anderson</h5>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td class="table__td"><span class="text-grey">15.07.2018</span>
                                                                    </td>
                                                                    <td class="table__td"><span>$500</span>
                                                                    </td>
                                                                    <td class="table__td"><span class="text-grey">Jarvis Street Portville, NY 2596, US</span>
                                                                    </td>
                                                                    <td class="table__td">
                                                                        <div class="table__status"><span class="table__status-icon color-green"></span> Paid</div>
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
                                                                                        <li class="dropdown-items__item"><a class="dropdown-items__link"><span class="dropdown-items__link-icon">
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
                                                                <tr class="table__row">
                                                                    <td class="table__td"><span class="text-grey">#987120</span>
                                                                    </td>
                                                                    <td class="table__td">
                                                                        <div class="media-item">
                                                                            <div class="media-item__icon color-green">
                                                                                <div class="media-item__icon-text">PG</div>
                                                                                <img class="media-item__thumb" src="img/content/humans/item-3.jpg" alt="#" />
                                                                            </div>
                                                                            <div class="media-item__right">
                                                                                <h5 class="media-item__title">Pamela Garza</h5>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td class="table__td"><span class="text-grey">17.07.2018</span>
                                                                    </td>
                                                                    <td class="table__td"><span>$800</span>
                                                                    </td>
                                                                    <td class="table__td"><span class="text-grey">Calico Drive Ellensburg, WA 5572, US</span>
                                                                    </td>
                                                                    <td class="table__td">
                                                                        <div class="table__status"><span class="table__status-icon color-red"></span> Canceled</div>
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
                                                                                        <li class="dropdown-items__item"><a class="dropdown-items__link"><span class="dropdown-items__link-icon">
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
                                                                <tr class="table__row">
                                                                    <td class="table__td"><span class="text-grey">#871023</span>
                                                                    </td>
                                                                    <td class="table__td">
                                                                        <div class="media-item">
                                                                            <div class="media-item__icon color-red">
                                                                                <div class="media-item__icon-text">WS</div>
                                                                                <img class="media-item__thumb" src="img/content/humans/item-9.jpg" alt="#" />
                                                                            </div>
                                                                            <div class="media-item__right">
                                                                                <h5 class="media-item__title">Walter Sanders</h5>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td class="table__td"><span class="text-grey">18.07.2018</span>
                                                                    </td>
                                                                    <td class="table__td"><span>$1,000</span>
                                                                    </td>
                                                                    <td class="table__td"><span class="text-grey">Randall Drive Pahala, HI 7289, US</span>
                                                                    </td>
                                                                    <td class="table__td">
                                                                        <div class="table__status"><span class="table__status-icon color-green"></span> Paid</div>
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
                                                                                        <li class="dropdown-items__item"><a class="dropdown-items__link"><span class="dropdown-items__link-icon">
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
                                                                <tr class="table__row">
                                                                    <td class="table__td"><span class="text-grey">#902370</span>
                                                                    </td>
                                                                    <td class="table__td">
                                                                        <div class="media-item">
                                                                            <div class="media-item__icon color-orange">
                                                                                <div class="media-item__icon-text">RH</div>
                                                                                <img class="media-item__thumb" src="img/content/humans/item-5.jpg" alt="#" />
                                                                            </div>
                                                                            <div class="media-item__right">
                                                                                <h5 class="media-item__title">Ryan Henderson</h5>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td class="table__td"><span class="text-grey">22.07.2018</span>
                                                                    </td>
                                                                    <td class="table__td"><span>$900</span>
                                                                    </td>
                                                                    <td class="table__td"><span class="text-grey">Archwood Newcastle, WY 1139, US</span>
                                                                    </td>
                                                                    <td class="table__td">
                                                                        <div class="table__status"><span class="table__status-icon color-green"></span> Paid</div>
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
                                                                                        <li class="dropdown-items__item"><a class="dropdown-items__link"><span class="dropdown-items__link-icon">
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
                                                                <tr class="table__row">
                                                                    <td class="table__td"><span class="text-grey">#922309</span>
                                                                    </td>
                                                                    <td class="table__td">
                                                                        <div class="media-item">
                                                                            <div class="media-item__icon color-blue">
                                                                                <div class="media-item__icon-text">SA</div>
                                                                            </div>
                                                                            <div class="media-item__right">
                                                                                <h5 class="media-item__title">Stephen Allen</h5>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td class="table__td"><span class="text-grey">25.07.2018</span>
                                                                    </td>
                                                                    <td class="table__td"><span>$3,000</span>
                                                                    </td>
                                                                    <td class="table__td"><span class="text-grey">Park Boulevard Oskaloosa, IA 4814, US</span>
                                                                    </td>
                                                                    <td class="table__td">
                                                                        <div class="table__status"><span class="table__status-icon color-blue"></span> Pending</div>
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
                                                                                        <li class="dropdown-items__item"><a class="dropdown-items__link"><span class="dropdown-items__link-icon">
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
                                                                <tr class="table__row">
                                                                    <td class="table__td"><span class="text-grey">#892107</span>
                                                                    </td>
                                                                    <td class="table__td">
                                                                        <div class="media-item">
                                                                            <div class="media-item__icon color-red">
                                                                                <div class="media-item__icon-text">JT</div>
                                                                                <img class="media-item__thumb" src="img/content/humans/item-1.jpg" alt="#" />
                                                                            </div>
                                                                            <div class="media-item__right">
                                                                                <h5 class="media-item__title">Jennifer Tang</h5>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td class="table__td"><span class="text-grey">27.07.2018</span>
                                                                    </td>
                                                                    <td class="table__td"><span>$1,000</span>
                                                                    </td>
                                                                    <td class="table__td"><span class="text-grey">Harvest Lane Eagleville, MO 9818, US</span>
                                                                    </td>
                                                                    <td class="table__td">
                                                                        <div class="table__status"><span class="table__status-icon color-green"></span> Paid</div>
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
                                                                                        <li class="dropdown-items__item"><a class="dropdown-items__link"><span class="dropdown-items__link-icon">
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
                                                                <tr class="table__row">
                                                                    <td class="table__td"><span class="text-grey">#902370</span>
                                                                    </td>
                                                                    <td class="table__td">
                                                                        <div class="media-item">
                                                                            <div class="media-item__icon color-green">
                                                                                <div class="media-item__icon-text">SH</div>
                                                                                <img class="media-item__thumb" src="img/content/humans/item-2.jpg" alt="#" />
                                                                            </div>
                                                                            <div class="media-item__right">
                                                                                <h5 class="media-item__title">Sophia Hale</h5>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td class="table__td"><span class="text-grey">22.07.2018</span>
                                                                    </td>
                                                                    <td class="table__td"><span>$900</span>
                                                                    </td>
                                                                    <td class="table__td"><span class="text-grey">Archwood Newcastle, WY 1139, US</span>
                                                                    </td>
                                                                    <td class="table__td">
                                                                        <div class="table__status"><span class="table__status-icon color-blue"></span> Pending</div>
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
                                                                                        <li class="dropdown-items__item"><a class="dropdown-items__link"><span class="dropdown-items__link-icon">
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
                                                                <tr class="table__row">
                                                                    <td class="table__td"><span class="text-grey">#781208</span>
                                                                    </td>
                                                                    <td class="table__td">
                                                                        <div class="media-item">
                                                                            <div class="media-item__icon color-blue">
                                                                                <div class="media-item__icon-text">MA</div>
                                                                                <img class="media-item__thumb" src="img/content/humans/item-6.jpg" alt="#" />
                                                                            </div>
                                                                            <div class="media-item__right">
                                                                                <h5 class="media-item__title">Mark Anderson</h5>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td class="table__td"><span class="text-grey">24.07.2018</span>
                                                                    </td>
                                                                    <td class="table__td"><span>$800</span>
                                                                    </td>
                                                                    <td class="table__td"><span class="text-grey">Jarvis Street Portville, NY 2596, US</span>
                                                                    </td>
                                                                    <td class="table__td">
                                                                        <div class="table__status"><span class="table__status-icon color-green"></span> Paid</div>
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
                                                                                        <li class="dropdown-items__item"><a class="dropdown-items__link"><span class="dropdown-items__link-icon">
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
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section> -->
                    <!-- pending listings  -->
                    <section class="section" id="Pending-listing-section">
                        <div class="section__title d-none">
                            <h2>Section</h2>
                        </div>
                        <div class="row gutter-bottom-xl">
                            <div class="col-12 d-flex">
                                <div class="card pb-0">
                                    <div class="card__wrapper">
                                        <div class="card__container">
                                            <div class="card__header">
                                                <div class="card__header-left">
                                                    <h3 class="card__header-title">Pending Listings</h3>
                                                </div>
                                                <div class="card__tools-more">
                                                    <button class="items-more__button">
                                                        <svg class="icon-icon-more">
                                                            <use xlink:href="#icon-more"></use>
                                                        </svg>
                                                    </button>
                                                    <div class="dropdown-items">
                                                        <div class="dropdown-items__container">
                                                            <ul class="dropdown-items__list">
                                                                <li class="dropdown-items__item"><a class="dropdown-items__link"><span class="dropdown-items__link-icon">
                                                                            <svg class="icon-icon-trash">
                                                                                <use xlink:href="#icon-trash"></use>
                                                                            </svg></span>Delete All</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="card__body">
                                                <div class="card__scrollbar card__table">
                                                    <div class="card__table-transactions scrollbar-thin scrollbar-visible" data-simplebar="data-simplebar">
                                                        <table class="table table--lines table--striped">
                                                            <colgroup>
                                                                <col class="colgroup-1" />
                                                                <col class="colgroup-2" />
                                                                <col class="colgroup-3" />
                                                                <col class="colgroup-4" />
                                                                <col class="colgroup-5" />
                                                                <col class="colgroup-6" />
                                                                <col />
                                                            </colgroup>
                                                            <thead class="table__header table__header--sticky">
                                                                <tr>
                                                                    <th><span class="text-nowrap">Listing No.</span>
                                                                    </th>
                                                                    <th><span>car</span>
                                                                    </th>
                                                                    <th><span>username</span>
                                                                    </th>
                                                                    <th><span>Sale Amount</span>
                                                                    </th>
                                                                    <th><span>description</span>
                                                                    </th>
                                                                    <th><span>Approval</span>
                                                                    </th>
                                                                    <th class="table__actions"></th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php
                                                                $result = get_user_pending_listings($_SESSION['user_id']);
                                                                if (mysqli_num_rows($result) > 0) {
                                                                    while ($row = mysqli_fetch_assoc($result)) {
                                                                ?>
                                                                        <tr class="table__row">
                                                                            <td class="table__td"><span class="text-grey">#<?php echo $row['id']; ?></span>
                                                                            </td>
                                                                            <td class="table__td">
                                                                                <div class="media-item">
                                                                                    <div class="media-item__icon color-green">
                                                                                        <div class="media-item__icon-text">PG</div>
                                                                                        <img class="media-item__thumb" src="img/content/humans/item-3.jpg" alt="#" />
                                                                                    </div>
                                                                                    <div class="media-item__right">
                                                                                        <h5 class="media-item__title"><?php echo $row['make'] . " " . $row['model'] ?></h5>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            <td class="table__td"><span class="text-grey"><?php echo $row['username'] ?></span>
                                                                            </td>
                                                                            <td class="table__td"><span><?php echo $row['sale_price'] ?></span>
                                                                            </td>
                                                                            <td class="table__td"><span class="text-grey"><?php echo $row['make'] . " " . $row['model'] . " " . $row['variant'] ?></span>
                                                                            </td>
                                                                            <td class="table__td">
                                                                                <div class="table__status"><span class="table__status-icon color-red"></span> <?php echo $row['approval'] ?></div>
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
                                                                                                <li class="dropdown-items__item"><a class="dropdown-items__link"><span class="dropdown-items__link-icon">
                                                                                                            <svg class="icon-icon-view">
                                                                                                                <use xlink:href="#icon-view"></use>
                                                                                                            </svg></span>Details</a>
                                                                                                </li>
                                                                                                <li class="dropdown-items__item"><a class="dropdown-items__link" href="./delete-exe/delete-listing.php?id=<?php echo $row['id'] ?>"><span class="dropdown-items__link-icon">
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
                                                                <?php
                                                                    }
                                                                }
                                                                ?>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- <section class="section">
                        <div class="section__title d-none">
                            <h2>Section</h2>
                        </div>
                        <div class="row gutter-bottom-xl">
                            <div class="col-12 col-lg-6 col-xl-8 d-flex">
                                <div class="card pb-0">
                                    <div class="card__wrapper">
                                        <div class="card__container">
                                            <div class="card__header">
                                                <div class="card__header-left">
                                                    <h3 class="card__header-title">Sales by country</h3>
                                                </div>
                                                <div class="card__tools-more">
                                                    <button class="items-more__button">
                                                        <svg class="icon-icon-more">
                                                            <use xlink:href="#icon-more"></use>
                                                        </svg>
                                                    </button>
                                                    <div class="dropdown-items">
                                                        <div class="dropdown-items__container">
                                                            <ul class="dropdown-items__list">
                                                                <li class="dropdown-items__item"><a class="dropdown-items__link"><span class="dropdown-items__link-icon">
                                                                            <svg class="icon-icon-refresh">
                                                                                <use xlink:href="#icon-refresh"></use>
                                                                            </svg></span>Refresh</a>
                                                                </li>
                                                                <li class="dropdown-items__item"><a class="dropdown-items__link"><span class="dropdown-items__link-icon">
                                                                            <svg class="icon-icon-settings">
                                                                                <use xlink:href="#icon-settings"></use>
                                                                            </svg></span>Settings</a>
                                                                </li>
                                                                <li class="dropdown-items__item"><a class="dropdown-items__link"><span class="dropdown-items__link-icon">
                                                                            <svg class="icon-icon-download">
                                                                                <use xlink:href="#icon-download"></use>
                                                                            </svg></span>Download</a>
                                                                </li>
                                                                <li class="dropdown-items__item"><a class="dropdown-items__link"><span class="dropdown-items__link-icon">
                                                                            <svg class="icon-icon-action">
                                                                                <use xlink:href="#icon-action"></use>
                                                                            </svg></span>Action</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card__body">
                                                <div class="card-country card__table card__scrollbar">
                                                    <div class="card-country__map" id="mapCountry"></div>
                                                    <div class="card-country__items scrollbar-thin scrollbar-visible" data-simplebar="data-simplebar">
                                                        <table class="table table--lines">
                                                            <colgroup>
                                                                <col class="colgroup-1" />
                                                                <col class="colgroup-2" />
                                                                <col />
                                                            </colgroup>
                                                            <tbody>
                                                                <tr class="table__row">
                                                                    <td class="table__td text-nowrap">
                                                                        <img class="card-country__flag" src="img/content/flags/au.svg" alt="#" /><span class="card-country__name">Australia</span>
                                                                    </td>
                                                                    <td class="table__td text-nowrap"><span class="card-country__sales">Sales: <span class="font-weight-medium">25,000</span></span><span class="quotation quotation--up">
                                                                            <svg class="icon-icon-arrow-down">
                                                                                <use xlink:href="#icon-arrow-down"></use>
                                                                            </svg></span>
                                                                    </td>
                                                                    <td class="table__td"><span class="text-grey">40%</span>
                                                                    </td>
                                                                </tr>
                                                                <tr class="table__row">
                                                                    <td class="table__td text-nowrap">
                                                                        <img class="card-country__flag" src="img/content/flags/ru.svg" alt="#" /><span class="card-country__name">Russia</span>
                                                                    </td>
                                                                    <td class="table__td text-nowrap"><span class="card-country__sales">Sales: <span class="font-weight-medium">10,000</span></span><span class="quotation quotation--up">
                                                                            <svg class="icon-icon-arrow-down">
                                                                                <use xlink:href="#icon-arrow-down"></use>
                                                                            </svg></span>
                                                                    </td>
                                                                    <td class="table__td"><span class="text-grey">20%</span>
                                                                    </td>
                                                                </tr>
                                                                <tr class="table__row">
                                                                    <td class="table__td text-nowrap">
                                                                        <img class="card-country__flag" src="img/content/flags/us.svg" alt="#" /><span class="card-country__name">United States</span>
                                                                    </td>
                                                                    <td class="table__td text-nowrap"><span class="card-country__sales">Sales: <span class="font-weight-medium">5,000</span></span><span class="quotation quotation--down">
                                                                            <svg class="icon-icon-arrow-down">
                                                                                <use xlink:href="#icon-arrow-down"></use>
                                                                            </svg></span>
                                                                    </td>
                                                                    <td class="table__td"><span class="text-grey">15%</span>
                                                                    </td>
                                                                </tr>
                                                                <tr class="table__row">
                                                                    <td class="table__td text-nowrap">
                                                                        <img class="card-country__flag" src="img/content/flags/cn.svg" alt="#" /><span class="card-country__name">China</span>
                                                                    </td>
                                                                    <td class="table__td text-nowrap"><span class="card-country__sales">Sales: <span class="font-weight-medium">2,000</span></span><span class="quotation quotation--down">
                                                                            <svg class="icon-icon-arrow-down">
                                                                                <use xlink:href="#icon-arrow-down"></use>
                                                                            </svg></span>
                                                                    </td>
                                                                    <td class="table__td"><span class="text-grey">10%</span>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6 col-xl-4 d-flex">
                                <div class="card card--right pb-0">
                                    <div class="card__wrapper">
                                        <div class="card__container">
                                            <div class="card__header">
                                                <div class="card__header-left">
                                                    <h3 class="card__header-title">Reviews</h3>
                                                </div>
                                                <div class="card__tools-more">
                                                    <button class="items-more__button">
                                                        <svg class="icon-icon-more">
                                                            <use xlink:href="#icon-more"></use>
                                                        </svg>
                                                    </button>
                                                    <div class="dropdown-items">
                                                        <div class="dropdown-items__container">
                                                            <ul class="dropdown-items__list">
                                                                <li class="dropdown-items__item"><a class="dropdown-items__link"><span class="dropdown-items__link-icon">
                                                                            <svg class="icon-icon-refresh">
                                                                                <use xlink:href="#icon-refresh"></use>
                                                                            </svg></span>Refresh</a>
                                                                </li>
                                                                <li class="dropdown-items__item"><a class="dropdown-items__link"><span class="dropdown-items__link-icon">
                                                                            <svg class="icon-icon-settings">
                                                                                <use xlink:href="#icon-settings"></use>
                                                                            </svg></span>Settings</a>
                                                                </li>
                                                                <li class="dropdown-items__item"><a class="dropdown-items__link"><span class="dropdown-items__link-icon">
                                                                            <svg class="icon-icon-download">
                                                                                <use xlink:href="#icon-download"></use>
                                                                            </svg></span>Download</a>
                                                                </li>
                                                                <li class="dropdown-items__item"><a class="dropdown-items__link"><span class="dropdown-items__link-icon">
                                                                            <svg class="icon-icon-action">
                                                                                <use xlink:href="#icon-action"></use>
                                                                            </svg></span>Action</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card__body">
                                                <div class="card__review-list card__scrollbar scrollbar-thin scrollbar-visible" data-simplebar="data-simplebar">
                                                    <div class="card__container">
                                                        <div class="review-list">
                                                            <div class="review-list__item">
                                                                <a class="review-list__avatar color-red" href="reviews.html">
                                                                    <div class="review-list__avatar-text">KG</div>
                                                                    <img src="img/content/humans/item-1.jpg" alt="#" />
                                                                </a>
                                                                <div class="review-list__right">
                                                                    <h5 class="review-list__name"><a href="reviews.html">Kathy Graham</a></h5><span class="review-list__time">3 hours ago</span>
                                                                    <div class="rating js-rating-stars" data-rating="5" data-readonly="true"></div>
                                                                    <div class="review-list__message">
                                                                        <p class="review-list__text">Nemo enim ipsam voluptatem, qui in ea voluptate veting esse quam nihil molestiae consequatur, vels illum utasle etcos quam voluptates recusandae.</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="review-list__item">
                                                                <a class="review-list__avatar color-orange" href="reviews.html">
                                                                    <div class="review-list__avatar-text">DF</div>
                                                                    <img src="img/content/humans/item-4.jpg" alt="#" />
                                                                </a>
                                                                <div class="review-list__right">
                                                                    <h5 class="review-list__name"><a href="reviews.html">Dale Fisher</a></h5><span class="review-list__time">5 hours ago</span>
                                                                    <div class="rating js-rating-stars" data-rating="4" data-readonly="true"></div>
                                                                    <div class="review-list__message">
                                                                        <p class="review-list__text">At vero eos accusamus as iusto odio dignissimos provis ducimus, consectetur adipiscing elit, piscings obcaecati cupiditate nonpiscing provident fuga.</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="review-list__item">
                                                                <a class="review-list__avatar color-teal" href="reviews.html">
                                                                    <div class="review-list__avatar-text">BH</div>
                                                                    <img src="img/content/humans/item-5.jpg" alt="#" />
                                                                </a>
                                                                <div class="review-list__right">
                                                                    <h5 class="review-list__name"><a href="reviews.html">Bruce Henderson</a></h5><span class="review-list__time">6 hours ago</span>
                                                                    <div class="rating js-rating-stars" data-rating="3" data-readonly="true"></div>
                                                                    <div class="review-list__message">
                                                                        <p class="review-list__text">Et harum quidem rerum facilis esits expedita distinctios, quia voluptas sit, aspernatur aut odit aut fugit, seedrnat dolores consequuntur magni...</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="review-list__item">
                                                                <a class="review-list__avatar color-green" href="reviews.html">
                                                                    <div class="review-list__avatar-text">JH</div>
                                                                    <img src="img/content/humans/item-6.jpg" alt="#" />
                                                                </a>
                                                                <div class="review-list__right">
                                                                    <h5 class="review-list__name"><a href="reviews.html">John Hendrix</a></h5><span class="review-list__time">8 hours ago</span>
                                                                    <div class="rating js-rating-stars" data-rating="5" data-readonly="true"></div>
                                                                    <div class="review-list__message">
                                                                        <p class="review-list__text">Nemo enim ipsam voluptatem, qui in ea voluptate veting esse quam nihil molestiae consequatur, vels illum utasle etcos quam voluptates recusandae.</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="review-list__item">
                                                                <a class="review-list__avatar color-blue" href="reviews.html">
                                                                    <div class="review-list__avatar-text">SA</div>
                                                                </a>
                                                                <div class="review-list__right">
                                                                    <h5 class="review-list__name"><a href="reviews.html">Stephen Allen</a></h5><span class="review-list__time">9 hours ago</span>
                                                                    <div class="rating js-rating-stars" data-rating="4" data-readonly="true"></div>
                                                                    <div class="review-list__message">
                                                                        <p class="review-list__text">At vero eos accusamus as iusto odio dignissimos provis ducimus, consectetur adipiscing elit, piscings obcaecati cupiditate nonpiscing provident fuga.</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section> -->
                    <section class="section">
                        <div class="section__title d-none">
                            <h2>Section</h2>
                        </div>
                        <div class="row gutter-bottom-xl">
                            <div class="col-12 col-md-6 col-xl-4 d-flex">
                                <div class="card pb-0">
                                    <div class="card__wrapper">
                                        <div class="card__container">
                                            <div class="card__header">
                                                <div class="card__header-left">
                                                    <h3 class="card__header-title">Calendar</h3>
                                                </div>
                                                <div class="card__tools-more">
                                                    <!-- <button class="items-more__button">
                                                        <svg class="icon-icon-more">
                                                            <use xlink:href="#icon-more"></use>
                                                        </svg>
                                                    </button>
                                                    <div class="dropdown-items">
                                                        <div class="dropdown-items__container">
                                                            <ul class="dropdown-items__list">
                                                                <li class="dropdown-items__item"><a class="dropdown-items__link"><span class="dropdown-items__link-icon">
                                                                            <svg class="icon-icon-refresh">
                                                                                <use xlink:href="#icon-refresh"></use>
                                                                            </svg></span>Refresh</a>
                                                                </li>
                                                                <li class="dropdown-items__item"><a class="dropdown-items__link"><span class="dropdown-items__link-icon">
                                                                            <svg class="icon-icon-settings">
                                                                                <use xlink:href="#icon-settings"></use>
                                                                            </svg></span>Settings</a>
                                                                </li>
                                                                <li class="dropdown-items__item"><a class="dropdown-items__link"><span class="dropdown-items__link-icon">
                                                                            <svg class="icon-icon-download">
                                                                                <use xlink:href="#icon-download"></use>
                                                                            </svg></span>Download</a>
                                                                </li>
                                                                <li class="dropdown-items__item"><a class="dropdown-items__link"><span class="dropdown-items__link-icon">
                                                                            <svg class="icon-icon-action">
                                                                                <use xlink:href="#icon-action"></use>
                                                                            </svg></span>Action</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div> -->
                                                </div>
                                            </div>
                                            <div class="card__body">
                                                <div class="calendar-inline" id="calendarOne">
                                                    <div class="js-calendar-inline"></div>
                                                </div>
                                            </div>
                                            <div class="card__footer card__footer--md">
                                                <div class="card__container">
                                                    <div class="calendar-widget" data-calendar="#calendarOne">
                                                        <div class="calendar-widget__row">
                                                            <div class="calendar-widget__item calendar-widget__item--left">
                                                                <div class="calendar-widget__day"><span class="calendar-widget__dateday">13</span><sup class="calendar-widget__weekday text-grey">TH</sup>
                                                                </div>
                                                                <div class="calendar-widget__month text-grey">December</div>
                                                            </div>
                                                            <!-- <div class="calendar-widget__item">
                                                                <div class="calendar-widget__status"><span class="circle color-green"></span><span>Upcoming</span>
                                                                </div>
                                                                <div class="calendar-widget__order text-grey">
                                                                    Order Delivery 04:30 PM
                                                                </div>
                                                            </div> -->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </main>
    </div>
    <?php require_once("./footer.php") ?>