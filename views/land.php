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
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
    <title>Welcome Home</title>
    <style type="text/css">
    </style>
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
        <div class="over-content">
            <span>Buyers Here!</span>
        </div>
        <div class="b-cover"></div>
        <div id="owl-demo" class="owl-carousel owl-theme">

            <div class="item">
                <img src="assets/images/img13.jpg">
                <div class="b-cover"></div>
                <span>The test</span>
            </div>
            <div class="item">
                <img src="assets/images/img04.gif">
                <div class="b-cover"></div>
            </div>
            <div class="item">
                <img src="assets/images/img06.jpg">
                <div class="b-cover"></div>
            </div>
            <div class="item">
                <img src="assets/images/img05.jpg">
                <div class="b-cover"></div>
            </div>
            <div class="item">
                <img src="assets/images/buyerafrica.jpeg">
                <div class="b-cover"></div>
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
        <div class="vendor-msg">
            <h3>Vendors</h3>
            <span>Boost sales with <strong>Wawooh</strong> today. Get known across the world.</span>
        </div>
        <div class="btn-pos">
            <a href="designers" target="_new" class="btn btn-vendor"><span>Boost Your Work</span></a>
        </div>
    </div>
</section>

<script src="assets/js/jquery-3.2.1.min.js"></script>
<script src="assets/js/slider/jquery.ba-cond.min.js"></script>
<script src="assets/js/slider/jquery.slitslider.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/wow.min.js"></script>
<script src="assets/js/wawooh.js"></script>

<script>
    $(document).ready(function () {

        var owl = $("#owl-demo");

        owl.owlCarousel({
            navigation: false,
            loop: true,
            dots: false,
            items: 1,
            autoplay: true,
            //transitionStyle: "backSlide",
            autoplayTimeout: 3000,
            animateOut: 'zoomOutLeft',
            animateIn: 'fadeInRight',
            autoplayHoverPause: true
        });

    });
</script>
</body>
</html>
