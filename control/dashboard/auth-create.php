<?php require_once("./header.php") ?>
<?php require_once("./svg.php") ?>

<body>
    <div class="page-wrapper">
        <main class="page-auth">
            <div class="page-auth__content">
                <div class="page-auth__bg">
                    <img class="auth-bg-image-light" src="img/content/auth-bg.jpg" alt="#">
                    <img class="auth-bg-image-dark" src="img/content/auth-bg-dark.jpg" alt="#">
                </div>
                <div class="page-auth__left">
                    <h1 class="page-auth__title">Welcome to <span class="text-theme">Avail Car</span></h1>
                    <p class="page-auth__text">Duis aute irure dolor in reprehenderit in voluptate, qui in ea voluptate velit esse, quam
                        <br>nihil molestiae consequatur, vel illum, obcaecati cupiditate nons.
                    </p>
                </div>
                <div class="page-auth__right">
                    <div class="auth-panel">
                        <form class="auth-panel__wrapper" action="./execution/create-account-exe.php" method="POST">
                            <div class="auth-panel__container">
                                <div class="auth-panel__body">
                                    <div class="auth-panel__body-wrapper">
                                        <div id="error_box">
                                            <?php   if(isset($_GET['er'])==1){ echo getError($_GET['er']); }  ?>
                                        </div>
                                        <h2 class="auth-panel__title">Create account</h2>
                                        <div class="form-group">
                                            <div class="input-group input-group--prepend"><span class="input-group__prepend">
                                                    <svg class="icon-icon-user">
                                                        <use xlink:href="#icon-user"></use>
                                                    </svg></span>
                                                <input class="input" type="text" name="username" value="" placeholder="Username" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="input-group input-group--prepend"><span class="input-group__prepend">
                                                    <svg class="icon-icon-email-2">
                                                        <use xlink:href="#icon-email-2"></use>
                                                    </svg></span>
                                                <input class="input" type="email" value="" placeholder="Email" name="email" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="input-group input-group--prepend"><span class="input-group__prepend">
                                                <svg class="icon-icon-phone">
                                                    <use xlink:href="#icon-phone"></use>
                                                </svg></span>
                                                <input class="input" type="text" placeholder="Mobile Number" name="mobile_no" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="input-group input-group--prepend"><span class="input-group__prepend">
                                                    <svg class="icon-icon-password">
                                                        <use xlink:href="#icon-password"></use>
                                                    </svg></span>
                                                <input class="input" type="password" value="" placeholder="Password" name="password" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="input-group input-group--prepend"><span class="input-group__prepend">
                                                    <svg class="icon-icon-password">
                                                        <use xlink:href="#icon-password"></use>
                                                    </svg></span>
                                                <input class="input" type="password" placeholder="Password (Confirm)" name="re-password" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="checkbox">
                                                <input type="checkbox" checked><span class="checkbox__marker"><span class="checkbox__marker-icon">
                                                        <svg class="icon-icon-checked">
                                                            <use xlink:href="#icon-checked"></use>
                                                        </svg></span></span><span class="ml-2">I accept the <a class="text-blue" href="#">terms & conditions</a></span>
                                            </label>
                                        </div>
                                        <div class="auth-panel__submit">
                                            <button class="button button--primary button--block" type="submit" name="submit" value="submit" ><span class="button__text">Create account</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="auth-panel__footer">
                                    <div class="auth-panel__sign">Already have account? <a class="text-blue" href="index.php">Login</a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <?php require_once("./footer.php"); ?>