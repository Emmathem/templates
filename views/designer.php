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
    <meta name="google-signin-client_id"
          content="800002756686-mjic1afhgmlmemc1glu26qcbovmpkt3h.apps.googleusercontent.com">
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
            <div class="infoCard">
                <div class="card">
                    <div class="front">
                        <h6>Hey! We Have Something For you</h6>
                    </div>
                    <div class="back">
                        <div class="content">
                            <h3>How it works</h3>
                            <ul>
                                <li>
                                    <span>Register</span>
                                    <img src="../assets/images/clipboard.png" alt="">
                                </li>
                                <li>
                                    <span>Add Products</span>
                                    <img src="../assets/images/cloud.png" alt="">
                                </li>
                                <li>
                                    <span>Earn</span>
                                    <img src="../assets/images/money.png" alt="">
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
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
                        <input type="button" value="Reset my password" class="btn btn-login-wawooh">
                    </div>

                    <div class="regNotify" id="pwLogin">
                        <h3>Already have an already? <a href="" id="loginLink">Login Now</a></h3>
                    </div>
                </form>

                <form action="" id="regForm" style="display: none;">
                    <div class="form-group">
                        <label for="email" class="sr-only">Enter your Store Name</label>
                        <div class="input-group">
                            <input type="text" id="storeName" class="form-control"
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
                        <label for="emailReg" class="sr-only">Enter your email address</label>
                        <div class="input-group">
                            <input type="email" id="emailReg" class="form-control"
                                   placeholder="Let us have your email for updates">
                            <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="passwordReg" class="sr-only">Enter your password</label>
                        <div class="input-group">
                            <input type="password" id="passwordReg" class="form-control"
                                   placeholder="Enter your password">
                            <span class="input-group-addon"><i toggle="#passwordReg" class="fa fa-eye pwdReg-show"></i></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="button" id="regsiter" value="Register Me" class="btn btn-login-wawooh">
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
<script src="https://apis.google.com/js/platform.js" async defer></script>
<!--<script src="https://apis.google.com/js/platform.js?onload=init" async defer></script>-->
<script>
    const CLIENT_ID = "800002756686-mjic1afhgmlmemc1glu26qcbovmpkt3h.apps.googleusercontent.com";
    const SECRET_KEY = "2u4IqtJS2JQgGLfXea3O1LX_";

    function onSignIn(googleUser) {
        var profile = googleUser.getBasicProfile();
        console.log('ID: ' + profile.getId()); // Do not send to your backend! Use an ID token instead.
        console.log('Name: ' + profile.getName());
        console.log('Image URL: ' + profile.getImageUrl());
        console.log('Email: ' + profile.getEmail()); // This is null if the 'email' scope is not present.
    }

    var init = function () {
        //initialise the gapi client
        let initOptions = {
            'apikey': 'AIzaSyBXXDeXmB5TbfRK_6Q3dPlsPTYrQ5RrRL8',
            'clientId': '1050130186322-8k3iif1siab585gtqgtb0rafjdr4pr0i.apps.googleusercontent.com',
            'scope': 'profile email',
        };
        gapi.client.init(initOptions).then(function () {
            // Listen for sign-in state changes.
            gapi.auth2.getAuthInstance().isSignedIn.listen(updateSigninStatus);
            // Handle the initial sign-in state.
            updateSigninStatus(gapi.auth2.getAuthInstance().isSignedIn.get())

        }, function () {
            console.log("Client library initialisation failed");
        });
    }
    var updateSigninStatus = (isSignedIn) => {
        if (isSignedIn) {
            signUpWithGoogle().then((response) => {
                //prefilll information for user
                $("[name='fname'").val(response.names[0].displayNameLastFirst.split(" ")[0]);
                $("[name='lname'").val(response.names[0].displayNameLastFirst.split(" ")[1]);
                $("[name='uname'").val(response.names[0].displayName);
                $("[name='email'").val(response.emailAddresses[0].value);
                $("#imageUser").attr("src", response.coverPhotos[0].url);

            }, (error) => {
                console.log(error);
            });
        }
    };
    //client auth api
    gapi.load("client:auth", init);

    var signUpWithGoogleOnClickHandler = () => {

        if (gapi.auth2.getAuthInstance().isSignedIn.get()) {
            signUpWithGoogle().then((response) => {
                //prefilll information for user
                console.log(response);
                $("[name='fname'").val(response.names[0].displayNameLastFirst.split(" ")[0]);
                $("[name='lname'").val(response.names[0].displayNameLastFirst.split(" ")[1]);
                $("[name='uname'").val(response.names[0].displayName);
                $("[name='email'").val(response.emailAddresses[0].value);
                $("#imageUser").attr("src", response.coverPhotos[0].url);
            }, (error) => {
                console.log(error);
            });
        } else {
            gapi.auth2.getAuthInstance().signIn();
        }
    };
    let signUpWithGoogle = () => {
        //carry out the request using jquery ajax get
        return new Promise((resolve, reject) => {
            let access_token = gapi.auth2.getAuthInstance().currentUser.get().getAuthResponse().access_token;
            let url = 'https://people.googleapis.com/v1/people/me/' +
                '?access_token=' + encodeURIComponent(access_token);
            $.get(url, function (response) {
                resolve(response);
            });
        });
    }
    $("#google-connect").click(signUpWithGoogleOnClickHandler);
</script>
</body>
</html>
