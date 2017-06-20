<?php

namespace Core;

abstract class Endpoint {

    /**
     * Action name to be handled
     *
     * @var string
     */
    protected $action;

    /**
     * Endpoint handler
     *
     * @return mixed
     */
    abstract public function handle();

    /**
     * Register an endpoint
     */
    public function register()
    {
        add_action("wp_ajax_{$this->action}", [$this, 'handle']);
        add_action("wp_ajax_nopriv_{$this->action}", [$this, 'handle']);

        return $this;
    }
}
