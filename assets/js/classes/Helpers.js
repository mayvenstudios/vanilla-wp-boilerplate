import '../global.js'


export const MobileNav = () => {
    var navopener = $('.nav-opener'),
    navwrap   = $('.nav'),
    links     = navwrap.find('a'),
    navactive = 'nav-active';

    navopener.click(function() {
        $('body').toggleClass(navactive);
    });

    $('.nav ul li').each(function() {
        var item = $(this);
        var drop = item.find('ul');
        var link = item.find('a').eq(0);
        if(drop.length) {
            item.addClass('hasdrop');
            drop.attr('data-more-content', '');
            if(link.length) link.addClass('hasdrop-a').attr({'data-more': '', 'data-outside': ''});
        }
    });

    links.click(function() {
        $(this).hasClass('hasdrop-a') ? false : $('body').removeClass(navactive);
    });

    $('html').on('click touchstart pointerdown MSPointerDown', function(e) {
        var target = $(e.target);
        if(!target.closest(navopener).length && !target.closest(navwrap).length) {
            $('body').removeClass(navactive);
        }

        if(!(target.closest('[data-outside]').length) && !(target.closest('[data-outside] + [data-more-content]').length)) {
            $('[data-outside]').removeClass('active').next('[data-more-content]').slideUp(200);
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