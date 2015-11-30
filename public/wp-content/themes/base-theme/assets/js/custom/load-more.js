jQuery(document).ready(function($)
{   

    $('.btn-load-more-ajax a').on('click',function()
    {
        var btn = $(this);

        var contentTarget = btn.parent().data('target');

        var appendTo = btn.parent().data('append-to');

        var loadMore = btn.parent().data('load-more');

        $.get(btn.attr('href'), function(data)
        {


            $( appendTo ).append($(data).find( contentTarget ));


            var nextBtn = $(data).find( loadMore ).attr('href');

            if(nextBtn)
            {

                btn.attr('href',nextBtn);
            }
            else
            {
                btn.parent().hide();
            }

        });

        return false;
    });
    
});