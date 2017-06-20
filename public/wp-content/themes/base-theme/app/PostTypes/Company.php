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

    /**
     * Company id
     *
     * @return null|int
     */
    public function id()
    {
        return get_the_ID() ?: null;
    }

    /**
     * Post Type settings. For available options
     *
     * @see https://github.com/johnbillion/extended-cpts register_extended_post_type()
     * @see https://codex.wordpress.org/Function_Reference/register_post_type register_post_type()
     *
     * @return array
     */
    protected function args()
    {
        return [
            'featured_image' => 'Company Logo',
            'enter_title_here' => 'Company Name'
        ];
    }
}