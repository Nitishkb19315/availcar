<?php require_once("./header.php") ?>
<?php require_once("./svg.php") ?>
<?php confirm_logged_in(); ?>
<body>

    <div class="sidebar-backdrop"></div>
    <div class="page-wrapper">
        <?php require_once("./user-navbar.php") ?>
        <main class="page-content">
            <div class="container">
                <div class="page-header">
                    <h1 class="page-header__title">Products</h1>
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
                                    <li class="breadcrumbs__item disabled"><a class="breadcrumbs__link" href="#"><span>Inventory</span>
                                            <svg class="icon-icon-keyboard-right breadcrumbs__arrow">
                                                <use xlink:href="#icon-keyboard-right"></use>
                                            </svg></a>
                                    </li>
                                    <li class="breadcrumbs__item active"><span class="breadcrumbs__link">Manage Listing</span>
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <div class="page-tools__right">
                        <div class="page-tools__right-row">
                            
                            <div class="page-tools__right-item">
                                    <a class="button-add button-add--blue" href="./user-add-listing.php"><span class="button-add__icon">
                                            <svg class="icon-icon-plus">
                                                <use xlink:href="#icon-plus"></use>
                                            </svg></span><span class="button-add__text"></span>
                                    </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="toolbox">
                    <div class="toolbox__row row gutter-bottom-xs">
                        <div class="toolbox__left col-12 col-lg">
                            <div class="toolbox__left-row row row--xs gutter-bottom-xs">

                                <div class="form-group form-group--inline col col-sm-auto">
                                    <label class="form-label">Show</label>
                                    <div class="input-group input-group--white input-group--append">
                                        <select class="input js-input-select" aria-controls="table" data-placeholder="">
                                            <option value="10">10</option>
                                            <option value="25">25</option>
                                            <option value="3">Apple Watch
                                            </option>
                                            <option value="4">AirPods
                                            </option>
                                            <option value="5">iPhone
                                            </option>
                                            <option value="6">IPad
                                            </option>
                                        </select><span class="input-group__arrow">
                                            <svg class="icon-icon-keyboard-down">
                                                <use xlink:href="#icon-keyboard-down"></use>
                                            </svg></span>
                                    </div>
                                </div>
                                <div class="form-group form-group--inline col col-sm-auto">
                                    <div class="input-group input-group--white input-group--append">
                                        <select class="input js-input-select" data-placeholder="">
                                            <option value="1" selected="selected">All Categories
                                            </option>
                                            <option value="2">MacBook
                                            </option>
                                            <option value="3">Apple Watch
                                            </option>
                                            <option value="4">AirPods
                                            </option>
                                            <option value="5">iPhone
                                            </option>
                                            <option value="6">IPad
                                            </option>
                                        </select><span class="input-group__arrow">
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
                                        <div class="dropdown-menu dropdown-menu--right dropdown-menu--fluid js-dropdown-select">
                                            <a class="dropdown-menu__item active" href="#" tabindex="0" data-value="All status"><span class="marker-item"></span> All status</a>
                                            <a class="dropdown-menu__item" href="#" tabindex="0" data-value="Published"><span class="marker-item color-green"></span>
                                                Published</a><a class="dropdown-menu__item" href="#" tabindex="0" data-value="Deleted"><span class="marker-item color-red"></span>
                                                Deleted</a>
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
                                            <input class="input" type="text" placeholder="Search product">
                                        </div>
                                    </form>
                                </div>
                                <div class="col-auto">
                                    <a class="button-add button-add--blue" href="./user-add-listing.php"><span class="button-add__icon">
                                            <svg class="icon-icon-plus">
                                                <use xlink:href="#icon-plus"></use>
                                            </svg></span><span class="button-add__text"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
                <div class="    ">
                    <div class="table-wrapper__content table-collapse scrollbar-thin scrollbar-visible" data-simplebar>
                        <table class="table table--lines" id="table">
                            <colgroup>
                                <col width="50px">
                                <col width="100px">
                                <col width="350px">
                                <col>
                            </colgroup>
                            <thead class="table__header">
                                <tr class="table__header-row">
                                    <th width="90px">
                                        <div class=" table__checkbox--all">
                                            <label class="checkbox">
                                                <input class="js-checkbox-all" type="checkbox" data-checkbox-all="product"><span class="checkbox__marker"><span class="checkbox__marker-icon">
                                                        <svg class="icon-icon-checked">
                                                            <use xlink:href="#icon-checked"></use>
                                                        </svg></span></span>
                                            </label>
                                        </div>
                                    </th>
                                    <th class="table__th-sort"><span class="align-middle">Photo</span><span class="sort sort--down"></span>
                                    </th>
                                    <th class="table__th-sort"><span class="align-middle">Description</span><span class="sort sort--down"></span>
                                    </th>
                                    <!-- <th class="table__th-sort"><span class="align-middle">Status</span><span class="sort sort--down"></span>
                                    </th> -->
                                    <th class="table__actions"></th>
                                </tr>
                            </thead>
                            <tbody class="gallery">
                                <?php
                                $result = get_user_listing_list($_SESSION['user_id']);
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
                                                <img src="./uploads/listing_image/<?php echo $row['main_image']; ?>" alt="">
                                            </td>
                                            <td class="table__td">
                                                <p>
                                                    <span class="text-grey"><?php echo $row['make'] ?> <?php echo $row['model'] ?></span><br />
                                                    by: <?php echo $row['username'] ?><br />
                                                    Market Price: (Rs. <?php echo $row['market_price'] ?>) <?php echo $row['sale_price'] ?> <br>
                                                    Condition: Used

                                                </p>
                                            <!-- </td>
                                            <td class="table__td"><span>$2500</span>
                                            </td> -->
                                            <!-- <td class="d-none d-lg-table-cell table__td"><span class="text-grey">12.07.2018</span>
                                            </td> -->
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
                                                                <li class="dropdown-items__item"><a href="edit-listing.php?id=<?php echo $row['id']?>"    class="dropdown-items__link"><span class="dropdown-items__link-icon">
                                                                            <svg class="icon-icon-view">
                                                                                <use xlink:href="#icon-view"></use>
                                                                            </svg></span>Edit</a>
                                                                </li>
                                                                <li class="dropdown-items__item"><a class="dropdown-items__link" href="listing-images.php?id=<?php echo $row['id']?>"><span class="dropdown-items__link-icon">
                                                                            <svg class="icon-icon-duplicate">
                                                                                <use xlink:href="#icon-duplicate"></use>
                                                                            </svg></span>image</a>
                                                                </li>
                                                                <li class="dropdown-items__item"><a class="dropdown-items__link listing_status" data-status="<?php echo $row['status']?>" data-id="<?php echo $row['id']?>"><span class="dropdown-items__link-icon">
                                                                            <i class="fas <?php if($row['status']==1){echo "fa-check-circle";}else{ echo"fa-times-circle";} ?>"></i>
                                                                        </span>Status</a>
                                                                </li>
                                                                <li class="dropdown-items__item"><a class="dropdown-items__link listing_feature_state" data-feature="<?php echo $row['feature_state']?>" data-id="<?php echo $row['id']?>"><span class="dropdown-items__link-icon">
                                                                            <i class="fas <?php if($row['feature_state']==1){echo "fa-check-circle";}else{ echo"fa-times-circle";} ?>"></i>
                                                                        </span>Feature</a>
                                                                </li>
                                                                <li class="dropdown-items__item"><a class="dropdown-items__link listing_availability" data-availability="<?php echo $row['availabilty']?>" data-id="<?php echo $row['id']?>"><span class="dropdown-items__link-icon">
                                                                            <i class="fas <?php if($row['availabilty']==1){echo "fa-check-circle";}else{ echo"fa-times-circle";} ?>"></i>
                                                                        </span>Sold</a>
                                                                </li>
                                                                <li class="dropdown-items__item">
                                                                    <a href="./delete-exe/delete-listing.php?id=<?php echo $row['id']?>" class="dropdown-items__link">
                                                                        <span class="dropdown-items__link-icon">
                                                                            <svg class="icon-icon-trash">
                                                                                <use xlink:href="#icon-trash"></use>
                                                                            </svg>
                                                                        </span>Delete
                                                                    </a>
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
        </main>
    </div>
    <div class="modal modal-compact modal-success scrollbar-thin <?php if($_GET["er"]){ echo "is-active is-animate";}?>" id="addProductSuccess" data-simplebar>
        <div class="modal__overlay" data-dismiss="modal"></div>
        <div class="modal__wrap">
            <div class="modal__window">
                <div class="modal__content">
                    <div class="modal__body">
                        <div class="modal__container">
                            <img class="modal-success__icon" src="img/content/checked-success.svg" alt="#">
                            <h4 class="modal-success__title"><?php echo getError($_GET['er']);?></h4>
                        </div>
                    </div>
                    <div class="modal-compact__buttons">
                        <div class="modal-compact__button-item">
                            <a class="modal-compact__button button" href="./add-listing.php" ><span class="button__text">Add new product</span>
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