<?php

namespace App\Taxonomies;

use App\PostTypes\Company;
use Core\Taxonomy;

class Industry extends Taxonomy {

    protected $postTypes = [
        Company::class
    ];

    protected $name = 'industry';

    protected $names = [
        'plural' => 'Industries'
    ];

    protected $adminColumns = [
        'updated' => [
            'title' => 'Updated',
			'meta_key' => 'updated_date',
			'date_format' => 'd/m/Y'
        ],
    ];
}