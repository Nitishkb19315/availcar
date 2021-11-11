<?php require_once("./header.php") ?>
<?php confirm_logged_in(); ?>
<?php require_once("./svg.php") ?>
<?php if(!confirm_admin()){ redirect("404.php");} ?>


<body class="make-page">
    <div class="sidebar-backdrop"></div>
    <div class="page-wrapper">
        <?php require_once("./navbar.php") ?>
        <main class="page-content">
            <div class="container">
                <div class="page-header">
                    <h1 class="page-header__title">Add Model</h1>
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
                                    <li class="breadcrumbs__item"><a class="breadcrumbs__link" href="products.html"><span>Inventory</span>
                                            <svg class="icon-icon-keyboard-right breadcrumbs__arrow">
                                                <use xlink:href="#icon-keyboard-right"></use>
                                            </svg></a>
                                    </li>
                                    <li class="breadcrumbs__item active"><span class="breadcrumbs__link">Add Model</span>
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card add-product card--content-center">
                    <div class="card__wrapper">
                        <div class="card__container">
                            <form class="add-product__form" method="POST" action="./execution/model-exe.php">
                                <div class="add-product__row">
                                    <div class="add-product">
                                        <div class="row row--md">
                                            <div class="col-12 col-sm-6 form-group form-group--lg">
                                                <label class="form-label">Make</label>
                                                <div class="input-group input-group--append">
                                                    <select class="input js-input-select input--fluid" data-placeholder="Select Model" name="make" id="car_make">
                                                        
                                                        
                                                        <?php 
                                                            $result = get_car_make();
                                                            if(mysqli_num_rows($result)>0){
                                                                while($row = mysqli_fetch_assoc($result)){

                                                        ?>
                                                        <option value="<?php echo $row['id']; ?>"><?php echo strtoupper($row['make']); ?></option>
                                                        <?php 
                                                                }
                                                            }
                                                        ?>
                                                    </select>
                                                    <span class="input-group__arrow">
                                                        <svg class="icon-icon-keyboard-down">
                                                            <use xlink:href="#icon-keyboard-down"></use>
                                                        </svg>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-6 form-group form-group--lg">
                                                <label class="form-label">Add Make</label>
                                                <div class="input-group">
                                                    <input class="input" type="text" name="model" id="model" placeholder="model" value="" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="add-product__submit">
                                            <div class="modal__footer-button">
                                                <input type="submit" name="submit" class="button button--primary button--block"  value="Add Model">
                                            </div>
                                            <div class="modal__footer-button"><a class="button button--secondary button--block" href=""><span class="button__text">Cancel</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="container table-container">
                <table class="table table--lines" id="">
                    <colgroup>
                        <col width="90px">
                        <col width="100px">
                        <col width="16%">
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
                            <th class="d-none d-lg-table-cell"><span>Sr. NO.</span>
                            </th>
                            <th class="d-none d-lg-table-cell"><span>Id</span>
                            </th>
                            <th class="table__th-sort  d-sm-table-cell"><span class="align-middle">Make</span><span class="sort sort--down"></span>
                            </th>
                            <th class="table__th-sort  d-sm-table-cell"><span class="align-middle">Model</span><span class="sort sort--down"></span>
                            </th>
                            <th class="table__actions"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $result = get_model_list();
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
                                    <td class="d-none d-lg-table-cell table__td"><span class="text-grey"><?php echo $sr++; ?></span>
                                    </td>
                                    <td class="table__td"><?php echo $row['id']; ?></td>
                                    <td class="make_items d-sm-table-cell table__td text-grey"><?php echo $row['make']; ?>
                                    </td>
                                    <td class="make_items d-sm-table-cell table__td text-grey"><?php echo $row['model']; ?>
                                    </td>
                                    <td class="table__td table__actions">
                                        <div class="items-more">
                                            <a class="items-more__button" href="./delete-exe/delete-model.php?id=<?php echo $row['id']?>"">
                                                <svg class="icon-icon-trash">
                                                    <use xlink:href="#icon-trash"></use>
                                                </svg>
                                            </a>
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
    </main>
    </div>
    <div class="modal modal-compact modal-success <?php if($_GET["er"]){ echo "is-active is-animate";}?> " id="addProductSuccess">
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
                            <button class="modal-compact__button button" data-dismiss="modal"><span class="button__text">Ok</span>
                            </button>
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