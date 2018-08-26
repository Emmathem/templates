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
                <form action="">
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
                            <span class="input-group-addon"><i toggle = "#password" class="fa fa-eye pwd-show"></i></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="button" id="login" value="Authenticate Me" class="btn btn-login-wawooh">
                        <img src="assets/images/AjaxLoader.gif" class="l-image" alt="">

                        <a href="" class="forgetPwd pull-right">Forgot Password?</a>
                    </div>
                </form>

                <div class="hr-divider" style="display: none;">
                    <span>OR</span>
                    <h3>Don</h3>
                </div>
                <hr>

                <div class="regNotify">
                    <h3>Don't have an account? <a href="">Register Now</a></h3>
                </div>
                <div class="quick-register" style="display: none;">
                    <ul>
                        <li><a href="#"  id="facebook-connect"> <span>Facebook</span></a></li>
                        <li><a href="#"  id="google-connect"> <span>Google</span></a></li>
                        <li><a href="#"  id="twitter-connect"> <span>Twitter</span></a></li>
                    </ul>
                </div>
            </div>

            <div class="footer">
                <span>&copy; 2018 Wawooh HQ. All Right Reserved.</span>
            </div>
        </div>
    </div>
</section>
<script src="assets/js/jquery-3.2.1.min.js"></script>
<script src="assets/js/wow.min.js"></script>
<script src = "assets/js/wawooh.js"></script>
</body>
</html>
