<?php

namespace Core;

abstract class Taxonomy {

    /**
     * Taxonomy name
     *
     * @var string
     */
    protected $name;

    /**
     * The plural, singular, and slug names
     *
     * @var array
     */
    protected $names = [];

    /**
     * List of post types the taxonomy is associated with
     *
     * @var array
     */
    protected $postTypes = [];

    /**
     * Taxonomy settings. For available options
     * @see https://github.com/johnbillion/extended-taxos register_extended_taxonomy()
     * @see https://codex.wordpress.org/Function_Reference/register_taxonomy register_taxonomy()
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
     * Arguments for register_extended_taxonomy function
     *
     * @return array
     */
    public function arguments()
    {
        return $this->args() ?: [];
    }

    /**
     * @return array associated Core\PostType names
     */
    public function postTypeNames()
    {
        return collect($this->postTypes)->map(function ($className) {
            return (new $className)->name();
        })->toArray();
    }

    /**
     * Register taxonomy
     */
    public function register()
    {
        register_extended_taxonomy($this->name(), $this->postTypeNames(), $this->arguments(), $this->names());
        return $this;
    }
}
