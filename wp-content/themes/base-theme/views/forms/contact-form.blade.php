<h3>{{ $form_title }}</h3>
<form data-thankyou-text="Thank you for your message. We’ll get back to you as soon as possible." action="{{ admin_url('admin-ajax.php') }}" id="form-contact" method="post">
    <div class="row">
        <input type="hidden" name="action" value="contact_form" />
        <input type="hidden" name="contact-form-nonce" value="{{ wp_create_nonce('contact-form-nonce') }}" />
        <div class="col-sm-5">
            <div class="form-group">
                <input type="text" name="first_name" placeholder="First Name" class="required form-control" />
            </div><!--form-group-->

            <div class="form-group">
                <input type="text" name="last_name" placeholder="Last Name" class="form-control" />
            </div><!--form-group-->

            <div class="form-group">
                <input type="text" name="email" placeholder="Email Address" class="required form-control" />
            </div><!--form-group-->

            <div class="form-group">
                <input type="text" name="phone" placeholder="Phone Number" class="form-control" />
            </div><!--form-group-->
        </div><!--col-->

        <div class="col-sm-5">
            <div class="form-group">
                <textarea name="message" class="form-control required" rows="9" placeholder="Comments" cols="2"></textarea>
            </div>

             <button type="submit" id="contact-submit">Submit</button>
        </div><!--col-->
    </div><!--row-->
</form>