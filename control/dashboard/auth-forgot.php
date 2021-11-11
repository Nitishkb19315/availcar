<?php require_once("./header.php")?>
<?php require_once("./svg.php")?>
<body>
    <div class="page-wrapper">
        <main class="page-auth">
            <div class="page-auth__center">
                <div class="page-auth__bg">
                    <img class="auth-bg-image-light" src="img/content/auth-bg.jpg" alt="#">
                    <img class="auth-bg-image-dark" src="img/content/auth-bg-dark.jpg" alt="#">
                </div>
                <div class="auth-md-card auth-md-card--blur card">
                    <div class="card__wrapper">
                        <form method="POST">
                            <div class="auth-md-card__icon auth-md-card__icon--lock">
                                <svg width="90" height="121" viewBox="0 0 90 121" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M50.2503 90.0327V101.679C50.2503 104.583 47.9076 106.945 45.0002 106.945C42.093 106.945 39.75 104.583 39.75 101.679V90.0328C37.541 88.4308 36.0005 85.8794 36.0005 82.8498C36.0005 77.8631 40.0248 73.8177 45 73.8177C49.9751 73.8177 54 77.8629 54 82.8496L50.2503 90.0327ZM50.2503 90.0327C52.4581 88.4311 54.0003 85.8798 54 82.8498L50.2503 90.0327ZM73.4997 52.7229V54.2229H74.9997C82.4482 54.2229 88.5002 60.2903 88.5 67.7855V105.445C88.5 112.942 82.4482 119.008 74.9997 119.008H15.0003C7.55018 119.008 1.5 112.942 1.5 105.445V67.7856C1.5 60.2904 7.55018 54.2229 15.0003 54.2229H16.5003V52.7229V30.1274C16.5003 14.3417 29.2932 1.5 45 1.5C60.7113 1.5 73.4997 14.3415 73.4997 30.1274V52.7229ZM58.9993 54.2229C60.38 54.2229 61.4993 53.1036 61.4993 51.7229L61.4991 30.1274C61.4991 20.9932 54.103 13.5634 45 13.5634C35.8929 13.5634 28.5002 20.9933 28.5002 30.1274V51.7229C28.5002 53.1036 29.6195 54.2229 31.0002 54.2229H58.9993Z"
                                    fill="#FDBF5E" stroke-width="3" />
                                </svg>
                            </div>
                            <div class="auth-md-card__container">
                                <h2 class="auth-md-card__title">Forgot Password?</h2>
                                <div class="auth-md-card__line"></div>
                                <div class="form-group">
                                    <div class="input-group input-group--prepend"><span class="input-group__prepend">
                        <svg class="icon-icon-email-2">
                          <use xlink:href="#icon-email-2"></use>
                        </svg></span>
                                        <input class="input" type="email" placeholder="Email" required>
                                    </div>
                                </div>
                                <div class="auth-md-card__submit">
                                    <button class="button button--primary button--block" type="button" onclick="javascript:location.href = 'index.html'"><span class="button__text">Reset Password</span>
                                    </button>
                                </div>
                                <p class="auth-md-card__link"><a class="text-blue" href="auth-login-v3.html">Go back to login</a>
                                </p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </main>
    </div>
    <?php require_once("./footer.php"); ?>