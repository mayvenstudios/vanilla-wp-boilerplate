<?php
namespace App\Endpoints;

use Core\Endpoint;

class ContactForm extends Endpoint {

    protected $action = 'contact_form';

    protected $nonce = 'contact-form-nonce';

    public function handle()
    {
        if (!wp_verify_nonce($_REQUEST[$this->nonce], $this->nonce)) {
            wp_send_json(['status' => 'Busted!']);
        }

        wp_send_json(['status' => 'success']);
    }
}