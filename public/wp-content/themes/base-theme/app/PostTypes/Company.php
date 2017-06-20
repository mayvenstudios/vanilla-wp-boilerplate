<?php

namespace App\PostTypes;

use Core\PostType;

class Company extends PostType {

    protected $name = 'company';

    protected $views = [
        'single' => 'company/single',
        'index' => 'company/index'
    ];

    protected $names = [
        'plural' => 'Companies'
    ];

    protected $titlePlaceholder = 'Company name!';

    /**
     * Text which replaces the 'Featured Image' phrase for this post type.
     *
     * @var string
     */
    protected $featuredImageTitle = 'Company logo';

    public function id() {
        return get_the_ID();
    }
}