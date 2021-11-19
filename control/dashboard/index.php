<?php require_once("./header.php") ?>
<?php require_once("./svg.php"); ?>
<?php is_logged_in(); ?>
<body>
    <div class="page-wrapper">
        <main class="page-auth">
            <div class="page-auth__content">
                <div class="page-auth__bg">
                    <img class="auth-bg-image-light" src="img/content/auth-bg.jpg" alt="#">
                    <img class="auth-bg-image-dark" src="img/content/auth-bg-dark.jpg" alt="#">
                </div>
                <div class="page-auth__left">
                    <h1 class="page-auth__title">Welcome to <span class="text-theme">AvailCar</span></h1>
                    <p class="page-auth__text">Duis aute irure dolor in reprehenderit in voluptate, qui in ea voluptate velit esse, quam
                        <br>nihil molestiae consequatur, vel illum, obcaecati cupiditate nons.
                    </p>
                </div>
                <div class="page-auth__right">
                    <div class="auth-panel">
                        <form class="auth-panel__wrapper" method="POST" action="./execution/user-login-exe.php">
                            <div class="auth-panel__container">
                                <div class="auth-panel__body">
                                    <div class="auth-panel__body-wrapper">
                                        <div class="auth-panel__logotype">
                                            <div class="auth-logo">
                                                <img class="auth-logo__icon" src="img/content/logotype.svg" width="44" alt="#" />
                                                <div class="auth-logo__text">AvailCar</div>
                                            </div>
                                            <p class="auth-panel__text">Please login to your account.</p>
                                        </div>
                                        <div id="error_box">
                                            <?php   if(isset($_GET['er'])==1){ echo getError($_GET['er']); }  ?>
                                        </div>
                                        <div class="form-group">
                                            <div class="input-group input-group--prepend"><span class="input-group__prepend">
                                                    <svg class="icon-icon-user">
                                                        <use xlink:href="#icon-user"></use>
                                                    </svg></span>
                                                <input class="input" type="text" name="uname"  value="" required>
                                            </div>
                                        </div>
                                        <div class="form-group mb-4">
                                            <div class="input-group input-group--prepend"><span class="input-group__prepend">
                                                    <svg class="icon-icon-password">
                                                        <use xlink:href="#icon-password"></use>
                                                    </svg></span>
                                                <input class="input" type="password" value="" name="hpassword" required>
                                            </div>
                                        </div>
                                        <div class="row align-items-center">
                                            <!-- <div class="col">
                                                <div class="form-group">
                                                    <div class="input-group input-group--prepend">
                                                        <label class="checkbox">
                                                            <input type="checkbox" checked><span class="checkbox__marker"><span class="checkbox__marker-icon">
                                                                    <svg class="icon-icon-checked">
                                                                        <use xlink:href="#icon-checked"></use>
                                                                    </svg></span></span><span class="ml-2">Remember Me</span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div> -->
                                            <div class="col-auto">
                                                <div class="form-group"><a class="text-blue" href="auth-forgot.php">Forgot Password?</a>
                                                </div>
                                                <div class="form-group"><a class="text-blue" href="admin-login.php">Admin Login</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="auth-panel__submit">
                                            <input type="submit" name="submit" value="Log in" class="button button--primary button--block">
                                        </div>
                                        <div class="auth-panel__divider">OR</div>
                                        <div class="auth-panel__social">
                                            <a class="auth-panel__social-link" href="#">
                                                <img src="img/content/s-facebook.svg" alt="#">
                                            </a>
                                            <a class="auth-panel__social-link" href="#">
                                                <img src="img/content/s-twitter.svg" alt="#">
                                            </a>
                                            <a class="auth-panel__social-link" href="#">
                                                <img src="img/content/s-google-plus.svg" alt="#">
                                            </a>
                                            <a class="auth-panel__social-link" href="#">
                                                <img src="img/content/s-pinterest.svg" alt="#">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="auth-panel__footer">
                                    <div class="auth-panel__sign">Don't have an account? <a class="text-blue" href="auth-create.php">Sign Up</a>
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