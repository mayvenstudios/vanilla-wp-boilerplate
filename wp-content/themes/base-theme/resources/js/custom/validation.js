(function ($) {

    var validationRules = {

        highlight: function (element) {
            return $(element).closest('.form-group').addClass('has-error');
        },
        unhighlight: function (element) {
            return $(element).closest('.form-group').removeClass('has-error').find('help-block-hidden').removeClass('help-block-hidden').addClass('help-block').show();
        },
        errorElement: 'div',
        errorClass: 'jquery-validate-error',
        errorPlacement: function (error, element) {
            return;
        },
        submitHandler: function(form)
        {
            var $form = $(form);
            var $btn = $form.find('button');

            $btn.attr('disabled',true).text('Sending...');


            $.post($form.attr('action'), $form.serialize(), function(data)
            {
                if(data.status != 'success')
                {

                    alert(data.status);

                    $btn.attr('disabled',false).text('Send');
                }


                if(data.status == 'success')
                {

                    $form.hide();
                    $('<p>' + $form.data('thankyou-text') + '</p>').insertBefore( $form );
                }
            });

            return false;

        },
        rules: {

            email: {
                email: true,
                required: true
            }
        }
    }

    //$('#form-contact').validate(validationRules);

}(jQuery));