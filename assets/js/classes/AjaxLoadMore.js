export default class AjaxLoadMore {
    constructor() {
        jQuery('.btn-load-more-ajax a').on('click', (event) => {
            event.preventDefault();
            this.loadMore( jQuery(event.currentTarget) );
        });
    }

    loadMore(btn) {
        let contentTarget = btn.parent().data('target'),
            appendTo = btn.parent().data('append-to'),
            loadMore = btn.parent().data('load-more');

        jQuery.get(btn.attr('href'), (data) => {
            jQuery( appendTo ).append(jQuery(data).find( contentTarget ));
            let nextBtn = jQuery(data).find( loadMore ).attr('href');
            nextBtn ? btn.attr('href',nextBtn) : btn.parent().hide();
        });
    }
}