<?php require_once("./header.php") ?>
<?php require_once("./svg.php") ?>
<?php confirm_logged_in(); ?>
<?php if(!confirm_admin()){ redirect("404.php");} ?>

<body>
    <?php require_once("./navbar.php") ?>
    <div class="sidebar-backdrop"></div>
    <div class="page-wrapper">
        <main class="page-content">
            <div class="container">
                <div class="page-header">
                    <h1 class="page-header__title">Users <span class="text-grey">(<?php echo (users_count()); ?>)</span></h1>
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
                                    <li class="breadcrumbs__item active"><span class="breadcrumbs__link">Users</span>
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
                                            <a class="dropdown-menu__item" href="#" tabindex="0" data-value="25">25</a><a class="dropdown-menu__item" href="#" tabindex="0" data-value="50">50</a>
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
                                <?php
                                $result = get_user_list();
                                if (mysqli_num_rows($result) > 0) {
                                    $sr = 1;
                                    while ($row = mysqli_fetch_assoc($result)) {
                                ?>
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
                                                        <img class="media-item__thumb" src="<?php if (empty(trim($row['profile_image']))) {
                                                                                                echo 'img/content/humans/item-1.jpg';
                                                                                            } else {
                                                                                                echo './uploads/profiles/' . $row['profile_image'];
                                                                                            } ?>" alt="#">
                                                    </a>
                                                    <div class="media-item__right">
                                                        <h5 class="media-item__title"><a href="customer-account.html"><?php echo $row['username']; ?> </a></h5><a class="text-sm text-grey" href="mailto:#"><?php echo $row['email'] ?></a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="table__td text-light-theme"><?php echo $row['city']; ?>, <?php echo $row['country']; ?></td>
                                            <td class="table__td text-dark-theme">1000</td>
                                            <td class="table__td text-light-theme"><?php echo $row['date_of_signup']; ?></td>
                                            <td class="table__td d-none d-sm-table-cell">
                                                <div class="table__status"><span class="table__status-icon color-green"></span> <?php if ($row['account_status'] == 1) {
                                                                                                                                    echo 'Activate';
                                                                                                                                } else {
                                                                                                                                    echo 'Deactivate';
                                                                                                                                } ?></div>
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
                                                                <li class="dropdown-items__item"><a class="dropdown-items__link" href="./delete-exe/delete-user.php?id=<?php echo $row['id']?>"><span class="dropdown-items__link-icon">
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
                                <?php
                                    }
                                }
                                ?>
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
    <div class="modal modal-compact modal-success scrollbar-thin <?php if ($_GET["er"]) {
                                                                        echo "is-active is-animate";
                                                                    } ?>" id="addProductSuccess" data-simplebar>
        <div class="modal__overlay" data-dismiss="modal"></div>
        <div class="modal__wrap">
            <div class="modal__window">
                <div class="modal__content">
                    <div class="modal__body">
                        <div class="modal__container">
                            <img class="modal-success__icon" src="img/content/checked-success.svg" alt="#">
                            <h4 class="modal-success__title"><?php echo getError($_GET['er']); ?></h4>
                        </div>
                    </div>
                    <div class="modal-compact__buttons">
                        <div class="modal-compact__button-item">
                            <a class="modal-compact__button button" href="./add-listing.php"><span class="button__text">View Users</span>
                            </a>
                        </div>
                        <div class="modal-compact__button-item">
                            <button class="modal-compact__button button" data-dismiss="modal"><span class="button__text">Close</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php require_once("./footer.php") ?>