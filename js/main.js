$(document).ready(function () {

    //Beviteli mezők ellenörzése hogy ki vannak-e töltve
    if ($('.js-registration').length > 0) {
        var first_name = $("fn").value,
            last_name = $("ln").value,
            username = $("username").value,
            password = $("password").value,
            password2 = $("password2").value,
            email = $("email").value,
            phone = $("phone").value,
            address = $("address").value,
            city = $("city").value;

        $('.js-registration').on('submit', function (e) {
            var that = $(this);
            var inputs = that.find('input');
            inputs.each(function () {
                var that = $(this)
                if (that.val() == '') {
                    that.addClass('error')
                }
            })
            if (inputs.hasClass('error')) {
                e.preventDefault();
            } else {
                sendData();
            }
        })
        $('.js-registration input').on('keyup', function () {
            var that = $(this);
            if (that.val().length <= 0) {
                that.addClass('error')
            }
            else if (that.hasClass('password') && that.val().length > 7 || that.hasClass('password2') && that.val().length > 7) {
                that.removeClass('error');
            }
            else if (!that.hasClass('password') && !that.hasClass('password2')) {
                that.removeClass('error');
            }
        })
    }
    function sendData() {
        var xmlhttp;
        if (window.XMLHttpRequest) {
            xmlhttp = new XMLHttpRequest();
        }

        xmlhttp.onreadystatechange = function () {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.querySelector("html").innerHTML = xmlhttp.responseText;
            }
        };

        var first_name = $("fn").value,
            last_name = $("ln").value,
            username = $("username").value,
            password = $("password").value,
            password2 = $("password2").value,
            email = $("email").value,
            phone = $("phone").value,
            address = $("address").value,
            city = $("city").value;


        xmlhttp.open("POST", "userinsert.php", true);
        xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xmlhttp.send("first_name=" + first_name + "&last_name=" + last_name + "&username=" + username + "&password=" + password + "&password2=" + password2 + "&email=" + email + "&phone=" + phone + "&address=" + address + "&city=" + city);
    }

    $(window).on("resize", { break: 1200 }, breakpointChecker);
    function breakpointChecker(event) {
        var width = $(window).outerWidth();
        var breakpoint = event.data.break;

        if (width < breakpoint) {
        } else if (width > breakpoint) {
            $(".nav__wrapper").removeAttr("style");
            $(".nav__wrapper-inner").removeAttr("style");
            $('body').removeClass('overflow');
        }
    }

    $('.nav__open').on("click", function () {
        gsap.to(".nav__wrapper", { duration: .3, autoAlpha: 1 });
        gsap.to(".nav__wrapper-inner", { duration: .3, x: "0" });
        $('body').addClass('overflow');
    })

    $('.nav__close').on("click", function () {
        gsap.to(".nav__wrapper", { duration: .3, autoAlpha: 0 });
        gsap.to(".nav__wrapper-inner", { duration: .3, x: "-150%" });
        $('body').removeClass('overflow');
    })

    $(window).scroll(function () {
        var header = $('.header'),
            scroll = $(window).scrollTop();

        if (scroll > 0) {
            header.addClass('header--sticky');
        }
        else {
            header.removeClass('header--sticky');
        }
    });

    particlesJS.load('particles-js', 'js/particles.json');
});