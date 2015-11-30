<form action="{{ admin_url('admin-ajax.php') }}" method="post">
    <input type="text" name="name" placeholder="Your Name" />
    <input type="hidden" name="action" value="contact_form" />
    <input type="hidden" name="contact-form-nonce" value="{{ wp_create_nonce('contact-form-nonce') }}" />
</form>