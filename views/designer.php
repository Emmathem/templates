<?php
/**
 * @Author
 * Falua Temitope Oyewole
 * faluatemitopeo@gmail.com
 * Fullstack Web Developer
 * Date: Aug 25, 2018 : 3:32 PM
 */
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/home.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <title>Designer | Welcome Home</title>
</head>
<body>
<section class="designerHome">
    <div class="rightContainer">
        <div class="cover-layer"></div>
        <div class="inner-content">
            <h3>Connect with buyers </h3>
            <h4>For your design</h4>
        </div>
    </div>
    <div class="registerCorner">
        <div class="form-container">
            <div class="img-holder">
                <img src="assets/images/logo.png" alt="W">
            </div>

            <div class="login-form">
                <form action="" id="loginForm">
                    <div class="form-group">
                        <label for="email" class="sr-only">Enter your email address</label>
                        <div class="input-group">
                            <input type="email" id="email" class="form-control" placeholder="Enter your email address">
                            <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="password" class="sr-only">Enter your password</label>
                        <div class="input-group">
                            <input type="password" id="password" class="form-control" placeholder="Enter your password">
                            <span class="input-group-addon"><i toggle="#password" class="fa fa-eye pwd-show"></i></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="button" id="login" value="Authenticate Me" class="btn btn-login-wawooh">
                        <img src="assets/images/AjaxLoader.gif" class="l-image" alt="">

                        <a href="#" class="forgetPwd pull-right">Forgot Password?</a>
                    </div>

                    <div class="regNotify">
                        <h3>Don't have an account? <a href="#" id="regFlip">Register Now</a></h3>
                    </div>
                </form>

                <form action="" id="forgotPassword" style="display: none;">
                    <div class="form-group">
                        <label for="emailReset" class="label label-info">
                            Enter the email address used at the point of registration to reset your password
                        </label>
                        <div class="input-group">
                            <input type="email" class="form-control" id="emailReset"
                                   placeholder="Enter your email address">
                            <span class="input-group-addon"><i class="fa fa-envelope-o"></i></span>
                        </div>
                    </div>
                    <div class="form-group text-center">
                        <input type="button" value="Reset my account" class="btn btn-login-wawooh">
                    </div>

                    <div class="regNotify" id="pwLogin">
                        <h3>Already have an already? <a href="" id="loginLink">Login Now</a></h3>
                    </div>
                </form>

                <form action="" id="regForm" style="display: none;">
                    <div class="form-group">
                        <label for="email" class="sr-only">Enter your Store Name</label>
                        <div class="input-group">
                            <input type="text" id="store" class="form-control"
                                   placeholder="We will love to address you by your Store Name">
                            <span class="input-group-addon"><i class="fa fa-home"></i></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="phoneNo" class="sr-only">Enter your phone number</label>
                        <div class="input-group">
                            <input type="tel" id="phoneNo" class="form-control"
                                   placeholder="Enter your phone number for activation">
                            <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email" class="sr-only">Enter your email address</label>
                        <div class="input-group">
                            <input type="email" id="email" class="form-control"
                                   placeholder="Let us have your email for updates">
                            <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="password" class="sr-only">Enter your password</label>
                        <div class="input-group">
                            <input type="password" id="password" class="form-control" placeholder="Enter your password">
                            <span class="input-group-addon"><i toggle="#password" class="fa fa-eye pwd-show"></i></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="button" id="login" value="Register Me" class="btn btn-login-wawooh">
                        <img src="assets/images/AjaxLoader.gif" class="l-image" alt="">
                        <small class="text-center pull-right" style="padding-top: 12px;">
                            <a style="color: #111;" href="#" id="loginReg">Login if already registered</a>
                        </small>
                    </div>

                    <hr>
                    <div class="regNotify">

                    </div>
                    <div class="hr-divider">
                        <span>OR</span>
                        <h3>Sign up with your social account</h3>
                    </div>

                    <div class="quick-register">
                        <ul>
                            <li><a href="#" id="facebook-connect"> <span>Facebook</span></a></li>
                            <li><a href="#" id="google-connect"> <span>Google</span></a></li>
                            <li><a href="#" id="twitter-connect"> <span>Twitter</span></a></li>
                        </ul>
                    </div>
                </form>
            </div>

            <div class="footer">
                <span>&copy; 2018 Wawooh HQ. All Right Reserved.</span>
            </div>
        </div>
    </div>
</section>
<script src="assets/js/jquery-3.2.1.min.js"></script>
<script src="assets/js/wow.min.js"></script>
<script src="assets/js/wawooh.js"></script>
</body>
</html>
