<?php require_once("./header.php") ?>
<?php require_once("./svg.php") ?>
<?php confirm_logged_in(); ?>

<body>

    <div class="sidebar-backdrop"></div>
    <div class="page-wrapper">
        <?php if(confirm_admin()){ redirect('dashboard.php');}else{ require_once('./user-navbar.php');} ?>
        <main class="page-content">
            <div class="container">
                <div class="page-header">
                    <h1 class="page-header__title">Listing Images</h1>
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
                                    <?php if ($_SESSION['user_type'] == 'admin') { ?>
                                        <li class="breadcrumbs__item disabled"><a class="breadcrumbs__link" href="#"><span>Inventory</span>
                                                <svg class="icon-icon-keyboard-right breadcrumbs__arrow">
                                                    <use xlink:href="#icon-keyboard-right"></use>
                                                </svg></a>
                                        </li>
                                        <li class="breadcrumbs__item disabled"><a class="breadcrumbs__link" href="#"><span>Manage Listing</span>
                                                <svg class="icon-icon-keyboard-right breadcrumbs__arrow">
                                                    <use xlink:href="#icon-keyboard-right"></use>
                                                </svg></a>
                                        </li>
                                    <?php } ?>
                                    <li class="breadcrumbs__item active"><span class="breadcrumbs__link">Images </span>
                                    </li>

                                </ol>
                            </div>
                        </div>
                    </div>
                    <div class="page-tools__right">
                        <div class="page-tools__right-row">
                            <div class="page-tools__right-item">
                                <button class="button-add button-add--blue" data-modal="#addImage"><span class="button-add__icon">
                                        <svg class="icon-icon-plus">
                                            <use xlink:href="#icon-plus"></use>
                                        </svg></span><span class="button-add__text"></span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="">
                    <div class="table-wrapper__content table-collapse scrollbar-thin scrollbar-visible" data-simplebar>
                        <table class="table table--lines" id="">
                            <colgroup>
                                <col width="50px">
                                <col width="150px">
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
                            <tbody>
                                <?php
                                $result = get_listing_images($_GET['id']);

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
                                                <a href="./uploads/listing_image/<?php echo $row['image_name']; ?>" data-lightbox="example-set">
                                                    <img src="./uploads/listing_image/<?php echo $row['image_name']; ?>" alt="">
                                                </a>
                                            </td>
                                            <td class="table__td"><span></span>
                                            </td>
                                            <!-- <td class="d-none d-lg-table-cell table__td"><span class="text-grey">12.07.2018</span>
                                            </td> -->
                                            <td class="table__td table__actions">
                                                <div class="items-more">
                                                    <a class="items-more__button" href="./delete-exe/delete-listing-image.php?id=<?php echo $row['id'] ?>">
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
                            <a class="modal-compact__button button"  data-dismiss="modal" id="popUpBox"><span class="button__text">Add new product</span>
                            </a>
                        </div>
                        <div class="modal-compact__button-item">
                            <button class="modal-compact__button button" data-dismiss="modal" ><span class="button__text">Close</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal modal--panel modal--right" id="addImage">
        <div class="modal__overlay" data-dismiss="modal"></div>
        <div class="modal__wrap">
            <div class="modal__window scrollbar-thin" data-simplebar>
                <div class="modal__content">
                    <div class="modal__header">
                        <div class="modal__container">
                            <h2 class="modal__title">Add Product</h2>
                        </div>
                    </div>
                    <form method="POST" action="./execution/add-listing-images-exe.php" enctype="multipart/form-data">
                        <div class="modal__body">
                            <div class="modal__container">
                                <div class="row row--md">
                                    <input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">
                                    <div class="col-12 form-group form-group--lg">
                                        <label class="form-label">Product Images</label>
                                        <div class="image-upload">
                                            <div class="image-upload__drop">
                                                <input class="image-upload__input" name="images[]" type="file" multiple="multiple" accept="image/png, image/jpeg" />
                                                <div class="image-upload__drop-text">
                                                    <svg class="icon-icon-upload">
                                                        <use xlink:href="#icon-upload"></use>
                                                    </svg> <span>Drag and Drop or </span> <span class="image-upload__drop-action text-blue">Browse</span>
                                                    <span>to upload</span>
                                                </div>
                                            </div>
                                            <ul class="image-upload__list">
                                                <li class="image-upload__item">
                                                    <div class="image-upload__progress">
                                                        <div class="image-upload__progress-icon"></div>
                                                    </div>
                                                    <div class="image-upload__action-remove">
                                                        <svg class="icon-icon-cross">
                                                            <use xlink:href="#icon-cross"></use>
                                                        </svg>
                                                    </div>
                                                </li>
                                                <li class="image-upload__item">
                                                    <div class="image-upload__progress">
                                                        <div class="image-upload__progress-icon"></div>
                                                    </div>
                                                    <div class="image-upload__action-remove">
                                                        <svg class="icon-icon-cross">
                                                            <use xlink:href="#icon-cross"></use>
                                                        </svg>
                                                    </div>
                                                </li>
                                                <li class="image-upload__item">
                                                    <div class="image-upload__progress">
                                                        <div class="image-upload__progress-icon"></div>
                                                    </div>
                                                    <div class="image-upload__action-remove">
                                                        <svg class="icon-icon-cross">
                                                            <use xlink:href="#icon-cross"></use>
                                                        </svg>
                                                    </div>
                                                </li>
                                                <li class="image-upload__item">
                                                    <div class="image-upload__progress">
                                                        <div class="image-upload__progress-icon"></div>
                                                    </div>
                                                    <div class="image-upload__action-remove">
                                                        <svg class="icon-icon-cross">
                                                            <use xlink:href="#icon-cross"></use>
                                                        </svg>
                                                    </div>
                                                </li>
                                                <li class="image-upload__item">
                                                    <div class="image-upload__progress">
                                                        <div class="image-upload__progress-icon"></div>
                                                    </div>
                                                    <div class="image-upload__action-remove">
                                                        <svg class="icon-icon-cross">
                                                            <use xlink:href="#icon-cross"></use>
                                                        </svg>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="modal__footer">
                            <div class="modal__container">
                                <div class="modal__footer-buttons">
                                    <div class="modal__footer-button">
                                        <button class="button button--primary button--block" type="submit" name="submit" value="submit"><span class="button__text">Add Image</span>
                                        </button>
                                    </div>
                                    <div class="modal__footer-button">
                                        <button class="button button--secondary button--block" type="reset"><span class="button__text">Reset</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php require_once("./footer.php") ?>
    <script>
        $(document).ready(function() {
            $('#popUpBox').on("click", function() {
                console.log("working");
                window.history.pushState("id=4", '', "listing-images.php?id=<?php echo $_GET['id']?>");
            })
        })
    </script>