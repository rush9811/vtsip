$(document).ready(function () {

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