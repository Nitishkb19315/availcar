<?php require_once("./header.php") ?>
<?php confirm_logged_in(); ?>
<?php if (!confirm_admin()) {
    redirect('user-dashboard.php');
}; ?>
<?php require_once("./svg.php") ?>

<body class="page-home">

    <div class="sidebar-backdrop"></div>
    <div class="page-wrapper">
        <?php require_once("./navbar.php") ?>
        <main class="page-content">
            <div class="container">
                <div class="widgets">
                    <div class="widgets__row row gutter-bottom-xl">
                        <div class="col-12 col-md-6 col-xl-4 d-flex">
                            <div class="widget">
                                <div class="widget__wrapper">
                                    <div class="widget__row">
                                        <div class="widget__left">
                                            <h3 class="widget__title">Users</h3>
                                            <div class="widget__status-title text-grey">Total User</div>
                                            <div class="widget__trade"><span class="widget__trade-count"><?php echo (get_total_user()); ?></span><span class="trade-icon trade-icon--up">
                                                    <svg class="icon-icon-trade-up">
                                                        <use xlink:href="#icon-trade-up"></use>
                                                    </svg></span><span class="badge badge--sm badge--green"><?php echo get_percent(last_week_users(), get_total_user()); ?>%</span>
                                            </div>
                                            <div class="widget__details"><a class="link-under text-grey" href="#">Detail</a>
                                            </div>
                                        </div>
                                        <div class="widget__chart">
                                            <div class="widget__chart-inner">
                                                <div class="widget__chart-percentage"><?php echo get_percent(last_week_users(), get_total_user()); ?><small>%</small>
                                                </div>
                                                <div class="widget__chart-caption">New users</div>
                                            </div>
                                            <div class="widget__chart-canvas js-progress-circle" data-value="<?php echo last_week_users() / get_total_user(); ?>" data-color="#22CCE2"></div>
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
                                            <h3 class="widget__title">Listings</h3>
                                            <div class="widget__status-title text-grey">Total Listings</div>
                                            <div class="widget__trade"><span class="widget__trade-count"><?php echo get_total_listings(); ?></span><span class="trade-icon trade-icon--down">
                                                    <svg class="icon-icon-trade-down">
                                                        <use xlink:href="#icon-trade-up"></use>
                                                    </svg></span><span class="badge badge--sm badge--green"><?php echo get_percent(get_today_listings(), get_total_listings()); ?>%</span>
                                            </div>
                                            <div class="widget__details"><a class="link-under text-grey" href="./manage-listing.php">Detail</a>
                                            </div>
                                        </div>
                                        <div class="widget__chart">
                                            <div class="widget__chart-inner">
                                                <div class="widget__chart-percentage"><?php echo get_percent(get_today_listings(), get_total_listings()); ?><small>%</small>
                                                </div>
                                                <div class="widget__chart-caption">New Listings</div>
                                            </div>
                                            <div class="widget__chart-canvas js-progress-circle" data-value="<?php echo (get_today_listings() / get_total_listings()); ?>" data-color="#FDBF5E"></div>
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
                                            <h3 class="widget__title">Pending Listings</h3>
                                            <div class="widget__status-title text-grey">Total pending listings</div>
                                            <div class="widget__trade"><span class="widget__trade-count"><?php echo get_pending_listings_count(); ?></span><span class="trade-icon trade-icon--up">
                                                    <svg class="icon-icon-trade-up">
                                                        <use xlink:href="#icon-trade-down"></use>
                                                    </svg></span><span class="badge badge--sm badge--red"><?php echo get_percent(get_pending_listings_count(), get_total_listings()); ?>%</span>
                                            </div>
                                            <div class="widget__details"><a class="link-under text-grey" href="#Pending-listing-section">Detail</a>
                                            </div>
                                        </div>
                                        <div class="widget__chart">
                                            <div class="widget__chart-inner">
                                                <div class="widget__chart-percentage"><?php echo get_percent(get_pending_listings_count(), get_total_listings()); ?><small>%</small>
                                                </div>
                                                <div class="widget__chart-caption">Pending</div>
                                            </div>
                                            <div class="widget__chart-canvas js-progress-circle" data-value="<?php echo (get_pending_listings_count() / get_total_listings()); ?>" data-color="#FF3D57"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <section class="section">
                    <div class="section__title d-none">
                        <h2>Section</h2>
                    </div>
                    <div class="row justify-content-center gutter-bottom-xl">
                        <div class="col-12 col-lg-7 col-xl-8 d-flex">
                            <div class="card">
                                <div class="card__wrapper">
                                    <div class="card__container">
                                        <div class="card__header">
                                            <div class="card__header-left">
                                                <h3 class="card__header-title">Revenue</h3>
                                            </div>
                                            <div class="card__tools">
                                                <div class="card__tools-row row row--xs gutter-bottom-xs">
                                                    <div class="card__tools-calendar col-auto">
                                                        <div class="input-group input-group--prepend input-group--append">
                                                            <div class="input-group__prepend">
                                                                <svg class="icon-icon-calendar">
                                                                    <use xlink:href="#icon-calendar"></use>
                                                                </svg>
                                                            </div>
                                                            <input class="input input--select" type="text" value="01.12.18 / 07.12.18" readonly="readonly" /><span class="input-group__arrow">
                                                                <svg class="icon-icon-keyboard-down">
                                                                    <use xlink:href="#icon-keyboard-down"></use>
                                                                </svg></span>
                                                        </div>
                                                    </div>
                                                    <div class="card__tools-week col">
                                                        <div class="input-group input-group--append">
                                                            <input class="input input--select" type="text" value="Week" data-toggle="dropdown" readonly="readonly" /><span class="input-group__arrow">
                                                                <svg class="icon-icon-keyboard-down">
                                                                    <use xlink:href="#icon-keyboard-down"></use>
                                                                </svg></span>
                                                            <div class="dropdown-menu dropdown-menu--right dropdown-menu--fluid js-dropdown-select"><a class="dropdown-menu__item active" href="#" tabindex="0" data-value="Week">Week</a><a class="dropdown-menu__item" href="#" tabindex="0" data-value="Month">Month</a><a class="dropdown-menu__item" href="#" tabindex="0" data-value="Quarter">Quarter</a><a class="dropdown-menu__item" href="#" tabindex="0" data-value="Year">Year</a><a class="dropdown-menu__item" href="#" tabindex="0" data-value="All Time">All Time</a>
                                                                <a class="dropdown-menu__item" href="#" tabindex="0" data-value="Custom">Custom</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
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
                                            <div class="card__widgets">
                                                <div class="card__widgets-row gutter-bottom-sm">
                                                    <div class="card-widget">
                                                        <h4 class="card-widget__title">Current week</h4>
                                                        <div class="card-widget__trade"><span class="card-widget__count text-red">$180</span><span class="trade-icon trade-icon--up">
                                                                <svg class="icon-icon-trade-up">
                                                                    <use xlink:href="#icon-trade-up"></use>
                                                                </svg></span><span class="badge badge--green badge--sm">5%</span>
                                                        </div>
                                                    </div>
                                                    <div class="card-widget">
                                                        <h4 class="card-widget__title">Previous week</h4>
                                                        <div class="card-widget__trade"><span class="card-widget__count text-grey">$52.30</span><span class="trade-icon trade-icon--down">
                                                                <svg class="icon-icon-trade-down">
                                                                    <use xlink:href="#icon-trade-down"></use>
                                                                </svg></span><span class="badge badge--red badge--sm">2%</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card__chart">
                                                <div class="card__container card__container--gutter-sm">
                                                    <div class="card__chart-item chart-revenue" id="revenueChart" data-series="[[0, 10, 48, 9, 9, 53, 12], [0, 45, 9, 49, 53, 180, 70]]"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-5 col-xl-4 d-flex">
                            <div class="card">
                                <div class="card__wrapper">
                                    <div class="card__container">
                                        <div class="card__header mb-0">
                                            <div class="card__header-left">
                                                <h3 class="card__header-title">Profit</h3>
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
                                            <div class="card__chart">
                                                <div class="card__chart-item chart-profit" id="profitPieChart" data-series="[200, 120, 180]"></div>
                                            </div>
                                        </div>
                                        <div class="card__footer">
                                            <div class="card__container">
                                                <table class="card__stat">
                                                    <tbody>
                                                        <tr>
                                                            <td><span class="signal" style="color: #FF3D57;"></span><span>Current</span>
                                                            </td>
                                                            <td><span>$500</span><span class="quotation quotation--up">
                                                                    <svg class="icon-icon-arrow-down">
                                                                        <use xlink:href="#icon-arrow-down"></use>
                                                                    </svg></span>
                                                            </td>
                                                            <td><span class="text-grey">37%</span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td><span class="signal" style="color: #FDBF5E;"></span><span>Lost</span>
                                                            </td>
                                                            <td><span>$450</span><span class="quotation quotation--down">
                                                                    <svg class="icon-icon-arrow-down">
                                                                        <use xlink:href="#icon-arrow-down"></use>
                                                                    </svg></span>
                                                            </td>
                                                            <td><span class="text-grey">35%</span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td><span class="signal" style="color: #22CCE2;"></span><span>Target</span>
                                                            </td>
                                                            <td><span>$300</span><span class="quotation quotation--down">
                                                                    <svg class="icon-icon-arrow-down">
                                                                        <use xlink:href="#icon-arrow-down"></use>
                                                                    </svg></span>
                                                            </td>
                                                            <td><span class="text-grey">28%</span>
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
                </section>
                <!-- <section class="section">
                    <div class="section__title d-none">
                        <h2>Section</h2>
                    </div>
                    <div class="row justify-content-center gutter-bottom-xl">
                        <div class="col-12 col-lg-7 col-xl-8 d-flex">
                            <div class="card">
                                <div class="card__wrapper">
                                    <div class="card__container">
                                        <div class="card__header">
                                            <div class="card__header-left">
                                                <h3 class="card__header-title">Activity</h3>
                                            </div>
                                            <div class="card__tools">
                                                <div class="card__tools-row row row--xs gutter-bottom-xs">
                                                    <div class="card__tools-calendar col-auto">
                                                        <div class="input-group input-group--prepend input-group--append">
                                                            <div class="input-group__prepend">
                                                                <svg class="icon-icon-calendar">
                                                                    <use xlink:href="#icon-calendar"></use>
                                                                </svg>
                                                            </div>
                                                            <input class="input input--select" type="text" value="01.12.18 / 07.12.18" readonly="readonly" /><span class="input-group__arrow">
                                                                <svg class="icon-icon-keyboard-down">
                                                                    <use xlink:href="#icon-keyboard-down"></use>
                                                                </svg></span>
                                                        </div>
                                                    </div>
                                                    <div class="card__tools-week col">
                                                        <div class="input-group input-group--append">
                                                            <input class="input input--select" type="text" value="Week" data-toggle="dropdown" readonly="readonly" /><span class="input-group__arrow">
                                                                <svg class="icon-icon-keyboard-down">
                                                                    <use xlink:href="#icon-keyboard-down"></use>
                                                                </svg></span>
                                                            <div class="dropdown-menu dropdown-menu--right dropdown-menu--fluid js-dropdown-select"><a class="dropdown-menu__item active" href="#" tabindex="0" data-value="Week">Week</a><a class="dropdown-menu__item" href="#" tabindex="0" data-value="Month">Month</a><a class="dropdown-menu__item" href="#" tabindex="0" data-value="Quarter">Quarter</a><a class="dropdown-menu__item" href="#" tabindex="0" data-value="Year">Year</a><a class="dropdown-menu__item" href="#" tabindex="0" data-value="All Time">All Time</a>
                                                                <a class="dropdown-menu__item" href="#" tabindex="0" data-value="Custom">Custom</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
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
                                            <div class="card__chart">
                                                <div class="card__container">
                                                    <div class="card__chart-item chart-activity" id="activityChart" data-series="[[&quot;Mon&quot;, &quot;Tue&quot;, &quot;Wed&quot;, &quot;Thu&quot;, &quot;Fri&quot;, &quot;Sat&quot;, &quot;Sun&quot;], [170, 120, 200, 270, 220, 290, 320], [120, 90, 100, 240, 120, 200, 250]]"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-5 col-xl-4 d-flex">
                            <div class="card">
                                <div class="card__wrapper">
                                    <div class="card__container">
                                        <div class="card__header mb-0">
                                            <div class="card__header-left">
                                                <h3 class="card__header-title">Tasks</h3>
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
                                            <div class="card__chart">
                                                <div class="card__chart-item chart-task" id="taskPieChart" data-series="[75, 25, 80]"></div>
                                            </div>
                                            <div class="card__chart-progress">
                                                <div class="card__chart-progress-item">
                                                    <div class="card__progressbar">
                                                        <div class="progressbar">
                                                            <div class="progressbar__legend"><span class="progressbar__legend-marker" style="color: #FF3D57"></span><span>Complete</span>
                                                            </div>
                                                            <div class="progressbar__items">
                                                                <div class="progressbar__bar" style="width: 75%; background-color: #FF3D57;"></div>
                                                            </div>
                                                            <div class="progressbar__append"><span class="progressbar__percentage">75%</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card__chart-progress-item">
                                                    <div class="card__progressbar">
                                                        <div class="progressbar">
                                                            <div class="progressbar__legend"><span class="progressbar__legend-marker" style="color: #FDBF5E"></span><span>In Progress</span>
                                                            </div>
                                                            <div class="progressbar__items">
                                                                <div class="progressbar__bar" style="width: 25%; background-color: #FDBF5E;"></div>
                                                            </div>
                                                            <div class="progressbar__append"><span class="progressbar__percentage">25%</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card__chart-progress-item">
                                                    <div class="card__progressbar">
                                                        <div class="progressbar">
                                                            <div class="progressbar__legend"><span class="progressbar__legend-marker" style="color: #22CCE2"></span><span>Started</span>
                                                            </div>
                                                            <div class="progressbar__items">
                                                                <div class="progressbar__bar" style="width: 80%; background-color: #22CCE2;"></div>
                                                            </div>
                                                            <div class="progressbar__append"><span class="progressbar__percentage">80%</span>
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
                <!-- <section class="section">
                    <div class="section__title d-none">
                        <h2>Section</h2>
                    </div>
                    <div class="row justify-content-center gutter-bottom-xl">
                        <div class="col-12 col-lg-7 col-xl-8 d-flex">
                            <div class="card card--overview">
                                <div class="card__wrapper">
                                    <div class="card__container">
                                        <div class="card__header">
                                            <div class="card__header-left">
                                                <h3 class="card__header-title">Overview</h3>
                                            </div>
                                            <div class="card__tools">
                                                <div class="card__tools-row row row--xs gutter-bottom-xs">
                                                    <div class="card__tools-switcher col">
                                                        <div class="switcher-button">
                                                            <div class="switcher-button__items">
                                                                <div class="switcher-button__float"></div>
                                                                <div class="switcher-button__item active">
                                                                    <button class="switcher-button__btn">Weekly</button>
                                                                </div>
                                                                <div class="switcher-button__item">
                                                                    <button class="switcher-button__btn">Monthly</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
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
                                            <div class="card__widgets">
                                                <div class="card__widgets-row gutter-bottom-sm">
                                                    <div class="card-widget card-widget--sm">
                                                        <h4 class="card-widget__title">Views</h4>
                                                        <div class="card-widget__trade"><span class="card-widget__count">9,000</span><span class="trade-icon trade-icon--up">
                                                                <svg class="icon-icon-trade-up">
                                                                    <use xlink:href="#icon-trade-up"></use>
                                                                </svg></span><span class="badge badge--green badge--sm">5%</span>
                                                        </div>
                                                    </div>
                                                    <div class="card-widget card-widget--sm">
                                                        <h4 class="card-widget__title">Visits</h4>
                                                        <div class="card-widget__trade"><span class="card-widget__count">15,000</span><span class="trade-icon trade-icon--down">
                                                                <svg class="icon-icon-trade-down">
                                                                    <use xlink:href="#icon-trade-down"></use>
                                                                </svg></span><span class="badge badge--red badge--sm">5%</span>
                                                        </div>
                                                    </div>
                                                    <div class="card-widget card-widget--sm">
                                                        <h4 class="card-widget__title">Orders</h4>
                                                        <div class="card-widget__trade"><span class="card-widget__count">18,000</span><span class="trade-icon trade-icon--up">
                                                                <svg class="icon-icon-trade-up">
                                                                    <use xlink:href="#icon-trade-up"></use>
                                                                </svg></span><span class="badge badge--green badge--sm">5%</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card__chart">
                                                <div class="card__container card__container--gutter-sm">
                                                    <div class="card__chart-item chart-overview" id="overviewLineChart" data-series="[20, 60, 30, 50, 120, 90, 200]"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-5 col-xl-4 d-flex">
                            <div class="card">
                                <div class="card__wrapper">
                                    <div class="card__container">
                                        <div class="card__header">
                                            <div class="card__header-left">
                                                <h3 class="card__header-title">Statistics</h3>
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
                                            <div class="card__chart">
                                                <div class="card__container">
                                                    <div class="card__chart-item chart-statistics" id="statisticsBarChart" data-series="[[&quot;Mon&quot;, &quot;Tue&quot;, &quot;Wed&quot;, &quot;Thu&quot;, &quot;Fri&quot;, &quot;Sat&quot;, &quot;Sun&quot;],[2300, 6200, 7900, 8600, 9050, 3950, 6400],[4200, 4900, 3900, 10000, 6000, 5000, 4500]]"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section> -->
                <!-- 99/ -->
                <section class="section">
                    <div class="section__title d-none">
                        <h2>Section</h2>
                    </div>
                    <div class="row gutter-bottom-xl">
                        <div class="col-12 col-lg-7 col-xl-8 d-flex">
                            <div class="card card--lg">
                                <div class="card__wrapper">
                                    <div class="card__container">
                                        <div class="card__header">
                                            <div class="card__header-left">
                                                <h3 class="card__header-title">Revenue By Country</h3>
                                            </div>
                                            <div class="card__tools">
                                                <div class="card__tools-row row row--xs gutter-bottom-xs">
                                                    <div class="card__tools-switcher col">
                                                        <div class="switcher-button">
                                                            <div class="switcher-button__items">
                                                                <div class="switcher-button__float"></div>
                                                                <div class="switcher-button__item">
                                                                    <button class="switcher-button__btn">Daily</button>
                                                                </div>
                                                                <div class="switcher-button__item active">
                                                                    <button class="switcher-button__btn">Weekly</button>
                                                                </div>
                                                                <div class="switcher-button__item">
                                                                    <button class="switcher-button__btn">Monthly</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
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
                                            <div class="card__widgets">
                                                <div class="card__widgets-row gutter-bottom-sm">
                                                    <div class="card-widget card-widget--xl">
                                                        <h4 class="card-widget__title">Total Revenue</h4>
                                                        <div class="card-widget__trade"><span class="card-widget__count">$210,000</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card__countries-progressbar">
                                                <div class="progressbar progressbar--stacked progressbar--axis-top progressbar--lg">
                                                    <div class="progressbar__items">
                                                        <div class="progressbar__bar progressbar__bar--green" style="width: 40%;"><span class="progressbar__bar-count">$70,000</span>
                                                        </div>
                                                        <div class="progressbar__bar progressbar__bar--orange" style="width: 20%;"><span class="progressbar__bar-count">$55,000</span>
                                                        </div>
                                                        <div class="progressbar__bar progressbar__bar--red" style="width: 20%;"><span class="progressbar__bar-count">$40,000</span>
                                                        </div>
                                                        <div class="progressbar__bar progressbar__bar--orange-dark" style="width: 10%;"><span class="progressbar__bar-count">$25,000</span>
                                                        </div>
                                                        <div class="progressbar__bar progressbar__bar--teal" style="width: 10%;"><span class="progressbar__bar-count">$20,000</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card__footer card__footer--lg">
                                            <div class="card__container">
                                                <div class="country-legend">
                                                    <div class="country-legend__row">
                                                        <div class="country-legend__item">
                                                            <div class="country-legend__left"><span class="country-legend__marker color-green"></span><span class="country-legend__name">Russia</span>
                                                            </div>
                                                            <div class="country-legend__trade"><span class="country-legend__quot quotation quotation--up">
                                                                    <svg class="icon-icon-arrow-down">
                                                                        <use xlink:href="#icon-arrow-down"></use>
                                                                    </svg></span><span class="country-legend__percentage">40%</span>
                                                            </div>
                                                        </div>
                                                        <div class="country-legend__item">
                                                            <div class="country-legend__left"><span class="country-legend__marker color-orange"></span><span class="country-legend__name">Australia</span>
                                                            </div>
                                                            <div class="country-legend__trade"><span class="country-legend__quot quotation quotation--down">
                                                                    <svg class="icon-icon-arrow-down">
                                                                        <use xlink:href="#icon-arrow-down"></use>
                                                                    </svg></span><span class="country-legend__percentage">20%</span>
                                                            </div>
                                                        </div>
                                                        <div class="country-legend__item">
                                                            <div class="country-legend__left"><span class="country-legend__marker color-red"></span><span class="country-legend__name">China</span>
                                                            </div>
                                                            <div class="country-legend__trade"><span class="country-legend__quot quotation quotation--up">
                                                                    <svg class="icon-icon-arrow-down">
                                                                        <use xlink:href="#icon-arrow-down"></use>
                                                                    </svg></span><span class="country-legend__percentage">20%</span>
                                                            </div>
                                                        </div>
                                                        <div class="country-legend__item">
                                                            <div class="country-legend__left"><span class="country-legend__marker color-orange-dark"></span><span class="country-legend__name">France</span>
                                                            </div>
                                                            <div class="country-legend__trade"><span class="country-legend__quot quotation quotation--down">
                                                                    <svg class="icon-icon-arrow-down">
                                                                        <use xlink:href="#icon-arrow-down"></use>
                                                                    </svg></span><span class="country-legend__percentage">10%</span>
                                                            </div>
                                                        </div>
                                                        <div class="country-legend__item">
                                                            <div class="country-legend__left"><span class="country-legend__marker color-teal"></span><span class="country-legend__name">USA</span>
                                                            </div>
                                                            <div class="country-legend__trade"><span class="country-legend__quot quotation quotation--up">
                                                                    <svg class="icon-icon-arrow-down">
                                                                        <use xlink:href="#icon-arrow-down"></use>
                                                                    </svg></span><span class="country-legend__percentage">10%</span>
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
                        <div class="col-12 col-lg-5 col-xl-4 d-flex">
                            <div class="card card--right pb-0">
                                <div class="card__wrapper">
                                    <div class="card__container">
                                        <div class="card__header">
                                            <div class="card__header-left">
                                                <h3 class="card__header-title">Transactions History</h3>
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
                                            <div class="card__transactions card__scrollbar scrollbar-thin scrollbar-visible" data-simplebar="data-simplebar">
                                                <div class="card-transactions">
                                                    <div class="card-transactions__item">
                                                        <div class="card-transactions__left">
                                                            <div class="card-transactions__icon">
                                                                <svg class="icon-icon-bill">
                                                                    <use xlink:href="#icon-bill"></use>
                                                                </svg>
                                                            </div>
                                                            <div class="card-transactions__right">
                                                                <h5 class="card-transactions__title">MacBook Pro</h5><span class="card-transactions__time">12:00 PM</span>
                                                            </div>
                                                        </div>
                                                        <div class="card-transactions__details">
                                                            <div class="card-transactions__cost">$2,500</div><a class="text-sm text-grey link-under" href="#">Detail</a>
                                                        </div>
                                                    </div>
                                                    <div class="card-transactions__item">
                                                        <div class="card-transactions__left">
                                                            <div class="card-transactions__icon">
                                                                <svg class="icon-icon-bill">
                                                                    <use xlink:href="#icon-bill"></use>
                                                                </svg>
                                                            </div>
                                                            <div class="card-transactions__right">
                                                                <h5 class="card-transactions__title">Apple Watch</h5><span class="card-transactions__time">01:00 PM</span>
                                                            </div>
                                                        </div>
                                                        <div class="card-transactions__details">
                                                            <div class="card-transactions__cost">$1,500</div><a class="text-sm text-grey link-under" href="#">Detail</a>
                                                        </div>
                                                    </div>
                                                    <div class="card-transactions__item">
                                                        <div class="card-transactions__left">
                                                            <div class="card-transactions__icon">
                                                                <svg class="icon-icon-bill">
                                                                    <use xlink:href="#icon-bill"></use>
                                                                </svg>
                                                            </div>
                                                            <div class="card-transactions__right">
                                                                <h5 class="card-transactions__title">AirPods</h5><span class="card-transactions__time">02:00 PM</span>
                                                            </div>
                                                        </div>
                                                        <div class="card-transactions__details">
                                                            <div class="card-transactions__cost">$500</div><a class="text-sm text-grey link-under" href="#">Detail</a>
                                                        </div>
                                                    </div>
                                                    <div class="card-transactions__item">
                                                        <div class="card-transactions__left">
                                                            <div class="card-transactions__icon">
                                                                <svg class="icon-icon-bill">
                                                                    <use xlink:href="#icon-bill"></use>
                                                                </svg>
                                                            </div>
                                                            <div class="card-transactions__right">
                                                                <h5 class="card-transactions__title">iPhone Xs Max</h5><span class="card-transactions__time">03:00 PM</span>
                                                            </div>
                                                        </div>
                                                        <div class="card-transactions__details">
                                                            <div class="card-transactions__cost">$2,500</div><a class="text-sm text-grey link-under" href="#">Detail</a>
                                                        </div>
                                                    </div>
                                                    <div class="card-transactions__item">
                                                        <div class="card-transactions__left">
                                                            <div class="card-transactions__icon">
                                                                <svg class="icon-icon-bill">
                                                                    <use xlink:href="#icon-bill"></use>
                                                                </svg>
                                                            </div>
                                                            <div class="card-transactions__right">
                                                                <h5 class="card-transactions__title">IPad Pro 10.5</h5><span class="card-transactions__time">04:00 PM</span>
                                                            </div>
                                                        </div>
                                                        <div class="card-transactions__details">
                                                            <div class="card-transactions__cost">$1,000</div><a class="text-sm text-grey link-under" href="#">Detail</a>
                                                        </div>
                                                    </div>
                                                    <div class="card-transactions__item">
                                                        <div class="card-transactions__left">
                                                            <div class="card-transactions__icon">
                                                                <svg class="icon-icon-bill">
                                                                    <use xlink:href="#icon-bill"></use>
                                                                </svg>
                                                            </div>
                                                            <div class="card-transactions__right">
                                                                <h5 class="card-transactions__title">iMac Pro</h5><span class="card-transactions__time">05:00 PM</span>
                                                            </div>
                                                        </div>
                                                        <div class="card-transactions__details">
                                                            <div class="card-transactions__cost">$5,000</div><a class="text-sm text-grey link-under" href="#">Detail</a>
                                                        </div>
                                                    </div>
                                                    <div class="card-transactions__item">
                                                        <div class="card-transactions__left">
                                                            <div class="card-transactions__icon">
                                                                <svg class="icon-icon-bill">
                                                                    <use xlink:href="#icon-bill"></use>
                                                                </svg>
                                                            </div>
                                                            <div class="card-transactions__right">
                                                                <h5 class="card-transactions__title">AirPods</h5><span class="card-transactions__time">02:00 PM</span>
                                                            </div>
                                                        </div>
                                                        <div class="card-transactions__details">
                                                            <div class="card-transactions__cost">$500</div><a class="text-sm text-grey link-under" href="#">Detail</a>
                                                        </div>
                                                    </div>
                                                    <div class="card-transactions__item">
                                                        <div class="card-transactions__left">
                                                            <div class="card-transactions__icon">
                                                                <svg class="icon-icon-bill">
                                                                    <use xlink:href="#icon-bill"></use>
                                                                </svg>
                                                            </div>
                                                            <div class="card-transactions__right">
                                                                <h5 class="card-transactions__title">iPhone Xs Max</h5><span class="card-transactions__time">03:00 PM</span>
                                                            </div>
                                                        </div>
                                                        <div class="card-transactions__details">
                                                            <div class="card-transactions__cost">$2,500</div><a class="text-sm text-grey link-under" href="#">Detail</a>
                                                        </div>
                                                    </div>
                                                    <div class="card-transactions__item">
                                                        <div class="card-transactions__left">
                                                            <div class="card-transactions__icon">
                                                                <svg class="icon-icon-bill">
                                                                    <use xlink:href="#icon-bill"></use>
                                                                </svg>
                                                            </div>
                                                            <div class="card-transactions__right">
                                                                <h5 class="card-transactions__title">IPad Pro 10.5</h5><span class="card-transactions__time">04:00 PM</span>
                                                            </div>
                                                        </div>
                                                        <div class="card-transactions__details">
                                                            <div class="card-transactions__cost">$1,000</div><a class="text-sm text-grey link-under" href="#">Detail</a>
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
                </section>
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
                                                            <li class="dropdown-items__item"><a href="./execution/approve-all-listings.php" class="dropdown-items__link"><span class="dropdown-items__link-icon">
                                                                        <svg class="icon-icon-refresh">
                                                                            <use xlink:href="#icon-refresh"></use>
                                                                        </svg></span>Approve All</a>
                                                            </li>
                                                            <li class="dropdown-items__item"><a href="./delete-exe/delete-panding-listings.php" class="dropdown-items__link"><span class="dropdown-items__link-icon">
                                                                        <svg class="icon-icon-settings">
                                                                            <use xlink:href="#icon-settings"></use>
                                                                        </svg></span>Delete All</a>
                                                            </li>

                                                            <li class="dropdown-items__item"><a href="manage-listing.php" class="dropdown-items__link"><span class="dropdown-items__link-icon">
                                                                        <svg class="icon-icon-action">
                                                                            <use xlink:href="#icon-action"></use>
                                                                        </svg></span>Manage Listing</a>
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
                                                            $result = get_all_pending_listings();
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
                                                                                            <li class="dropdown-items__item"><a class="dropdown-items__link" href="execution/listing-approval.php?id=<?php echo $row['id'] ?>"><span class="dropdown-items__link-icon">
                                                                                                        <svg class="icon-icon-duplicate">
                                                                                                            <use xlink:href="#icon-duplicate"></use>
                                                                                                        </svg></span>Approve</a>
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
                <!-- pending users  -->
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
                                                <h3 class="card__header-title">Pending Users</h3>
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
                                                            <li class="dropdown-items__item"><a class="dropdown-items__link" href="./execution/approve-all-user-exe.php"><span class="dropdown-items__link-icon">
                                                                        <svg class="icon-icon-refresh">
                                                                            <use xlink:href="#icon-refresh"></use>
                                                                        </svg></span>Activate All</a>
                                                            </li>
                                                            <li class="dropdown-items__item"><a class="dropdown-items__link"><span class="dropdown-items__link-icon">
                                                                        <svg class="icon-icon-settings">
                                                                            <use xlink:href="#icon-settings"></use>
                                                                        </svg></span>Delete All</a>
                                                            </li>

                                                            <li class="dropdown-items__item"><a class="dropdown-items__link" href="./manage-users.php"><span class="dropdown-items__link-icon">
                                                                        <svg class="icon-icon-action">
                                                                            <use xlink:href="#icon-action"></use>
                                                                        </svg></span>Manage Users</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card__body">
                                            <div class="card__scrollbar card__table">
                                                <div class="card__table-transactions  scrollbar-thin scrollbar-visible" data-simplebar="data-simplebar">
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
                                                                <th><span class="text-nowrap">User Id.</span>
                                                                </th>
                                                                <th><span>User</span>
                                                                </th>
                                                                <th><span>username</span>
                                                                </th>
                                                                <th><span>Mobile No</span>
                                                                </th>
                                                                <th><span>Location</span>
                                                                </th>
                                                                <th><span>STATUS</span>
                                                                </th>
                                                                <th class="table__actions"></th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php
                                                            $result = get_pending_user_list();
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
                                                                                    <img class="media-item__thumb" src="<?php if (empty(trim($row['profile_image']))) {
                                                                                                                            echo 'img/content/humans/item-3.jpg';
                                                                                                                        } else {
                                                                                                                            echo './uploads/profiles/' . $row['profile_image'];
                                                                                                                        } ?>" alt="#" />
                                                                                </div>
                                                                                <div class="media-item__right">
                                                                                    <h5 class="media-item__title"><?php echo $row['fname'] . " " . $row['lname']; ?></h5>
                                                                                    <a class="text-sm text-grey" href="mailto:<?php echo $row['email'] ?>"><?php echo $row['email'] ?></a>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td class="table__td"><span class="text-grey"><?php echo $row['username'] ?></span>
                                                                        </td>
                                                                        <td class="table__td"><span> <a href="tel:<?php echo $row['mobile_no'] ?>"> <?php echo $row['mobile_no'] ?> </a></span>
                                                                        </td>
                                                                        <td class="table__td"><span class="text-grey"><?php echo $row['address'] . ", " . $row['city'] . ", " . $row['country'] ?></span>
                                                                        </td>
                                                                        <td class="table__td">
                                                                            <div class="table__status"><span class="table__status-icon color-red"></span>Deactivate</div>
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
                                                                                            <li class="dropdown-items__item"><a class="dropdown-items__link" href="./execution/activate-user-exe.php?id=<?php echo $row['id']; ?>"><span class="dropdown-items__link-icon">
                                                                                                        <svg class="icon-icon-duplicate">
                                                                                                            <use xlink:href="#icon-duplicate"></use>
                                                                                                        </svg></span><?php if ($row['account_status'] == 1) {
                                                                                                                            echo 'Deactivate';
                                                                                                                        } else {
                                                                                                                            echo 'Activate';
                                                                                                                        } ?></a>
                                                                                            </li>
                                                                                            <li class="dropdown-items__item"><a class="dropdown-items__link" href="./user-profile.php?id=<?php echo $row['id']; ?>"><span class="dropdown-items__link-icon">
                                                                                                        <svg class="icon-icon-user">
                                                                                                            <use xlink:href="#icon-user"></use>
                                                                                                        </svg></span>User Profile</a>
                                                                                            </li>
                                                                                            <li class="dropdown-items__item"><a class="dropdown-items__link" href="./delete-exe/delete-user.php?id=<?php echo $row['id'] ?>"><span class="dropdown-items__link-icon">
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
                                                        <div class="calendar-widget__item">
                                                            <div class="calendar-widget__status"><span class="circle color-green"></span><span>Upcoming</span>
                                                            </div>
                                                            <div class="calendar-widget__order text-grey">
                                                                Order Delivery 04:30 PM
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
                        <div class="col-12 col-lg-6 col-xl-6 d-flex">
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
                </section>
            </div>
        </main>
    </div>
    <?php require_once("./footer.php") ?>