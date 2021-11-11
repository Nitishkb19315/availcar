<?php require_once("./header.php") ?>
<?php require_once("./svg.php") ?>
<?php confirm_logged_in(); ?>
<?php $data= get_listing_item($_GET['id']);?>

<body>
    <div class="sidebar-backdrop"></div>
    <div class="page-wrapper">
        
        <?php if(confirm_admin()){ redirect('dashboard.php');}else{ require_once('./user-navbar.php');} ?>
        <main class="page-content">
            <div class="container">
                <div class="page-header">
                    <h1 class="page-header__title">Add Product</h1>
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
                                    <li class="breadcrumbs__item"><a class="breadcrumbs__link" href="products.html"><span>Products</span>
                                            <svg class="icon-icon-keyboard-right breadcrumbs__arrow">
                                                <use xlink:href="#icon-keyboard-right"></use>
                                            </svg></a>
                                    </li>
                                    <li class="breadcrumbs__item active"><span class="breadcrumbs__link">Add Product</span>
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card add-product card--content-center">
                    <div class="card__wrapper">
                        <div class="card__container">
                            <form class="add-product__form" action="./execution/edit-listing-exe.php" enctype="multipart/form-data" method="post">
                                <div class="add-product__row">

                                    <div class="add-product">
                                        <div class="row row--md">
                                            <div class="col-12 col-md-3 col-sm-4 form-group form-group--lg">
                                                <label class="form-label">Username</label>
                                                <div class="input-group">
                                                    <input type="hidden" name="id" value="<?php echo $data['id'] ?>">
                                                    <input class="input" type="text" placeholder="Username" name="username" value="<?php echo $data['username'];?>" required>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-3 col-sm-4 form-group form-group--lg">
                                                <label class="form-label">Model Year</label>
                                                <div class="input-group">
                                                    <input class="input" type="text" name="modelYear" placeholder="Model Year" value="<?php echo $data['model_year'];?>" required>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-3 col-sm-4 form-group form-group--lg">
                                                <label class="form-label">Make</label>
                                                <div class="input-group input-group--append">
                                                    <select class="input js-input-select input--fluid" data-placeholder="Select Model" name="make" id="car_make" required>

                                                        <option value="">Select Make</option>
                                                        <?php
                                                        $result = get_car_make();
                                                        if (mysqli_num_rows($result) > 0) {
                                                            while ($row = mysqli_fetch_assoc($result)) {

                                                        ?>
                                                                <option value="<?php echo $row['id']; ?>" <?php if($row['id']==$data['make_id']){ echo "selected";}else{ echo " ";} ?>><?php echo strtoupper($row['make']); ?></option>
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
                                            <div class="col-12 col-md-3 col-sm-4 form-group form-group--lg">
                                                <label class="form-label">Model</label>
                                                <div class="input-group input-group--append">
                                                    <select class="input js-input-select input--fluid" data-placeholder="Select Model" name="model" id="car_model" required>
                                                        <?php 
                                                            $result = get_car_models($data['make_id']);
                                                            if(mysqli_num_rows($result)>0){
                                                                while($row = mysqli_fetch_assoc($result)){
                                                        ?>
                                                        <option value="<?php echo $row['model_id']; ?>" <?php if($row['model_id']==$data['model_id']){ echo "selected";}else{ echo " ";} ?>><?php echo strtoupper($row['model']); ?></option>
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
                                            <div class="col-12 col-md-3 col-sm-4 form-group form-group--lg">
                                                <label class="form-label">Variant</label>
                                                <div class="input-group input-group--append">
                                                    <select class="input js-input-select input--fluid" data-placeholder="Select Model" name="variant" id="car_variant" required>
                                                        <?php 
                                                            $result = get_car_variants($data['make_id'],$data['model_id']);
                                                            if(mysqli_num_rows($result)>0){
                                                                while($row = mysqli_fetch_assoc($result)){

                                                        ?>
                                                        <option value="<?php echo $row['variant_id']; ?>" <?php if($row['variant_id']==$data['variant_id']){ echo "selected";}else{ echo " ";} ?>><?php echo strtoupper($row['variant']); ?></option>
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
                                            <div class="col-12 col-md-3 col-sm-4 form-group form-group--lg">
                                                <label class="form-label">Interior Color</label>
                                                <div class="input-group input-group--append">
                                                    <select class="input js-input-select input--fluid" data-placeholder="Select Color" id="interiorColor" name="interiorColor" required>
                                                        <option value="" disabled selected>Select Interior Color</option>
                                                        <option value="White">White</option>
                                                        <option value="Black">Black</option>
                                                        <option value="Silver">Silver</option>
                                                        <option value="Gray">Gray</option>
                                                        <option value="Red">Red</option>
                                                        <option value="Blue">Blue</option>
                                                        <option value="Beige">Beige</option>
                                                        <option value="Yellow">Yellow</option>
                                                        <option value="Green">Green</option>
                                                        <option value="Brown">Brown</option>
                                                        <option value="Burgundy">Burgundy</option>
                                                        <option value="Charcoal">Charcoal</option>
                                                        <option value="Gold">Gold</option>
                                                        <option value="Pink">Pink</option>
                                                        <option value="Purple">Purple</option>
                                                        <option value="Tan">Tan</option>
                                                        <option value="Turquoise">Turquoise</option>
                                                    </select>
                                                    <span class="input-group__arrow">
                                                        <svg class="icon-icon-keyboard-down">
                                                            <use xlink:href="#icon-keyboard-down"></use>
                                                        </svg>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-3 col-sm-4 form-group form-group--lg">
                                                <label class="form-label">Exterior Color</label>
                                                <div class="input-group input-group--append">
                                                    <select class="input js-input-select input--fluid" data-placeholder="Select Color" id="exteriorColor" name="exteriorColor" required>
                                                        <option value="" disabled selected>Select Interior Color</option>
                                                        <option value="White">White</option>
                                                        <option value="Black">Black</option>
                                                        <option value="Silver">Silver</option>
                                                        <option value="Gray">Gray</option>
                                                        <option value="Red">Red</option>
                                                        <option value="Blue">Blue</option>
                                                        <option value="Beige">Beige</option>
                                                        <option value="Yellow">Yellow</option>
                                                        <option value="Green">Green</option>
                                                        <option value="Brown">Brown</option>
                                                        <option value="Burgundy">Burgundy</option>
                                                        <option value="Charcoal">Charcoal</option>
                                                        <option value="Gold">Gold</option>
                                                        <option value="Pink">Pink</option>
                                                        <option value="Purple">Purple</option>
                                                        <option value="Tan">Tan</option>
                                                        <option value="Turquoise">Turquoise</option>
                                                    </select>
                                                    <span class="input-group__arrow">
                                                        <svg class="icon-icon-keyboard-down">
                                                            <use xlink:href="#icon-keyboard-down"></use>
                                                        </svg>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-3 col-sm-4 form-group form-group--lg">
                                                <label class="form-label">Transmission</label>
                                                <div class="input-group input-group--append">
                                                    <select class="input js-input-select input--fluid" data-placeholder="Select transmission" id="transmission" name="transmission" required>
                                                        <option value="">Select Transmission Type</option>
                                                        <option value="Automatic">Automatic</option>
                                                        <option value="Manual">Manual</option>
                                                        <option value="Tiptronic">Tiptronic</option>
                                                    </select>
                                                    <span class="input-group__arrow">
                                                        <svg class="icon-icon-keyboard-down">
                                                            <use xlink:href="#icon-keyboard-down"></use>
                                                        </svg>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-3 col-sm-4 form-group form-group--lg">
                                                <label class="form-label">Fuel Type</label>
                                                <div class="input-group input-group--append">
                                                    <select class="input js-input-select input--fluid" data-placeholder="Select Fuel" id="fuel" name="fuel" required>
                                                        <option value="">Select Fuel Type</option>
                                                        <option value="CNG">CNG</option>
                                                        <option value="Diesel">Diesel</option>
                                                        <option value="Electric">Electric</option>
                                                        <option value="Petrol">Petrol</option>
                                                    </select>
                                                    <span class="input-group__arrow">
                                                        <svg class="icon-icon-keyboard-down">
                                                            <use xlink:href="#icon-keyboard-down"></use>
                                                        </svg>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-3 col-sm-4 form-group form-group--lg">
                                                <label class="form-label">Sale Price</label>
                                                <div class="input-group input-group--prepend">
                                                    <div class="input-group__prepend"><span class="input-group__symbol">$</span>
                                                    </div>
                                                    <input name="salePrice" class="input" type="number" min="0" max="999999999" placeholder="Sale Price" value="" id="salePrice" required>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-3 col-sm-4 form-group form-group--lg">
                                                <label class="form-label">Market Price</label>
                                                <div class="input-group input-group--prepend">
                                                    <div class="input-group__prepend"><span class="input-group__symbol">$</span>
                                                    </div>
                                                    <input name="marketPrice" class="input" type="number" min="0" max="999999999" placeholder="Market Price" value="" id="marketPrice" required>
                                                </div>
                                            </div>

                                            <div class="col-12 form-group form-group--lg">
                                                <label class="form-label">Description</label>
                                                <div class="input-editor">
                                                    <div class="js-description-editor" name="description" id="editor" contencteditable="true">Fundamentally redesigned and reengineered. The largest Apple Watch display yet. Built-in electrical heart sensor. New Digital Crown with haptic feedback. Low and high heart rate notifications. Fall detection
                                                        and Emergency SOS.</div>
                                                </div>
                                                <textarea name="description" id="description" class="d-none"></textarea>
                                            </div>
                                            <!-- <div class="col-12  form-group form-group--lg">
                                                <label class="form-label">Feature</label>
                                                <div class=" table__checkbox--all">
                                                    <label class="checkbox feature-label">
                                                        <input class="js-checkbox-all" type="checkbox" data-checkbox-all="feature"><span class="checkbox__marker"><span class="checkbox__marker-icon">
                                                                <svg class="icon-icon-checked">
                                                                    <use xlink:href="#icon-checked"></use>
                                                                </svg></span></span>
                                                    </label>
                                                    <label class="form-label ">Select All</label>
                                                </div>
                                            </div>
                                            <?php
                                            $result = get_car_features();
                                            if (mysqli_num_rows($result) > 0) {
                                                while ($row = mysqli_fetch_assoc($result)) {
                                            ?>
                                                    <div class="col-6 col-md-3 col-sm-4 form-group form-group--lg">
                                                        <div class=" table__checkbox--all">
                                                            <label class="checkbox feature-label">
                                                                <input type="checkbox" data-checkbox="feature" name="feature[]" value="<?php echo $row['id'];?>"><span class="checkbox__marker"><span class="checkbox__marker-icon">
                                                                        <svg class="icon-icon-checked">
                                                                            <use xlink:href="#icon-checked"></use>
                                                                        </svg></span></span>
                                                            </label>
                                                            <label class="form-label "><?php echo $row['feature'];?></label>
                                                        </div>
                                                    </div>
                                            <?php
                                                }
                                            }
                                            ?> -->
                                        </div>
                                        <div class="add-product__submit">
                                            <div class="modal__footer-button">

                                                <input type="submit" value="Sumit" name="submit" class="button button--primary button--block">
                                            </div>
                                            <div class="modal__footer-button"><a class="button button--secondary button--block" href="products.php"><span class="button__text">Cancel</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
    <div class="modal modal-compact modal-success <?php if($_GET["er"]){ echo "is-active is-animate";}?>" id="addProductSuccess">
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
                            <button class="modal-compact__button button" data-dismiss="modal" data-modal="#addProduct"><span class="button__text">Add new product</span>
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
    
<script>
    $(document).ready(function() {
        $('#interiorColor').val(`<?php echo $data['interior_color']; ?>`);
        $('#exteriorColor').val(`<?php echo $data['exterior_color']; ?>`);
        $('#transmission').val(`<?php echo $data['transmission']; ?>`);
        $('#fuel').val(`<?php echo $data['fuel']; ?>`);
        $('#salePrice').val(`<?php echo $data['sale_price']; ?>`);
        $('#marketPrice').val(`<?php echo $data['market_price']; ?>`);
        $('#description').val(`<?php echo $data['description']; ?>`);
    })
</script>