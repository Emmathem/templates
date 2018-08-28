/**
 * Scripts for Wawooh
 */

/**
 *  When the user scrolls down from 20px from the top of the document
 */

window.onscroll = function () {
    scrollFunction();
};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("icon-top").style.display = "block";
    } else {
        document.getElementById("icon-top").style.display = "none";
    }
}

function topFunction() {
    $("html, body").animate({
        scrollTop: 0
    })
}

$(function () {
    $(window).scroll(function () {
        if ($(this).scrollTop() >= 1)
            $('.header').addClass('scrolled');
        else
            $('.header').removeClass('scrolled');
    });

    $('[name = "d-decision"]').change(function () {
        var use = document.getElementById('acc-detail');
        use.style.display = this.value == "refund" ? "block" : "none";
    });

    $('[name = "d-decision"]').change(function () {
        if ($('#d-shopping').is(":checked")) {
            $('#shopping').show();
            $('#decision-submit').hide();
        } else {
            $('#decision-submit').show();
            $('#shopping').hide();
        }
    });

    //initialize an awesome calendar better than html 5
    // $('.calender').flatpickr({
    //     // minDate: "today",
    //     altFormat: "M j, Y",
    //     //altFormat: "M j, Y h:iK",
    // });

    //control the mobile nav
    $(window).scroll(function () {
        if ($(this).scrollTop() >= 1)
            $('.topNav').addClass('scrolled');
        else
            $('.topNav').removeClass('scrolled');
    });
    //initialize the dropdown for deliver cities based on state selected
    $("#state, #sta").change(function () {
        var cities = $(this).find(":selected").text();
        $.ajax({
            url: '/js/city.json',
            dataType: 'json',
            success: function (res) {
                for (var i = 0; i < res.length; i++) {
                    var a = res[i][cities];
                    // console.log(a);
                    if (a) {
                        var options = '';
                        for (var j = 0; j < a.length; j++) {
                            options += '<option value="' + a[j] + '">' + a[j] + '</option>';
                            $('#city').html(options);
                        }
                    }
                }
            },
            error: function (e) {
                console.log(e);
            }
        })
    });

    //Populate the Local Govt Option for user to select
    $('#state, #sta').change(function () {
        let lga = $(this).find(":selected").text();
        $.ajax({
            url: '/js/lga-state.json',
            dataType: 'json',
            success: function (result) {
                for (let i = 0; i < result.length; i++) {
                    let a = result[i][lga];
                    if (a) {
                        let options = '';
                        for (let j = 0; j < a.length; j++) {
                            options += '<option value="' + a[j] + '">' + a[j] + '</option>';
                            $('#cityId, #lga').html(options);
                        }
                    }
                }
            },
            error: function (e) {
                console.log(e);
            }
        })
    });

    /**
     * Initalize wow js
     */
    var wow = new WOW({
        boxClass: 'wow', // animated element css class (default is wow)
        animateClass: 'animated', // animation css class (default is animated)
        offset: 0, // distance to the element when triggering the animation (default is 0)
        mobile: true, // trigger animations on mobile devices (default is true)
        live: true, // act on asynchronously loaded content (default is true)
        callback: function (box) {
            // the callback is fired every time an animation is started the argument that is
            // passed in is the DOM node being animated
        },
        scrollContainer: null // optional scroll container selector, otherwise use window
    });
    wow.init();

    /**
     * Control the international number on phone input
     */
    // $('#pno, #pn').intlTelInput();


});

function formatCurrency(num) {
    return '₦' + num.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,");
}

function limitDigit(length, inputID = '') {
    $(inputID).attr('maxlength', length)

}

function zoom(e) {
    var zoomer = e.currentTarget;
    e.offsetX ? offsetX = e.offsetX : offsetX = e.touches[0].pageX;
    e.offsetY ? offsetY = e.offsetY : offsetX = e.touches[0].pageX;
    x = offsetX / zoomer.offsetWidth * 100;
    y = offsetY / zoomer.offsetHeight * 100;
    zoomer.style.backgroundPosition = x + '% ' + y + '%';
}

$(function () {
    $('#subscribe').on('click', function () {
        $('#subLoad').show();
        $(this).val('').attr('disabled', 'disabled');
    })
});

$(document).ready(function () {
    // $("#updateModal").modal('show');

    $('.openNav').on('click', function (e) {
        //e.preventDefault();
        $('.profileDrop').slideToggle();
    })

    $('#vM').on('click', function (e) {
        e.preventDefault();
        $('.otherCat').slideToggle();
    })
});

$(document).ready(function () {
    var form_count = 1, previous_form, next_form, total_forms;
    total_forms = $("fieldset").length;
    $(".next-form").click(function () {
        previous_form = $(this).parent();
        next_form = $(this).parent().next();
        next_form.show();
        previous_form.hide();
        setProgressBarValue(++form_count);
    });
    $(".previous-form").click(function () {
        previous_form = $(this).parent();
        next_form = $(this).parent().prev();
        next_form.show();
        previous_form.hide();
        setProgressBarValue(--form_count);
    });
    setProgressBarValue(form_count);

    function setProgressBarValue(value) {
        var percent = parseFloat(100 / total_forms) * value;
        percent = percent.toFixed();
        $(".progress-bar")
            .css("width", percent + "%")
            .html(percent + "%");
    }

// Handle form submit and validation
    $("#register_form").submit(function (event) {
        var error_message = '';
        if (!$("#email").val()) {
            error_message += "Please Fill Email Address";
        }
        if (!$("#password").val()) {
            error_message += "<br>Please Fill Password";
        }
        if (!$("#mobile").val()) {
            error_message += "<br>Please Fill Mobile Number";
        }
// Display error if any else submit form
        if (error_message) {
            $('.alert-success').removeClass('hide').html(error_message);
            return false;
        } else {
            return true;
        }
    });

    //toggle between text and password, save the stress of confirm password input
    $('.pwd-show, .pwdReg-show').on('click', function () {
        $(this).toggleClass("fa-eye fa-eye-slash");
        let field = $($(this).attr("toggle"));
        if (field.attr("type") === "password") {
            field.attr("type", "text");
        } else {
            field.attr("type", "password");
        }
    });

    $('#login').on('click', function () {
        $(this).val("Please wait...").attr("disabled", "disabled");
        $('.l-image').show();
    });

    $('.forgetPwd').on('click', function (e) {
        e.preventDefault();
        $('#loginForm').hide(500);
        $('.regNotify').hide();

        $('#forgotPassword, #pwLogin').show(300);
    });

    $('#loginLink').on('click', function (e) {
        e.preventDefault();
        $('#forgotPassword, #pwLogin').hide(500);
        $('#loginForm').show(300);
        $('.regNotify').show();
        //location.reload();
    });

    $('#regFlip').on('click', function (e) {
        e.preventDefault();
        $('#loginForm').hide(600);
        $('.regNotify').hide();
        $('#regForm').show(800);
        $('.login-form').css({
            'marginTop': '4em'
        });
    });
    
    $('#loginReg').on('click', function (e) {
        e.preventDefault();
        $('#regForm').hide(500);
        $('#loginForm').show(300);
        $('.regNotify').show();
        $('.login-form').css({
            'marginTop': '8em'
        })
        //location.reload();
    });
    
    $('.card').click(function(){
        $(this).toggleClass('flipped');
    });

    let owl = $("#owl-demo");

    owl.owlCarousel({
        navigation: false,
        loop: true,
        dots: false,
        items: 1,
        autoplay: true,
        //transitionStyle: "backSlide",
        //autoplayTimeout: 3000,
        animateOut: 'zoomOutLeft',
        animateIn: 'fadeInLeft',
        autoplayHoverPause: false
    });
    
    $(".scroll-icon").click(function () {
        $("html, body").animate({
            scrollTop: $(".seller").offset().top - 1
        }, 500);
    });
});

$(function () {
    let Page = (function () {
        let $nav = $('#nav-dotd > span'),
            slitslider = $('#slider').slitslider({
                onBeforeChange: function (slide, pos) {
                    $nav.removeClass('nav-dot-current');
                    $nav.eq(pos).addClass('nav-dot-current');
                }
            }),
            init = function () {
                initEvents();
            },
            initEvents = function () {
                $nav.each(function (i) {
                    $(this).on('click', function (event) {
                        let $dot = $(this);
                        if (!slitslider.isActive()) {
                            $nav.removeClass('nav-dot-current');
                            $dot.addClass('nav-dot-current');
                        }

                        slitslider.jump(i + 1);
                        return false;
                    });
                });
            };
        return {
            init: init
        };
    })();
    Page.init();
});