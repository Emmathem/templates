<?php
/**
 * @Author
 * Falua Temitope Oyewole
 * faluatemitopeo@gmail.com
 * Fullstack Web Developer
 * Date: Aug 25, 2018 : 11:21 AM
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
    <link rel="stylesheet" href="assets/css/slider/demo.css">
    <link rel="stylesheet" href="assets/css/slider/style.css">
    <link rel="stylesheet" href="assets/css/slider/styleNoJS.css">
    <script src="assets/js/slider/modernizr.custom.79639.js"></script>
    <noscript>
        <link rel="stylesheet" href="assets/css/slider/custom.css">
    </noscript>
    <title>Welcome Home</title>
</head>
<body>
<header class="header">
    <nav>
        <div class="logo-brand">
            <!--            <a href=""><img class="logo-cont" src="assets/images/waw-white.png" alt=""></a>-->
            <a href=""><img class="logo-cont" src="assets/images/logo.png" alt=""></a>
        </div>
        <ul>
            <li><a href="" class="underline">Show Case</a></li>
            <li><a href="" class="underline">Blog</a></li>
            <!--            <li><a href="" class="underline">Shop</a></li>-->
            <li><a class="btn btn-login" href="">Login</a></li>
        </ul>
    </nav>
</header>
<section class="welcome">
    <div class="buyer">
        <div class="b-cover"></div>
        <div class="sl-slider-wrapper" id="slider">
            <div class="sl-slider">
                <div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="-25"
                     data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">
                    <div class="sl-slide-inner">
                        <div class="slider-img slider1"></div>
                        <div class="b-cover"></div>
                    </div>
                </div>

                <div class="sl-slide" data-orientation="vertical" data-slice1-rotation="10" data-slice2-rotation="-15"
                     data-slice1-scale="1.5" data-slice2-scale="1.5">
                    <div class="sl-slide-inner">
                        <div class="slider-img slider2"></div>
                        <div class="b-cover"></div>
                    </div>
                </div>

                <div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="3" data-slice2-rotation="3"
                     data-slice1-scale="2" data-slice2-scale="1">
                    <div class="sl-slide-inner">
                        <div class="slider-img slider3"></div>
                        <div class="b-cover"></div>
                    </div>
                </div>

                <div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="3" data-slice2-rotation="3"
                     data-slice1-scale="2" data-slice2-scale="1">
                    <div class="sl-slide-inner">
                        <div class="slider-img slider4"></div>
                        <div class="b-cover"></div>
                    </div>
                </div>
                <div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="3" data-slice2-rotation="3" data-slice1-scale="2" data-slice2-scale="1">
                    <div class="sl-slide-inner">
                        <div class="slider-img slider5"></div>
                        <div class="b-cover"></div>
                    </div>
                </div>

                <!--<div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="3" data-slice2-rotation="3" data-slice1-scale="2" data-slice2-scale="1">
                    <div class="sl-slide-inner">
                        <div class="slider-img slider6"></div>
                        <div class="slide-overlay"></div>
                    </div>
                </div>-->
            </div>
        </div>
        <div class="btn-buyer-cont">
            <a href="#" class="btn btn-buyer"><span>Take me to shop</span></a>
        </div>
    </div>
    <div class="center-circle animated zoomInDown" data-wow-delay="5s" data-wow-duration=".5s">
        <img src="assets/images/logo-sm.png" alt="">
    </div>
    <div class="seller">
        <div class="v-cover"></div>
        <div class="btn-pos">
            <a href="designers" target="_new" class="btn btn-vendor"><span>Login as a Vendor</span></a>
        </div>
    </div>
</section>

<script src="assets/js/jquery-3.2.1.min.js"></script>
<script src="assets/js/wow.min.js"></script>
<script src="assets/js/wawooh.js"></script>
<script src="assets/js/slider/jquery.ba-cond.min.js"></script>
<script src="assets/js/slider/jquery.slitslider.js"></script>

<script>

</script>
</body>
</html>
