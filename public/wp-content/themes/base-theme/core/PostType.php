<?php

namespace Core;

abstract class PostType {

    /**
     * @var array
     */
    protected static $instances = [];

    /**
     * @var string Post Type name
     */
    protected $name;

    /**
     * Specify the templates to be used for single page and archive page
     *
     * @var array
     */
    protected $views = [];

    /**
     * The singular name, plural name, and slug are generated from the post type name.
     * These can be overridden with the $names array
     *
     * @var array overrides
     */
    protected $names = [];

    /**
     * Post Type settings. For available options
     * @see https://github.com/johnbillion/extended-cpts register_extended_post_type()
     * @see https://codex.wordpress.org/Function_Reference/register_post_type register_post_type()
     *
     * @return void|array
     */
    abstract protected function args();

    /**
     * @return string
     */
    public function name()
    {
        return $this->name;
    }

    /**
     * @return array
     */
    public function names()
    {
        return $this->names;
    }

    /**
     * Arguments for register_extended_post_type function
     *
     * @return array
     */
    public function arguments() {
        return array_merge($this->args() ?: [], [
            'single_view' => isset($this->views['single']) ? $this->views['single'] : null,
            'index_view' => isset($this->views['index']) ? $this->views['index'] : null,
            'className' => static::class
        ]);
    }

    /**
     * Get post type instance
     * @return static
     */
    public function get()
    {
        $key = get_the_ID() ? : 'null';
        if(!isset(static::$instances[$key])) {
            static::$instances[$key] = $this;
        }
        return static::$instances[$key];
    }

    /**
     * Register post type
     */
    public function register()
    {
        // Ignore built in post types
        if(!in_array($this->name(), ['post', 'page', 'attachment'])) {
            register_extended_post_type($this->name(), $this->arguments(), $this->names());
        }
        return $this;
    }
}