<?php

namespace App\Taxonomies;

use App\PostTypes\Company;
use Core\Taxonomy;

class Industry extends Taxonomy {

    protected $name = 'industry';

    /**
     * The plural, singular, and slug names
     *
     * @var array
     */
    protected $names = [
        'plural' => 'Industries',
        'slug' => 'industries'
    ];

    /**
     * List of post types the taxonomy is associated with
     *
     * @var array
     */
    protected $postTypes = [
        Company::class
    ];

    /**
     * Taxonomy settings. For available options
     *
     * @see https://github.com/johnbillion/extended-taxos register_extended_taxonomy()
     * @see https://codex.wordpress.org/Function_Reference/register_taxonomy register_taxonomy()
     *
     * @return array
     */
    protected function args()
    {
        return [
            'admin_cols' => [
                'updated' => [
                    'title' => 'Updated',
                    'meta_key' => 'updated_date',
                    'date_format' => 'd/m/Y'
                ]
            ]
        ];
    }
}