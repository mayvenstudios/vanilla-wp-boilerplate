import '../global.js'


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

export const OpenClose = () => {
    $('[data-more]').next('[data-more-content]').hide();

    $('[data-more]').click(function(e) {
        e.preventDefault();
        // $('[data-more]').not(this).removeClass('active').next('[data-more-content]').slideUp(200);
        $(this).hasClass('active') ? $(this).removeClass('active').next('[data-more-content]').slideUp(200) : $(this).addClass('active').next('[data-more-content]').slideToggle(200);
    })

    $('[data-outside] + [data-more-content]').find('a:not(.hasdrop-a)').click(function() {
        $('[data-outside]').removeClass('active').next('[data-more-content]').slideUp(200);
    })
}

export const Tabs = () => {
    $('ul.tabs li').click(function(){
        var tab_id = $(this).attr('data-tab');

        $(this).siblings().removeClass('current');
        $("#"+tab_id).siblings().removeClass('current');

        $(this).addClass('current');
        $("#"+tab_id).addClass('current');
    })
}