import '../global.js'
import '../plugins/slick.js'


export const MobileNav = () => {
    var navopener = jQuery('.navbar__menu-button'),
    navwrap   = jQuery('.navbar__site-links'),
    links     = navwrap.find('a:not(.has-dropdown-a)'),
    navactive = 'navbar--open';

    navopener.click(function() {
        jQuery('header.navbar').toggleClass(navactive);
    });

    links.click(function() {
        jQuery('header.navbar').removeClass(navactive);
    });

    jQuery('html').on('click touchstart pointerdown MSPointerDown', function(e) {
        var target = jQuery(e.target);
        if(!target.closest(navopener).length && !target.closest(navwrap).length) {
            jQuery('header.navbar').removeClass(navactive);
        }
    });
}

export const AnchorLink = () => {
    jQuery('a[href*="#"]:not([href="#"])').click(function () {
        var headerHeight = jQuery('header.navbar').outerHeight();
        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
            var target = jQuery(this.hash);
            target = target.length ? target : jQuery('[name=' + this.hash.slice(1) + ']');
            if (target.length) {
                jQuery('html, body').animate({
                    scrollTop: target.offset().top - headerHeight + 10
                }, 1000);
                return false;
            }
        }
    });
}

export const SlickSlider = () => {
    jQuery('.slick-slider').slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: true
    });
}