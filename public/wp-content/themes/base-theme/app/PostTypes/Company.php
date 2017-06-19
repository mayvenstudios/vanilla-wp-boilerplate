<?php

namespace App\PostTypes;

use Core\PostType;

class Company extends PostType {

    /**
     * @var string Post Type name
     */
    protected $name = 'company';

    /**
     * The singular name, plural name, and slug are generated from the post type name.
     * These can be overridden with the $names array
     *
     * @var array overrides
     */
    protected $names = [
        'plural' => 'Companies'
    ];

    /**
     * Placeholder text which appears in the title field for this post type.
     *
     * @var string
     */
    protected $titlePlaceholder = 'Company name!';

    /**
     * Text which replaces the 'Featured Image' phrase for this post type.
     *
     * @var string
     */
    protected $featuredImageTitle = 'Company logo';
}